<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// importing database file with credentials
require 'db_credentials.php';

// checking connection
if($conn->connect_error){
    die("couldn't connect: ".$conn->connect_error);
}
// else{
//     echo " connection established succesfully";
// }

// adding a field id
$qry = "CREATE TABLE multi(
    id bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name char(25) NOT NULL,
    last_name char(25) NOT NULL,
    date_of_birth date,
    gender varchar(10),
    e_mail varchar(255),
    phone_num bigint)";

// check 
if($conn->query($qry) === FALSE){
    die("couldn't execute query");
}
else{
    echo("query exucuted successfully");
}

?>