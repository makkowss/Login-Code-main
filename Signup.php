<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Color Pallete we'll be using
    #38B6FF - Light blue
    #5271FF - Indigo
    -->


    <section class="vh-100" style="background-color: #000000;">
        <div class="container py-5 h-200">
          <div class="row d-flex justify-content-center align-items-center h-200 ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow p-3 " style="border-radius: 2rem;">
                <div class="card-body p-10 text-center ">
      
                  <h3 class="mb-5">Sign up</h3>
                  <form action="Signup_auth.php" method="post">

                    <div class="form-outline mb-4">
                      <input name="username" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX-2">Username</label>
                    </div>
        
                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX-2">Email</label>
                    </div>
        
                    <div class="form-outline mb-4">
                      <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX-2">Password</label>
                    </div>
              
                    <button name="signupp" class="btn btn-primary btn-lg btn-block shadow mb-4" type="submit">Sign up</button>

                  </form>

                  <div>
                    <a href="index.php"><button class="btn btn-primary btn-lg btn-block shadow" type="submit">Return</button></a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>