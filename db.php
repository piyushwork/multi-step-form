<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'db_credentials.php';

// checking connection to database
if($conn->connect_error){
    die("connection failed: ".$conn->connnect_error);
}
else{
    echo "database connected <br>";
}

// checking whether we got data or not
if(empty($_POST)){
    die("couldn't fetch data");
}
// echo var_dump($_POST);

// declaring variables to store contents of $_POST
$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$dob = $_POST["dob"];
$gender = $_POST["gen"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];

// escaped variables to protect database and data
// $esc
$qry = "INSERT INTO multi(first_name,last_name,date_of_birth,gender,e_mail,phone_num) VALUES('$f_name','$l_name','$dob','$gender','$mail','$tel')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php
if($conn->query($qry) === TRUE){
    echo "<div class= 'd-flex flex-column justify-content-center align-items-center'> 
    <span class= 'h4'>Your data has been saved successfully...
    </span>
    <br>
    <button class ='btn btn-primary'><a href='form.php' class='text-reset'>Click here to get to form again</a></button>
    <br>
   

    </div>" ;
}
else{

    
    die("couldn't save data ");
}
?>


</body>
<!-- </html> <button class ='btn btn-primary'><a href='getData.php' class='text-reset'>Click here to get to get details</a></button> -->