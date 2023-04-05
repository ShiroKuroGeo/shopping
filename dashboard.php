<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoshop</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/submenu.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg header">
        <div class="container-fluid ms-5">
            <div class="row d-flex justify-content-between ms-auto">
                <div class="col-lg-2">
                    <div class="ecoLogo">
                        <a class="navbar-brand me-5 ms-5" href="#">
                            <i class="fas fa-shopping-basket"></i>
                            EchoShop
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-2">
                    <div class="searchInbox">
                        <div class="input-group input-group-sm">
                            <input type="search" class="form-control" name="searchProduct" id="searchProduct" placeholder="Search a Product">
                            <button class="btn btn-outline-success bg-light" id="btnSearch">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-end align-items-end">
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active mt-1" aria-current="page" href="userDashboard.html">Home</a>
                            <a class="nav-link active mt-1" href="product.php">Product</a>
                            <a class="nav-link active mt-1" href="dashCartTable.html"><i class="fa fa-shopping-cart" aria-hidden="true"><sup id="cartNumber"></sup></i></a>
                            <a class="nav-link active" href="#"><img src="./images/profile.png" width="60px" class="profile" onclick="toggleMenu()"></a>
                            <nav>
                                <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            <img src="./images/profile.png" class="profile" width="100px">
                                            <h3 id="nameOfUser">Name</h3>
                                        </div>
                                        <hr>
                                        <a href="./eco-post/index.php" class="sub-menu-link">
                                            <img src="./images/profile.png" width="100px">
                                            <p>profile</p>
                                            <span>></span>
                                        </a>
                                        <a href="./user_dashboard/index.php" class="sub-menu-link">
                                            <img src="./images/logo.png" width="100px">
                                            <p>My dashboard</p>
                                            <span>></span>
                                        </a>
                                        <a class="sub-menu-link" >
                                            <img src="./images/logout.png " width="100">
                                            <button type="button" class="form-control btn btn-outline-danger btn-sm" id="btnLogout">Log out</button>
                                            <span>></span>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
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
    <div class="container">
        <section class="categories" id="categories">
            <div class="forNavbar">
                <!-- For navbar sticky only -->
            </div>
            <h1 class="ecoCategoriesHeader" class="ms-5 mt-5">
                ECO CATEGORIES
            </h1><hr> 
            <div class="getCategory d-flex justify-content-center align-items-center">
                <div class="row d-flex justify-content-center align-items-center" id="getCategory">
                    <!-- Get Catergory -->
                </div>
            </div>
        </section>
        <section class="categories">
            <div class="row border">
                <div class="col-lg-12">
                    <div class="forNavbar">
                        <!-- For navbar sticky only -->
                    </div>
                    <h1 class="ecoProduct" class="ms-5 mt-5">
                        Eco Products
                    </h1><hr>
                    <div class="getCategory d-flex justify-content-center align-items-center">
                        <div class="row d-flex justify-content-center align-items-center" id="getProducts">
                            <!-- Get Catergory -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <section>
        <?php
            include './includes/footer.php';
        ?>
    </section>
    <!-- Jquery -->
    <script src="javaScript/jquery.js"></script>
    <script src="javaScript/toggle.js"></script>
    <script src="javaScript/dashboard.js"></script>
    <script src="javaScript/UserLogout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>