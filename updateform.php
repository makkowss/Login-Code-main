<?php if(isset($_GET['edit_id'])){
                $get_id = $_GET['edit_id'];
                
                $sql_user = "SELECT * FROM tbl_user2 WHERE user_id='$get_id'";
                $result = mysqli_query($conn, $sql_user);
                
                while($row = mysqli_fetch_array($result)){

                    $active = $row['active'];
                    ?>
                

                    <!-- Update Form -->
                    <!-- <div class="col-3"> remove for form-->
                        <div id="registrationForm" class="form-singin w-100 m-auto form-shadow py-4">
                            <form action="update.php" method="post">
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

                                <button class="btn btn-primary w-100 py-2" type="submit" name="update">Submit</button>

                            </form>
                        </div>
                    <!-- </div> -->

                <?php } } ?>  