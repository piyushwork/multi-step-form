<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./validation.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<div id= "div">
  
  <!-- first form -->
<form action="db.php" method="post" class="form-group ">
  <div id="fld_1" class="ccontainer col-lg-4 " style="display:block;">
    <fieldset class="d-flex flex-column justify-content-center m-3">
      <legend>Step 1</legend>
              <br>
            <label for="fname"> First Name </label>
            <input type="text" class="form-control" name="fname" id="fname" require>
            <span id="err-fname" style="color: red;"></span>
            <br>
            <label for="lname"> Last Name </label>
            <input type="text" class="form-control" name="lname" id="lname" require>
            <span   id="err-lname" style="color: red;"></span>
            <br>
            <button class="btn btn-success col-lg-3" id="nxt_1" type="button">Next</button> 
    </fieldset>
  </div>

<!-- second form -->

  <div id="fld_2" class="container col-lg-4" style="display:none;">
   <fieldset class="d-flex flex-column justify-content-center m-3">
     <legend>Step 2</legend>
      <br>
          <label for="dob"> DOB </label>
          <input type="date" class="form-control" name="dob" id="dob">
          <span id="err-dob" style="color: red;"></span>
      <br>
          <label for="gen"> Gender </label>
          <select name="gen" id="gen" class="form-control"  >
            <option value="default">Choose your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
          </select>
          <span id="err-gen" style="color: red;"></span>
        <br>
        <br>  
          <button class="btn btn-success mr-2 col-lg-3" id="prv_2" type="button">Previous</button>
          <button class="btn btn-success col-lg-3" id="nxt_2" type="button">Next</button> 
   </fieldset>
  </div>

<!-- third form -->

  <div id="fld_3" class="container col-lg-4 " style="display:none;">
   <fieldset class="d-flex flex-column justify-content-center m-3">
     <legend>Step 3</legend>      
    <br>
        <label for="mail"> Enter Your Mail ID:  </label>
        <input type="mail" class="form-control" name="mail" id="mail">
        <span id="err-mail" style="color: red;"></span>
     <br>
        <label for="tel"> Enter Your Contact Number: </label>
        <input id="tel" type="number" class="form-control" name="tel" maxlength="10"  >
        <span id="err-tel" style="color: red;"></span>
    <br>
    <!---->
        <button class="btn btn-success col-lg-3 mr-2" id="prv_3" type="button">Previous</button>
        <!-- <button class="btn btn-success" id="nxt_3" type="submit">Save</button>  -->
        <input type="submit" class="btn btn-success col-lg-3" value="button">
   </fieldset>  
  </div>
  </form>

</body>
</html>
