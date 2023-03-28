<?php
class db {
    public $db;
    function dbconnect() {
        $dbhost = "rdbms.strato.de";$user = "dbu2079358";$pass = "Chris1908!";$database = "dbs10046536";
        $this->db = mysqli_connect($dbhost, $user, $pass, $database);
        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        } else {  
            $db['error'] =  "Connection to database successfull". $this->db->connect_error;
        }
        return $db;
    }
}