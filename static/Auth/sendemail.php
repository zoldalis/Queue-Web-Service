<?php

require_once 'DBCore.php';

$username = $_GET['login'];
$passQuery = "SELECT * FROM guidebook.authdata WHERE (authdata.login LIKE '{$username}')";
$result = mysqli_query($dbConnect,$passQuery);

$email = "";
while ($row = mysqli_fetch_array($result)) {
    $email = $row['email'];
}

$code = rand(100000,999999);

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "To: <$email>\r\n";
    $headers .= "From: <example@gmail.com>\r\n";
        // Сообщение для Email
        $message = "
        <html>

        <head>
            <title>Подтвердите Email</title>
        </head>

        <body>
            <p>Код восстановления: {$code}</p>
        </body>

        </html>
        ";

        $res = mail($email, 'Email password recover', $message, $headers);
        echo "{$email}";
?>