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
    
    <!-- Favicon-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="Navbar/css/styles.css" rel="stylesheet" />
    
    <title>Users Accounts</title>
</head>
<body>



    <!-- Color Pallete we'll be using
    #38B6FF - Light blue
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
                            <div class="fs-3 fw-bold text-white " style="text-align: center;" >Users</div>
                        </div>
                        <!-- Dropdown button on right of Navbar -->
                        <button class="navbar-toggler" style="background-color: white; border-radius: .6rem;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link text-white fs-6" href="logout.php">Sign out</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#!">Link</a></li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Options</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center;" scope="col">Users Count</th>
                            <th style="text-align:center;" scope="col">Username</th> 
                            <th style="text-align:center;" scope="col">Email</th>
                            <th style="text-align:center;" scope="col">Password</th>
                            <th style="text-align:center;" scope="col">Date Created</th>
                            <th style="text-align:center;" scope="col">Status</th>
                            <th style="text-align:center;" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;

                            $sql_user = "SELECT * FROM tbl_user2";
                            $result = mysqli_query($conn, $sql_user);

                            while($row = mysqli_fetch_array($result)){
                                $uid= $row['user_id'];
                                $status= $row['active'];
                        ?>
                        <tr style="text-align:center;">
                            <th scope="row"><?php echo $count++; ?></th>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>

                            <td><?php echo $row['date']; ?></td>
                            
                            <!--Section for identifying 'Active' or 'Deactivate'-->
                            <td>
                                <?php
                                    if($status == 1){?>
                                    <span class="badge bg-success">Active</span>
                                <?php }else{ ?>
                                    <span class="badge bg-dark">Deactive</span>
                                <?php } ?>
                                
                            </td>
                            

                            <!--Buttons for Action-->
                            <td>
                                <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                                <a href="Users.php?edit_id=<?php echo $row['user_id']; ?>"class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete.php?user_id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure you want to delete? All information');">
                                <button class="btn btn-danger btn-sm">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>

<!--                    Modal start
                    <div class="modal fade" id="pleasework" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
           
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                               -->
           
                        <?php if(isset($_GET['edit_id'])){
                        $get_id = $_GET['edit_id'];
                        
                        $sql_user = "SELECT * FROM tbl_user2 WHERE user_id='$get_id'";
                        $result = mysqli_query($conn, $sql_user);
                        
                        while($row = mysqli_fetch_array($result)){

                            $active = $row['active'];
                            ?>
                    

                            <!-- Update Form -->
                            <div style="height:35rem; display:flex; justify-content:center;">
                                <div class="col-3 shadow p-3 mb-5 bg-body-tertiary rounded border border-success p-2" style="--bs-border-opacity: .5;"" style="width:30%; height:100%;  min-width: 500px; border:solid; border-color:gray; padding:5px; border-radius:5px;" class="m-3">
                                    <div id="registrationForm" class="form-singin w-100 h-100 m-auto form-shadow py-4" >
                                    <form action="update.php" method="post"  >
                                            <h1 class="h3 mb-3 fw-normal">Update</h1>

                                            <input class="hidden" readonly type="text" name="edit_id" style="text-align:center" value="<?php echo $row['user_id']  ?>"/>

                                            <div class="form-floating py-2">
                                            <input type="text" class="form-control" id="floatingUser" placeholder="Username" name="username" value="<?php echo $row['username']; ?>">
                                            <label for="floatingUser">Username</label>
                                            </div>

                                            <div class="form-floating py-2">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $row['email']; ?>">
                                            <label for="floatingInput">Email</label>
                                            </div>

                                            <div class="form-floating py-2">
                                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
                                            <label for="floatingPassword">Password</label>
                                            </div>

                                            <div class="form-check form-switch py-2">
                                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" value="1"<?php if($active == 1){echo "checked";}else {echo "";} ?>>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                            </div>

                                            <button class="btn btn-primary w-100 py-1" type="submit" name="update">Submit</button>

                                        </form>
                                        <a href="Users.php" class="btn btn-primary w-100 py-1 mt-1" >Cancel</a>
                                    </div>                                    
                                </div>
                            <?php } } ?>  
                        </div> 
                
<!--                  
                            </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>      Modal End-->


        </div>
    </div>
</body>

       <!-- Bootstrap core JS - ICE NOTE - This has been turned into a comment since it works without this Java script...        -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
       <!-- Core theme JS-->
       <script src="Navbar/js/scripts.js"></script>

</html>