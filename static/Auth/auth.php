<?php
    
    include 'DBCore.php';

    if ( isset( $_POST['login'] ) ) 
    { 

        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    $_POST['password']; 
        $hashed_password =  password_hash($_POST['password'], PASSWORD_DEFAULT); 
    
        $is_user_exist = false;
        
        $fh = fopen('passwords.txt','r');

        while ($line = fgets($fh)) {
        $pair = explode('|',$line);
            $loc_name = $pair[0];
            $loc_pass = substr($pair[1], 0, -1);
            if($username == $loc_name && password_verify($password,$loc_pass))
                $is_user_exist = true;
        }
        fclose($fh);
        if($is_user_exist)
        {
            header("Location: /static/MainPage.php?answer=1&login={$username}");
            Exit();
        }
        else
        {
            header("Location: /static/Auth/login.php?answer=0");
            Exit();
        }
    }

    if ( isset( $_POST['register'] ) ) 
    {
        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    $_POST['password'];
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $is_user_exist = false;
        
        $passQuery = "SELECT * FROM authdata WHERE (authdata.login == {$username})";
        $result = null;
        if($dbConnect)
            $result = mysqli_query($dbConnect,$passQuery);
        $hash = "";
        foreach($result as &$row)
            $hash = $row['pass'];
        
        $is_user_exist = $hash != "";
            
        if($is_user_exist)
            header("Location: /static/Auth/login.php?answer=0");

        else
        {
            $addQuery = "INSERT INTO authdata (login,pass,name,email,last_date_auth) VALUES ( {$username} , {$hashed_password} ,'name' ,'mail', 'date')";
            if($dbConnect)
                mysqli_query($dbConnect,$addQuery);
            header("Location: /static/MainPage.php?answer=1&login={$username}");
        }
        fclose($fh);
        Exit();
    }

    ?>