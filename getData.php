<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// importing database file
require 'db_credentials.php';

// checking connection
if($conn->connect_error){
    die("failed to establish connection".$conn->conmect_error);
}

$qry = "SELECT * from multi where id = 2";
$result = $conn->query($qry);

if($result && $result->num_rows > 0){
    do {
        echo "<ul>User Details <br>"."<li>user id: ".$data["id"]."</li>"."<li> user name: ".$data["first_name"].$data["last_name"]."</li>"."<li>user DOB: ".$data["date_of_birth"]."</li>".
        "<li>user gender: ".$data["gender"]."</li>"."<li>user e-mail: ".$data["e_mail"]."</li>"."<li>user contact no.: ".$data["phone_num"]."</li>"."</ul>"; 
    } while ($data = mysqli_fetch_assoc($result));
}
?>