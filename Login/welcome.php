
    <?php
    session_start();

    if(!$_SESSION['email'])
    {

        header("Location: index.php");//redirect to the login page to secure the welcome page without login access.
    }

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

    <link rel="stylesheet" href="/Login/style.css" />

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
              <h1 class="title_welcome">Welcome ..! <?php
    echo $_SESSION['email'];
    ?></h1>

<h1><a href="logout.php">Logout here</a> </h1>
            </div>




          </div>
        </div>
      </div>
    </section>
  </body>
</html>
