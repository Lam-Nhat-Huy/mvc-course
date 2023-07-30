<?php
class Database
{
    public $conn;
    protected $severname = "localhost";
    protected $username = "root";
    protected $password = "kalosonits14";
    protected $dbname = "mvc";

    function __construct()
    {
        $this->conn = mysqli_connect($this->severname, $this->username, $this->password, $this->dbname);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
}
