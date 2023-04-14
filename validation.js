
$(document).ready(function () {

  // validating first name
        $("#fname").on('input',function(){
          $fname = $(this).val().trim();

              if ($fname.length >= 3 ){                       
              $("#err-fname").text("");
              $("#fname").css("border", "none");    
            } else{
              $("#fname").css("border", "2px red solid");
              $("#err-fname").text(" first name should be at least 3 characters long");
                return false;
            }
        $("#lname").on('input',function(){
            $lname = $(this).val().trim();
            if ($lname.length >= 3 ){                       
              $("#err-lname").text("");
              $("#lname").css("border", "none");
            }else{ 
              $("#lname").css("border", "2px red solid");
              $("#err-lname").text(" last name should be at least 3 characters long");
              return false;
            }
        });
        $("#nxt_1").click(function (e) {
        e.preventDefault();
  // setting it into sessionStorage
  if($fname.length >= 3 && $lname.length >= 3){
      sessionStorage.setItem("fname", $fname);
      sessionStorage.setItem("lname", $lname);
      $("#fld_1").hide(); //step 1
      $("#fld_2").show(); //step 2
      $("#fld_3").hide(); //step 3
  }else{
    $("#fld_1").show(); //step 1
    $("#fld_2").hide(); //step 2
    $("#fld_3").hide(); //step 3
  }
    });
  });  
  // btn: prv_1 to naviagte user from step 2 back to step 1
    $("#prv_2").click(function () {
      $("#fld_1").show();
      $("#fld_2").hide();
      $("#fld_3").hide();
    });
  
  // validating dob & gender
  
    $("#dob").on('input',function(){
  
  $dob = $("#dob").val();
  $date = new Date();
          
  if ($dob === "" || new Date($dob) > $date ) {
    $("#err-dob").text("Please enter valid date of birth.");
    $("#dob").css("border", "red 2px solid");
     return false;
    }else {
    $("#err-dob").text("");
    $("#dob").css("border", "none");
   } 
     $("#gen").on('input', function(){
      $gen = $("#gen").val();
  
      if ($gen === "default") {
        $("#err-gen").text("Please choose your gender.");
        $("#gen").css("border", "2px red solid");
      } else {
        $("#err-gen").text("");
        $("#gen").css("border","none");
      }
      $("#nxt_2").click(function (e) {
      e.preventDefault();
  // setting it into sessionStorage
      sessionStorage.setItem("dob", $dob);
      sessionStorage.setItem("gen", $gen); 
      $("#fld_1").hide();
      $("#fld_2").hide();
      $("#fld_3").show();
       
    });
    });
  });
    
  // btn: prv_3 to naviagte user from step 3 back to step 2
    $("#prv_3").click(function(){
      $("#fld_1").hide();
      $("#fld_2").show();
      $("#fld_3").hide();
      $("#fld_4").hide();
    });
  // btn: nxt_3 to naviagte user from step 3  to preview
// validating email 
$("#mail").on('input',function(){
  $mail= $("#mail").val();
  $emailRegex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if (!$emailRegex.test($mail) || $mail === '') {
    $("#err-mail").text("Invalid email address");
    $("#mail").css("border", "2px red solid");
  } else {
    $("#err-mail").text("");
    $("#mail").css("border", "none");
  }
});

// validating phone number
$("#tel").on('input',function(){
  $tel = $("#tel").val();
  $telRegex =/^[6-9][0-9]{9}$/;
  if($telRegex.test($tel)){
    $("#err-tel").text("");
    $("#tel").css("border","none");
  }else{
    $("#err-tel").text("Invalid phone number");
    $("#tel").css("border", "2px red solid");
    return false ;
    
  }
});
// btn: nxt_3 to save data from user into database
$("#nxt_3").click(function(e) {
  e.preventDefault();
  $mail = $("#mail").val();
  $tel = $("#tel").val();
  // setting it into sessionStorage
  sessionStorage.setItem("mail", $mail);
  sessionStorage.setItem("tel", $tel);
  // setting cookies
  // set cookie
            // function setCookie(name, value, days) {
            //   var expires = "";
            //   if (days) {
            //       var date = new Date();
            //       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            //       expires = "; expires=" + date.toUTCString();
            //   }
            //   document.cookie = name + "=" + (value || "") + expires + "; path=/";
            // }
            // setCookie("f_nameCookie", sessionStorage.getItem("fname"), 1); 
            // setCookie("l_nameCookie", sessionStorage.getItem("lname"), 1); 
            // setCookie("dobCookie", sessionStorage.getItem("dob"), 1); 
            // setCookie("genderCookie", sessionStorage.getItem("gen"), 1); // set cookie for 1 day
            // setCookie("mailCookie", sessionStorage.getItem("mail"), 1);
            // setCookie("telCookie", sessionStorage.getItem("tel"), 1); 


//remove all the data from sessionStorage
  sessionStorage.clear();
});

    });
  
    
 