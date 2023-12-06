<?php
session_start();

include('config.php');


if(isset($_POST['login'])){  //button name 'login' should be same as your name in the Login button

    $thisuser = $_POST['username']; // the name inside the ['_____'] should match the same name in your database
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_user2 WHERE username = '$thisuser' and password = '$password' ";  // 'tbl_user' should be the name of your database table
                            //                           ^ this here specifically checks only the username and password in your database

    $result = mysqli_query($conn, $sql);     /** Function to check in Database */
    $count = mysqli_num_rows($result);     /** Function to check in listed data in Database */
    $row = mysqli_fetch_array($result);
    

    if($count > 0){
        if($row['active'] == 1){

        $_SESSION['username'] = $thisuser;

        header("location: Home.php");
        }else{
            ?>

        <script>
            alert("Your account is deactivated");
            window.location.href='index.php';
        </script>

        <?php
        }
    }
else {   // Will run this if username or password didn't match in the Database
        ?>
        <script>
            alert("NICE TRY PO"); 
            window.location.href='index.php';
        </script>
        <?php
    }
}

mysqli_close($conn);