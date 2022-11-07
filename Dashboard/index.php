<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GUVI</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

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

    <!-- MD sans -->
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!--  -->

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <h1 class="visually-hidden">Headers examples</h1>

      <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-center py-3 mb-4">
          <a
            href=""
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none" id="brand_logo"
          >
            <!-- <svg class="bi me-2" width="40" height="32">
              <use xlink:href="#bootstrap" />
            </svg> -->
           <img src="images/foot-guvi-logo.png" alt="">
          </a>

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link">Courses</a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle">LIVE Classes</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle">Practice</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle">Resources</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle">Our Products</a>
            </li>
            <li class="nav-item">
              <a href="../Login/index.php" class="nav-link" id="login_header"
                >Login</a
              >
            </li>
            <li class="nav-item">

                <a href="../SignUp/index.php"  class="btn btn-success"  id="login_header">SignUp</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#demo" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#demo" data-bs-slide-to="1"></li>
        <li data-bs-target="#demo" data-bs-slide-to="2"></li>
      </ol>

      <div class="hidden-small-screen">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/carousel1.webp"
              alt="Los Angeles"
              class="d-block"
              style="width: 100%"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/carousel2.webp"
              alt="Chicago"
              class="d-block"
              style="width: 100%"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/carousel3.webp"
              alt="New York"
              class="d-block"
              style="width: 100%"
            />
          </div>
        </div>
      </div>

    <!--  <div class="visible-small-screen">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/MobCarousel1.webp"
              alt="Los Angeles"
              class="d-block"
              style="width: 100%"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/MobCarousel2.webp"
              alt="Chicago"
              class="d-block"
              style="width: 100%"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/MobCarousel3.webp"
              alt="New York"
              class="d-block"
              style="width: 100%"
            />
          </div>
        </div>
      </div> -->
    </div>

    <section>
      <div class="container">
        <div class="col-md-12">
          <h3 class="justify-content-center title_accre">Our Accreditations</h3>

          <ul class="accre_list">
            <li>
              <img
                src="https://www.guvi.in/build/images/iitmlogo.52aac90085e6871aa468bdbbb06d71f7.svg"
                class="des_image"
                alt="iitm-guvi"
              />
            </li>
            <li>
              <img
                src="https://www.guvi.in/build/images/iso.1dda8dadd8dc79fba0caf869d7513799.svg"
                alt="iso"
                class="des_image"
              />
            </li>
            <li>
              <img
                src="https://www.guvi.in/build/images/googlePartner-logo.f3e996facc568e400e83a9230eb24c4f.svg"
                class="des_image"
                alt="google_partner"
              />
            </li>
            <li>
              <img
                src="https://www.guvi.in/build/images/aicte-logo.d266d7fbd31204e6ae6f8371dd0dc103.svg"
                class="des_image imagelg"
                alt="all_india_council"
              />
            </li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>
