<!DOCTYPE html>
<html lang="">
<head>
    <title>new user</title>
    <!-- favicon -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <i class="fas fa-shopping-basket"></i>
        Ecoshop Sign Up
    </div>
</header>
    <div class="container"> 
    <img src="./images/logo.png" width="200"><br>
    <h1>Show your <span>TALENT</span> by creating a <br>handmade products in here</h1>
    <form action="" method="POST">
        <div class="form" id="form">
            <h2>Sign Up</h2>
            <input type="text" class="form-control" name="Firstname" id="Firstname" required placeholder="First Name"><br>                               
            <input type="text" class="form-control" name="Lastname" id="Lastname" required placeholder="Last Name"><br>                                  
            <input type="email" class="form-control" name="Email" id="Email" required placeholder="Email"><br>                         
            <input type="text" class="form-control" name="Username" id="Username" required placeholder="User Name" autocomplete="off"><br>
            <input type="text" class="form-control" name="Address" id="Address" required placeholder="Home address">   
            <input type="text" class="form-control" name="phone" id="phone" required  placeholder="Mobile Number">                   
            <input type="password"name="Password" id="Password" placeholder="Password" required/>
            <input type="password" name="retypePassword" id="retypePassword" placeholder="Re-type Password"><br>
            <a href="index.php">
                <i aria-hidden="true" class="text" >Already have an acount?</i>
            </a><br>
            <button type="button" id="btnRegister">Sign Up</button>
        </div>
    </form>
</div>
<script src="./javaScript/jquery.js"></script>
<script src="./javaScript/UserRegister.js"></script>
</body> 
</html>