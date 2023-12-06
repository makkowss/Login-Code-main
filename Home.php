<?php
include ('bouncer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="Navbar/css/styles.css" rel="stylesheet" />

    
    <title>Home</title>

</head>
<body>



    <!-- Color Pallete we'll be using
    #000000 - Light blue
    #5271FF - Indigo
    -->
   
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end" id="sidebar-wrapper" style="background-color: #000000;">
                <div class="sidebar-heading border-bottom fs-5 fw-bold text-white " style="text-align: center;" >ToyBitZ Bootcamp!</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5" style="text-align: center;" href="Home.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5" style="text-align: center;" href="Users.php">Users Accounts</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper"  >
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #000000;">
                    <div class="container-fluid" >
                        <!-- Toggle Button for Side bar Content -->
                        <button class="btn btn-primary bg-light text-black" id="sidebarToggle">WIDE</button>
                        <!-- Nav Bar header -->
                        <div style="margin-left: 30px;">
                            <div class="fs-3 fw-bold text-white " style="text-align: center;" >Dashboard</div>
                        </div>
                        <!-- Dropdown button on right of Navbar -->
                        <button class="navbar-toggler" style="background-color: white; border-radius: .6rem;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link text-white fs-6" href="logout.php">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <!-- <div class="container-fluid">
                    <h1 class="mt-4">Simple Sidebar</h1>
                </div> -->
                <div style="overflow:hidden; display:flex; justify-content:center; background-color:black;">
                <img src="images/holy pic.jpg" style="height:75%; width: 75%;">
                </div>
            </div>
        </div>
 

</body>

       <!-- Bootstrap core JS - ICE NOTE - This has been turned into a comment since it works without this Java script...-->       
       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
       <!-- Core theme JS-->
       <script src="Navbar/js/scripts.js"></script>

</html>