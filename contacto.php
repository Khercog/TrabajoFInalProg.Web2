<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <script src="https://kit.fontawesome.com/6e1c00e6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Comic Blog</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand">ComicBlog</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu">

        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="noticias.php" class="nav-link">Noticias</a>
            </li>
            <li class="nav-item">
              <a href="faqs.php" class="nav-link">faqs</a>
            </li>
            <li class="nav-item">
              <a href="contacto.php" class="nav-link">contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-dark p-5 p-lg-0 pt-lg-5">
    <div class="container"> 
    </div>
    </section>

    <!-- Contact & Map -->
    <section class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Enrollment Phone:</span> (555) 555-5555
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Student Phone:</span> (333) 333-3333
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Enrollment Email:</span> (555)
                enroll@frontendbc.test
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Student Email:</span>
                student@frontendbc.test
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    
   

    <?php require_once ('_footer.php') ?>

   

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  </body>
</html>