<?php
$dbConnect = mysqli_connect("localhost","admin","1234","guidebook");
if($dbConnect)
    mysqli_set_charset($dbConnect,"utf8");
else
{
    header("Location: /error.php");
    Exit();
}
?>