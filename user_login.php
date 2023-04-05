<?php

  include "./includes/login.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="./css/login.css">

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
</head>

<body>
<header class="header">

<a href="index.html" class="logo"> <i class="fas fa-shopping-basket"></i> Ecoshop Log In &#8594;</a>

</header>
<div class="container">
  
<img src="./images/logo.png" width="300" ><br>
    <h1>Show your <span>TALENT</span> by creating a <br>handmade products in here  </h1>
<form action="user_login.php" method="POST">
          <div class="form" id="form">
                               <h2>Log In</h2>
                               <input type="text" id="username" name="username" placeholder="Type your username here" autocomplete="off"><br>
                               <input type="password" id="password" name="password" placeholder="Type your password here" auto-complete="off"><br>
                               <a href="newuser.php"><i aria-hidden="true">dont have an account?</i></a><br>
                               <button type="submit" name="submit">Log In</button><tr>
          </div>
</div>



</body>
<?php
include './includes/footer.php';
?>
</html>