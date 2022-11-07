<?php
session_start();//session starts here
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GUVI | Sign-in</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"
    />

    <!-- Google font Mulish -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&display=swap"
      rel="stylesheet"
    />
    <!--  -->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" />

  </head>

  <body>
    <section>
      <div class="container-fluid login_page">
        <div class="row">
          <div class="col">
            <div class="logo_welcome visible-small-screen">
              <a href="../Dashboard/index.php" class="logo">
                <img
                  src="https://www.guvi.in/images/webps/guvi-logo-full.webp"
                  alt="logo"
                />
              </a>
              <h1 class="title_welcome">Welcome Back..!</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <picture>
              <source
                class="img-fluid"
                srcset="https://www.guvi.in/images/webps/art-signin.webp"
              />
              <img
                src="https://www.guvi.in/images/webps/art-signin.webp"
                class="img-fluid"
                alt="Welcome"
              />
            </picture>
          </div>

          <div class="col-md-6">
            <div class="logo_welcome hidden-small-screen">
              <a href="../Dashboard/index.php" class="logo">
                <img
                  src="https://www.guvi.in/images/webps/guvi-logo-full.webp"
                  alt="logo"
                />
              </a>
              <h1 class="title_welcome">Welcome ..!</h1>
            </div>

            <div class="google_login">
              <a id="google_login_btn" class="btn btn-outline-google">
                <img style="width: 18%;"
                  src="image/1534129544.svg"
                  class="google_login_logo float-start"
                />
                Login with Google
              </a>
              <div class="alternative_login_option">
                <span>or login with email</span>
              </div>
            </div>

            <form class="login_form"  method="POST">
              <div class="form-group" id="email">
                <label for="email" class="float-start">Email address</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="login_email"
                  placeholder="Enter email"
                  required
                />
              </div>

              <div class="form-group" id="pswd">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="login_pswd"
                  placeholder="Password"
                  required
                />
              </div>

              <div class="form-check">
                <a class="float-end" href="#">Forgot password?</a>
              </div>

              <div class="btn-login">
                <button type="submit" name="login" class="btn btn-primary" id="login_button">
                  Login
                </button>
              </div>

              <p class="signup-link">
                Don’t have an account? <a href="../SignUp/index.php">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php

include("../db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['password'];

    $check_user="select * from users WHERE email_address='$user_email'AND password='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>