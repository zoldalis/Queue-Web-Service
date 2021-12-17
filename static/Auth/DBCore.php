<?php
class dbConnection
{
    public function __construct(string $host, string $user, string $password, string $database)
    {
        $this->_host = $host;
        $this->_user = $user;
        $this->_password = $password;
        $this->_database = $database;
        $this->_dbConnect = mysqli_connect("localhost","admin","1234","guidebook");
        if($this->_dbConnect)
            mysqli_set_charset($this->dbConnect,"utf8");
        else
            $this->connectionErrorHandling();
    }

    public function isConnectionSuccessful()
    {
        if($this->_dbConnect)
            return true; 
        else
            return false;
    }

    public function select(string $selector,string $database,string $tableName, string $condition = "")
    {
        $queryStr ="";
        if($condition == "")
            $queryStr ="SELECT {$selector} FROM {$database}.{$tableName}";
        else
            $queryStr =  "SELECT {$selector} FROM {$database}.{$tableName} WHERE {$condition}";
         if($database != $this->_database)
            return assert(false);
         return $this->query($queryStr);
    }
    
    public function selectAllFromTable(string $database,string $tableName)
    {
        return $this->select("*",$database,$tableName);
    }

    private function query(string $query)
    {
        return $this->isConnectionSuccessful() ? mysqli_query($this->_dbConnect,$query) : assert(false);
    }

    private function connectionErrorHandling()
    {
        header("Location: /error.php");
        Exit();
    }

    private mysqli $_dbConnect;
    private string $_host;
    private string $_user;
    private string $_password;
    private string $_database;
    
}
?>