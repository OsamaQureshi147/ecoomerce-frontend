<?php

include 'config.php';
?>

<?php

include 'config.php';
error_reporting(0);


if (isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

//echo  "<br>";
//echo  $email;
//echo  "<br>";
//echo  $password;
//echo  "<br>";
//echo  $confirm;

$result= mysqli_query($conn,"select * from user_form where email='$email' and password='$password' limit 1");

if (mysqli_num_rows($result)>0){

 header('location:payment.php');
  
   } 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="lo&res.css?v=<?$version?>">


</head>
<body>


   

<div class="upperline">
<h3><span>ENJOY UPTO $75 </span>  ON SELECT PRODUCTS</h3>
</div>

<header>
<input type="checkbox" name="" id="toggle">
<label for="toggle" class="fa fa-bars"></label>

<a href="" class="logo"><img src="pic/green.png">M̶ A<span>Đ</span>RA</a>
<nav class="navbar">
<a href="skin.html" class="active" style="color: #088178;">Home</a>
<a href="http://localhost/ecoomerce/shop.html">Shop</a>
<a href="file:///D:/xampp/htdocs/ecoomerce/our%20story.html">About</a>
<a href="http://localhost/ecoomerce/contact.php">Contact</a>
</nav>


<div class="icon">
<a href="http://localhost/ecoomerce/login.php"  class="fa fa-user"></a>
<a href="http://localhost/ecoomerce/shoppingcart.php"  class="fa fa-shopping-cart"></a>
<a href="#"  class="fa fa-search" id= "search-btn"></a>

</div>


</header>

<script>

window.addEventListener("scroll", function(){
  var header= document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})


</script>
<div class="form-container">
   <form action=" " method="POST">
      <h3>Login now</h3>
      <input type="email" name="email" required placeholder="Email" class="box">
      <input type="password" name="password" required placeholder="Password" class="box">
      <input type="submit" name="submit" class="btn" value="Login Now">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>

</div>

<footer class="section-p1">
<div class="col">
<h2><img src="pic/green.png">MA<span>D</span>RA</h2>
<h4>Contact</h4>
<p><strong>Address:</strong> 562 welligton Road, 32 street, San Fransico</p> 
<p><strong>Phone:</strong> 011 222 612/(+01)01 2334 1567</p> 
<p><strong>Hours:</strong> 10:00-18:00, Mon-Sat</p> 
<div class="Follow">
<h4>Follow us</h4>
<div class="links">
 <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
 <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a> </a> 
  <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> 

</div>
    
</div>
</div>
<div class="col">
<h4>About</h4> 
<a href="file:///C:/Users/Anam.DESKTOP-2T2RI4O/Desktop/our%20story.html">About us</a>
<a href="file:///D:/xampp/htdocs/ecoomerce/e-commerce-website.html#">Home</a>
<a href="http://localhost/ecoomerce/shop.html">Shop</a>
<a href="http://localhost/ecoomerce/contact.php">Contact us</a>
</div>

<div class="col">
<h4>My Account</h4> 
<a href="http://localhost/ecoomerce/register.php">Sign In</a>
<a href="http://localhost/ecoomerce/shoppingcart.php">View Cart</a>
<a href="http://localhost/ecoomerce/login.php">Login</a>
<a href="">Help</a>

</div>

<div class="col install">
<h4>Install App</h4> 
<p>From App Store or Google App </p>
<div class="row">
<img src="pic/app.jpg">
<img src="pic/play.jpg">
</div>
<div class="gate">
<p>Secured Payment Gateway</p>
<img src="pic/pay.png">
</div>
</div>
<div class="copy-right">
<p>@2022,Mk  etc-HTML CSS JAVASCRIPT Ecommerce Template</p>
</div>
</footer>



</body>
</html>