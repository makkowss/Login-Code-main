<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Color Pallete we'll be using
    #000000 - Black
    -->


    <section class="vh-100" style="background-color: #000000;">
        <div class="container py-5 h-200">
          <div class="row d-flex justify-content-center align-items-center h-200 ">
            <div class="col-12 col-md-10 col-lg-6 col-xl-5">
              <div class="card shadow p-3 " style="border-radius: 2rem;">
                <div class="card-body p-10 text-center ">
      
                  <h3 class="mb-5">Log in</h3>
                  

                  <form action="auth.php" method="post">

                      <div class="form-outline mb-4">
                        <input name="username" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                        <label class="form-label" for="typeEmailX-2">Username</label>
                      </div>
          
                      <div class="form-outline mb-4">
                        <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX-2">Password</label>
                      </div>
          
                      <button name="login" class="btn btn-primary btn-lg btn-block shadow" type="submit">Login</button>
          
                      <hr class="my-4">
                      
                  </form>
                  
                  <div class="mb-4">
                        <a href="Signup.php"><button class="btn btn-primary btn-lg btn-block shadow" type="submit">Create New Account</button></a>
                  </div>

                  <div>
                      <label class="form-label mt-5 text-muted " for="typePasswordX-2">Create an account?</label>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>