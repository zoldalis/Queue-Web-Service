
<?php
    
    if ( isset( $_POST['login'] ) ) 
    { 

        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    password_hash($_POST['password'], PASSWORD_DEFAULT); 
    
        $is_user_exist = false;
        
        $fh = fopen('passwords.txt','r');

        while ($line = fgets($fh)) {
        $pair = explode('|',$line);
            $loc_name = $pair[0];
            $loc_pass = $pair[1];
            echo("{$loc_name} - {$loc_pass}");
            echo("{$username} - {$password}");
            if($loc_name == $username && $loc_pass == $password)
                $is_user_exist = true;
        }
        fclose($fh);
        if($is_user_exist)
            echo("access granted");
        else
            echo("access denied");
    }

    if ( isset( $_POST['register'] ) ) 
    {
        $username =     filter_var($_POST['loginText'],FILTER_SANITIZE_STRING);
        $password =    password_hash($_POST['password'], PASSWORD_DEFAULT);

        $is_user_exist = false;
        
        $fh = fopen('passwords.txt','r');

        while ($line = fgets($fh)) {
        $pair = explode('|',$line);
            $loc_name = $pair[0];
            $loc_pass = $pair[1];
            if($loc_name == $username && $loc_pass == $password)
                $is_user_exist = true;
        }
        
        if($is_user_exist)
            echo("user already exist");
        else
        {
            echo("registration was successful");
            file_put_contents("passwords.txt","{$username}|{$password}\n");
        }
        fclose($fh);


    }

    ?>