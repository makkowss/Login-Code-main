<?php
include('config.php');
session_start();

if(isset($_POST['signupp'])){ //button name 'signupp' should be same as your name in the [Sign Up] button

    $username = mysqli_real_escape_string($conn,$_POST['username']);     // 2 set this as the User's username in the DB
    $password = mysqli_real_escape_string($conn,$_POST['password']);     // 3 set this as the User's password in the DB
    $email = mysqli_real_escape_string($conn,$_POST['email']);           // 4 set this as the User's Email in the DB


    // To insert these data into the database (Key sensitive to kaya need matching capitalization and word sa taas)
    $sql_insert = "INSERT into tbl_user2 SET
    username = '$username',
    email = '$email',
    password = '$password',    
    active = 1";
    // Take Note: The name of data in the ^top^ should be the same name of data in your database

    if($result_insert = mysqli_query($conn, $sql_insert)){  // Will run this IF added data is Successful

        ?>
            <script>
                alert('NICE WAN PRE!');
                window.location.href='index.php';    // Will redirect you to Login page if successful
            </script>
        <?php

    } else {  // Will run this IF added data is Unsuccessful

        if(!$result_insert) {die('Error: Data has not been added'.mysqli_error());}
    }

    mysqli_close($conn);
}
?>