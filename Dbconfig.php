<?php

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "dblogin";

try
{
     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'class.user.php';
$user = new USER($DB_con);

// class Connection {

//     protected $host = "localhost";
//     protected $dbname = "dblogin";
//     protected $user = "root";
//     protected $pass = "";
//     protected $DBH;

//     function __construct() {

//         try {

//             $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
//         }
//         catch (PDOException $e) {

//             echo $e->getMessage();
//         }
//     }

//     public function closeConnection() {

//         $this->DBH = null;
//     }
// }