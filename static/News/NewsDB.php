<?php 
include '/dev/WebProject/static/Auth/DBCore.php';
class NewsDBManager extends dbConnection
{
    public function __construct()
    {
        return parent::__construct("localhost","root","1234","guidebook");
    }

    public function getAllNews()
    {
        return parent::selectAllFromTable("guidebook","News");
    }
}