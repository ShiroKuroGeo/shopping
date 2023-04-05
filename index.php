<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- custom css file link  -->
</head>
<body>
<header class="header">
  <div class="logo">
    <i class="fas fa-shopping-basket"></i>
    Ecoshop Log In
  </div>
</header>
<div class="container">
  <img src="./images/logo.png" width="300" ><br>
    <h1>Show your <span>TALENT</span> by creating a <br>handmade products in here  </h1>
  <form method="post">
    <div class="form" id="form">
      <h2>Log In</h2>
        <input type="text" id="email" name="email" placeholder="Email@" >
        <input type="password" id="password" name="password" placeholder="Type your password here"><br>
        <a href="newuser.php"><i aria-hidden="true">Dont have an account?</i></a><br>
        <button type="button" class="loginUser" id="btnLogin">Log In</button>
    </div>
  </form>
</div>
<!-- footer section starts  -->
<section class="footer">
  <div class="box-container">
    <div class="box">
        <h3>Eco Rules</h3>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i>About Us </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i>Thing to follow</a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i>How to </a>
    </div>
  </div>
  <div class="credit">
    created by
    <span> 
      Group bungogon 
    </span>
    | all rights reserved
  </div>
</section>

  <!-- scrit for Jquery -->
  <script src="javaScript/jquery.js"></script>
  <!-- footer section ends -->
  <script src="js/sweetalert/dist/sweetalert.min.js"></script>
  <!-- script for login js -->
  <script src="javaScript/UserLogin.js"></script>
</body>
</html>