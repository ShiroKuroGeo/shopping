<?php
include "includes/db_con.php";
include "functions/index_function.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet" href="./css/style.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        <!-- header navbar start here-->
        <div class="header">
            <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a href="index.php" class="logo">
                            <i class="fas fa-shopping-basket"></i>
                            Ecoshop 
                        </a>
                        <!-- search area start -->
                        <form class="d-flex" role="search" action="search.php" method="get">
                            <input class="form-control  me-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                            <input type="submit" name="search_now" value="search" class="button">
                        </form>
                        <!-- search area end -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cart_table.php">
                                        <i class="fa fa-shopping-cart" aria-hidden="true">
                                            <sup></sup>
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
<!-- Profile dropdown start -->
<nav>
    <img src="./images/profile.png" class="profile" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <img src="./images/profile.png">
                <h3>name</h3>
            </div>
            <hr>
            <a href="" class="sub-menu-link">
                <img src="./images/profile.png">
                <p>profile</p>
                <span>></span>
            </a>
            <a href="./user_dashboard/index.php" class="sub-menu-link">
                <img src="./images/logo.png">
                <p>My dashboard</p>
                <span>></span>
            </a>
            <a href="logout.php" class="sub-menu-link">
                <img src="./images/logout.png " width="50">
                <p>logout</p>
                <span>></span>
            </a>
        </div>
    </div>
</nav>
<section class="home" id="home">
    <div class="content">
        <h3>
            Show your <span>handmade</span>
            products in here
        </h3>
        <p>Lets become a nature lover by recycling our gabages and show the world how beautiful recycable handmade product is. .</p>
    </div>
</section>
<!-- Product start here -->
<section>
    <div class="row">
        <h1 class="heading">ECO PRODUCTS</h1>
        <div class="col-md-20 ">
            <div class="row">
                <div class="sad" id="cartNumber"></div>
            </div>
        </div>
    </div>
</section>
<!-- Product end here -->
<!--footer start here-->
<!-- <?php
include './includes/footer.php';
?> -->
<!--footer end here-->
<!-- bootstrap js -->
<script src="./includes/script.js"></script>
<script src="javaScript/dashboard.js"></script>
<script src="javaScript/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
