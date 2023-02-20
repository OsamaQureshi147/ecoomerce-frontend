<?php

include 'links.php';
include 'config.php';
error_reporting(0);

if (isset($_POST['submit'])){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$adress=$_POST['address'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

//echo  "<br>";
//echo  $firstname;
//echo  "<br>";
//echo  $lastname;
//echo  "<br>";
//echo  $address;
//echo  "<br>";
//echo  $password;
//echo  "<br>";
//echo  $confirm;
//echo  "<br>";
//echo  $dob;
//echo  "<br>";
//echo  $gender;
}

$res= mysqli_query($conn,"INSERT INTO registration (Firstname, lastname, address, password, cpassword, dob, gender)VALUES('$firstname','$lastname','$address','$password','$confirm','$dob','$gender')");
if ($res){
 echo '<script> alert("Your Order has confirmed")</script>';
}

else{

   echo "window.location='login.php'";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    	
      <div class="col-12  d-flex ml-5">
        <div class="card card-registration my-5">
          <div class="row g-0">
            
   <div class="col-xl-6 d-none d-xl-block mr-5">
              <img src="pic/award.jpg" class="img-fluid"
style="border-top-left-radius: .20rem; border-bottom-left-radius: .20rem;  " />
            </div>

            <div class="col-xl-5">
              <div class="card-body p-md-5 text-center text-black">
                <h3 class="mb-5 text-uppercase">PAYMENT PROCEDURE</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <div class="form-outline mb-2">
              <form method="POST">          
            <input type="text"  name="fname" placeholder="First Name" class="form-control" style= "outline: 1px solid #222;font-size:14px;">
          </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline mb-2">
           <input type="text"  name="lname" placeholder="Last Name" class="form-control "style= "outline: 1px solid #222;font-size:14px;">
          </div>
                  </div>
               

              
                <div class="form-outline mb-3 mt-0">
            <input type="text"  name="address" placeholder="Address" class="form-control " style= "outline: 1px solid #222; font-size:14px;">
          </div>

<div class="form-outline mb-3">
            <input type="text"  name="password" placeholder="Password" class="form-control "style= "outline: 1px solid #222;font-size:14px;">
          </div>
          <div class="form-outline mb-4">
            <input type="text"  name="confirm" placeholder="Confirm Password" class="form-control "style= "outline: 1px solid #222;font-size:14px;">
          </div>
               

               

                  <div class="form-group mb-0 " style="font-size:16px;">
                     <label for="">Gender</label>
 <input  type="radio" name="gender" value="female"   class="form-group ml-4" /> Female
<input  type="radio" name="gender" value="male" class="form-group ml-2" /> Male
<input  type="radio" name="gender" value="other" class="form-group ml-2"/> Other
                  </div>
<div class="form-outline mb-5 mt-3">
            <input type="text"  name="dob" placeholder="Date Of Birth" class="form-control "style= "outline: 1px solid #222;font-size:14px;">
          </div>

                

             

              

                
                  <button  value="submit"  name="submit"   class="btn btn-success    ">Order Confirm </button>
                
                </div>
 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>