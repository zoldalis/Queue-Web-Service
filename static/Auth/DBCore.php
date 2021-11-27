<?php

$dbConnect = mysqli_connect("localhost","user","password1234","guidebook");
if($dbConnect)
{
    mysqli_set_charset($dbConnect,"utf8");
}
?>