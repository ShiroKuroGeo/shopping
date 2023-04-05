
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecopost</title> 
    <link rel="stylesheet" href="../css/ecopost.css">

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
                                    <h2><svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
  <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
</svg>Ecopost</h2>
<!-- search area start -->                   
                                    <form class="d-flex" role="search" action="search.php" method="get">
                                    <input class="form-control  me-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                                    <input type="submit" name="search_now" value="search" class="button">
                                    </form>
<!-- search area end -->                   

                                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span></button>
                                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.php"><svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="product.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg></a>
                                    </li>
                                  
                                  
<!-- Profile dropdown start -->
                                   <!--  <nav>
                                    <img src="../images/profile.png" class="profile" onclick="toggleMenu()">
                                    <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                    <div class="user-info">
                                    <img src="../images/profile.png" class="profile">
                                    <h3>name</h3>
                                    </div>
                                    <hr>
                                          <a href="#" class="sub-menu-link">
                                          <img src="../images/profile.png">
                                          <p>Timeline</p>
                                          <span>></span>
                                          </a>

                                          <a href="../index.php" class="sub-menu-link">
                                          <img src="../images/shop.png">
                                          <p>ecoshop</p>
                                          <span>></span>
                                          </a>
                               
                                        

                                          <a href="logout.php" class="sub-menu-link">
                                          <img src="../images/logout.png "width="50">
                                          <p>logout</p>
                                          <span>></span>
                                          </a>

                                    </div>
                                    </div>
                                    </nav> -->
<!-- Profile dropdown end -->

                                    </div>
                                    </div>
                                    </div>
                                    </nav>
                                    </div>
 <!-- header navbar end here-->

 <!-- sidebar start here -->
                                    <div class="side-nav"> 
                                        
                                    <div class="home">
                                            <a href=""><a href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>Home</a>
                                        </div>

                                        <div class="pic">
                                            <a href=""><img src="../images/profile.png" alt="">Name</a>
                                        </div>

                                       

                                        <div class="shop">
                                        <a href=""><svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
  <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
</svg>Ecoshop</a>
                                        </div>
                                       
                                        <div class="logout">
                                            <a href=""> <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>logout</a>
                                        </div>
                                    </div>
 <!-- sidebar end here -->

 <!-- post start here -->

                                <div class="container">
                                    
                                    <div class="row">
                                        <h1>hahdjhsdj</h1>
                                        <div class="col">
                                            hehhe
                                        </div>
                                        
                                        <div class="col-1">

                                        </div>

                                        <div class="co-2">

                                        </div>
                                    </div>
                                </div>
 <!-- post end here -->
   





  <!-- bootstrap js -->
  <script src="../includes/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>