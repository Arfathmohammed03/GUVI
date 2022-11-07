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

    <link rel="stylesheet" href="../Login/style.css" />

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
              <h1 class="title_welcome">Sign up</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <picture>
              <source
                class="img-fluid"
                srcset="https://www.guvi.in/images/webps/art-new-account.webp"
              />
              <img
                src="https://www.guvi.in/images/webps/art-new-account.webp"
                class="img-fluid"
                alt="Welcome"
              />
            </picture>
          </div>

          <div class="col-md-6">
            <div class="logo_welcome hidden-small-screen">
              <a href="#" class="logo">
                <img
                  src="https://www.guvi.in/images/webps/guvi-logo-full.webp"
                  alt="logo"
                />
              </a>
            </div>

            <div class="google_login">
              <a id="google_login_btn" class="btn btn-outline-google">
                <img  style="width: 18%;"
                  src="../Login/image/1534129544.svg"
                  class="google_login_logo float-start"
                />
                Sign-up with Google
              </a>
              <div class="alternative_login_option">
                <span>or sign-up with email</span>
              </div>
            </div>

            <form class="login_form" action="" method="POST">
              <div class="form-group" id="fName">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  name="fName"
                  class="form-control"
                  id="signUp_fName"
                  placeholder="Enter name"
                  required
                />
              </div>

              <div class="form-group" id="lName">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  name="lName"
                  class="form-control"
                  id="signUp_lName"
                  placeholder="Enter name"
                />
              </div>

              <div class="form-group" id="email">
                <label for="email">Email address</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="signUp_email"
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
                  id="signUp_pswd"
                  placeholder="Password"
                  required
                />
              </div>

              <div class="form-group" id="phnNum">
                <label for="email">Mobile number</label>
                <input
                  type="tel"
                  name="phnNum"
                  class="form-control"
                  id="signUp_phnNum"
                  placeholder="Mobile number"
                  required
                />
              </div>

              <div class="btn-login">
                <button type="submit" name="register" class="btn btn-primary" id="login_button">
                  Sign up
                </button>
              </div>

              <p class="signup-link">
                Already register User? <a href="../Login/index.php">Log in</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php

include("../db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['fName'];
    $lName=$_POST['lName'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['password'];//same
    $user_email=$_POST['email'];//same
    $phnNum=$_POST['phnNum'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the Firstname')</script>";
exit();//this use if first is not work then other will not show
    }
    if($lName=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the Lastname')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
    if($phnNum=='')
    {
        echo"<script>alert('Please enter the Mobile Number')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE email_address='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (first_name, last_name, email_address, password,  mobile)
     VALUE ('$user_name','$lName','$user_email','$user_pass','$phnNum')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('../Login/welcome.php','_self')</script>";
    }
}
?>