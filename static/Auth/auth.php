<?php
    require_once 'DBCore.php';
    $dbConnection = new dbConnection("localhost","root","1234","guidebook");

    if ( isset( $_POST['login'] ) ) 
    { 

        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    $_POST['password']; 
        
        //$hashed_password =  password_hash($_POST['password'], PASSWORD_DEFAULT); 
    
        $is_user_exist = false;
        
        //$passQuery = "SELECT * FROM guidebook.authdata WHERE (authdata.login LIKE '{$username}')";
        $result = $dbConnection->select("*","guidebook","authdata","(authdata.login LIKE '{$username}')");
        
        //foreach($result as &$row)
        //{
        //    $hash = $row['pass'];
        //    $is_user_exist = password_verify($password,$hash);    
        //}
        while ($row = mysqli_fetch_array($result)) {
            $hash = $row['pass'];
            $is_user_exist = password_verify($password,$hash);
        }

        if($is_user_exist)
        {
            session_start();
            $_SESSION['login'] = $username;
            header("Location: /static/MainPage.php");
            Exit();
        }
        else
        {
            header("Location: /static/Auth/login.php?answer_val=0&answer_text='Wrong input data.'");
            Exit();
        }
    }

    if ( isset( $_POST['register'] ) ) 
    {
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    $_POST['password'];
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $is_user_exist = false;
        
        //$passQuery = "SELECT * FROM authdata WHERE (authdata.login == {$username})";
        $result = $dbConnection->select("*","guidebook","authdata","(authdata.login LIKE '{$username}')");
        $hash = "";
        //if(!$result)
        //{
        //    header("Location: /static/Auth/register.php?answer_val=0&answer_text='Something went wrong with getting authdata, try again later.'");
        //    Exit();
        //}
        
        foreach($result as &$row)
            $hash = $row['pass'];
        
        $is_user_exist = $hash != "";
            
        if($is_user_exist)
        {
            header("Location: /static/Auth/register.php?answer_val=0&answer_text='That login already exist.'");
            Exit();
        }
        else
        {
            $date = date('Y-m-d H:i:s');
            
            $addQuery = "INSERT INTO guidebook.authdata
            (login, pass, name, email, last_date_auth) VALUES ( '{$username}' , '{$hashed_password}' ,'{$name}' ,'{$mail}', '{$date}');";
            $result = $dbConnection->query($addQuery);
            if($result)
            {
                session_start();
                $_SESSION['login'] = $username;
                header("Location: /static/MainPage.php");
                Exit();
            }
            header("Location: /static/Auth/register.php?answer_val=0&answer_text='Something went wrong, try again later.'");
            Exit();
        }
        Exit();
    }

    ?>