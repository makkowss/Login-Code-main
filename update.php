<?php
include('config.php');
session_start();


if(isset($_POST['update'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);
    $edit_id = mysqli_real_escape_string($conn,$_POST['edit_id']);

    $sql_update = "UPDATE tbl_user2 SET

    username = '$username',
    email = '$email',    
    password = '$password',
    active = '$status'
    WHERE user_id = '$edit_id'";

    if($result_update = mysqli_query($conn, $sql_update)){
        ?>
        
        <script>
            alert('Successfully Update User');
            window.location.href='Users.php';
        </script>

        <?php
    } else {

        if(!$result_update) {die('Unsucessful added'.mysqli_error()); }
    }

    mysqli_close($conn);

    }

    if(isset($_POST['BackToUsers'])){
            ?>
            <script>
                window.location.href='Users.php';
            </script>
    
            <?php
        mysqli_close($conn);
    
        }
    ?>
