
<?php

include 'config.php';
error_reporting(0);

if (isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//echo  "<br>";
//echo  $email;
//echo  "<br>";
//echo  $number;
//echo  $message;
}

$res= mysqli_query($conn,"insert into users (name,email,message)values('$name','$email','$message')");

//if ($res){
	// echo '<script> alert("Your Message has recieved")</script>';
//}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact us</title>
	<link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
<a href="skin.html" >Home</a>
<a href="http://localhost/ecoomerce/shop.html">Shop</a>
<a href="our story.html">About</a>
<a href=" #" class="active" style="color: #088178;">Contact</a>
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

<section id="bg-pics">
<h2>#Let's_talk</h2>
<p><strong>LEAVE A MESSAGE</strong>, We love here from you</p> 
</section>


    <div class="container">
  <form  method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">NAME:</label>
      </div>
      <div class="col-75"> <input type="text" name="name"  placeholder="Your Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">EMAIL ADDRESS:</label>
      </div>
      <div class="col-75">
      <input type="email" name="email" placeholder="Email" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">MESSAGE:</label>
      </div>
      <div class="col-75">
        <textarea type="text" name="message" placeholder="Write Something.." style="height:200px"></textarea>
       
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" class="btn" value="Send Message">
    </div>
  </form>
</div>
 

 <section class="review" id="review">

    <h1> Customer's Say </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="pic/pic.jpg" alt="">
                <p>Great service, speedy and well packaged. Item ordered as expected and good price. Definitely recommend this site</p>
                <h3>Sahil Ahmed</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic/gh.jpg" alt="">
                <p>I was looking for cruelty free makeup and treatments and am glad i happened upon the website.  I have already recommended the website to other people.</p>
                <h3>Sarik mathur</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic/hhh.png" alt="">
                <p>Wide range of ethical, chemical free and organic products. Very reasonable prices. The website was very easy to use.</p>
                <h3>camelia seth</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic/f.png" alt="">
                <p>"Great range of products, always offer some freebies at checkout depending on the size of the order, and delivery is very prompt and in eco-friendly packaging"</p>
                <h3>johnika deo</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript">
var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});
</script>


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