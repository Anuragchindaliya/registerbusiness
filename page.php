<?php

// require("database.php");
$con = mysqli_connect("localhost", "root", "", "vgi") or die("connection failed");
if (isset($_GET['alias'])) {
  $alias = mysqli_real_escape_string($con, $_GET['alias']);
  $res = mysqli_query($con, "SELECT * FROM listmeon WHERE slug = '$alias'");
  if (mysqli_num_rows($res) < 1) {
    header("location: ../index.php");
  }
  $data = mysqli_fetch_array($res);
} else {
  header("location: ../index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <title><?= $data['firm_name'] ?> | <?= $data['subhead'] ?> </title>
  <style>
    hr {
      border-top: 1px solid #000;
      width: 50%;
    }

    a {
      color: #000;
    }

    a:link {
      text-decoration: none;
    }

    .box1 {
      background: rgb(76, 175, 80, 0.6);
    }

    .box2 {
      background: rgb(192, 192, 200, 0.6);
    }

    .box3 {
      background: rgb(255, 0, 0, 0.6);
      ;
    }



    #author a {
      color: #fff;
      text-decoration: none;

    }
  </style>
  <style>
    .brand-logo {
      background-color: #fff;
      border-radius: 50%;
      padding: 10px;
      object-fit: contain;
      border: 3px solid #0d6efd;
      box-shadow: 5px 5px 5px rgb(0 0 0 / 50%);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><?= $data['firm_name']; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" target="_blank" href="tel:+91-<?= $data['number']; ?>">Call Now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://wa.me/91<?= $data['whatsapp']; ?>">Whatsapp Now</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

  <!-- second -->
  <section class="hero" style="background-image: url('../uploads/images/first.jpg') ;">
    <div class="px-4 py-5 my-5 text-center text-white" style="background-color: rgba(0,0,0,.5);">
      <img class="brand-logo d-block mx-auto mb-4" src="../uploads/images/<?= $data['img']; ?>" alt="" width="100" height="100">
      <h1 class="display-5 fw-bold"><?= $data['firm_name']; ?></h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?= $data['subhead']; ?> <br /><?= $data['remark']; ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Get Quote</button>
          <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
        </div>
      </div>
    </div>
  </section>

  <!-- third -->
  <div class="album py-5 bg-light">
    <div class="container">
      <h1 class="display-4 fw-normal text-center mb-5">Gallery</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        $res = mysqli_query($con, "SELECT * FROM listmeon_images WHERE uid = '$data[id]'");
        if (mysqli_num_rows($res) > 0) {
          while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <div class="col">
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg> -->
                <img src="../uploads/images/<?= $data['img']; ?>" />

                <div class="card-body">
                  <p class="card-text text-center"><?= $row['content'] ?></p>
                  <!-- <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div> -->
                </div>
              </div>
            </div>

        <?php
          }
        }



        ?>

      </div>
    </div>
  </div>

  <!-- map -->
  <div class="container-fluid py-5">
    <h1 class="text-center mb-2">Contact Address</h1>
    <!-- <hr> -->
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.094687399321!2d77.27502441482453!3d28.355986782527694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdf67263924fb%3A0x152b7f9a003ab111!2sWeb2Rise%20-%20Best%20Digital%20Marketing%20Company%20in%20Faridabad!5e0!3m2!1sen!2sin!4v1634826390032!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- <iframe src="https://www.google.com/maps/dir/28.3639808,77.2767744/web2rise/@28.3645571,77.276904,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390cdea61b83d673:0x8ac0da8104bf48dc!2m2!1d77.2817291!2d28.365944" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    </div>
    <!-- <div class="row text-center">
      <div class="col-4 box1 pt-4">
        <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Phone</h3>
          <p class="d-none d-lg-block d-xl-block"><?= $data['number'] ?></p>
        </a>
      </div>
      <div class="col-4 box2 pt-4">
        <a href=""><i class="fas fa-home fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Address</h3>
          <p class="d-none d-lg-block d-xl-block"><?= $data['address'] ?></p>
        </a>
      </div>
      <div class="col-4 box3 pt-4">
        <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Whatsapp</h3>
          <p class="d-none d-lg-block d-xl-block"><?= $data['whatsapp'] ?></p>
        </a>
      </div>
    </div> -->
  </div>


  <footer class="container-fluid bg-dark text-white fixed-bottom">
    <div class="row">
      <div class="col">
        <a href="https://www.google.com/maps/place/Web2Rise+-+Best+Digital+Marketing+Company+in+Faridabad,+Chacha+Chowk,+Baba+Mandi,+near+Dayal+Hospital,+NIT,+Faridabad,+Haryana+121005/@28.355987,77.277213,16z/data=!4m2!3m1!1s0x390cdf67263924fb:0x152b7f9a003ab111?hl=en&gl=IN" target="_blank" class="nav-link text-white text-center ">
          <div><i class="fa fa-home"></i></div>
          Location
        </a>
      </div>
      <div class="col">
        <a href="tel:+91-<?= $data['number']; ?>" target="_blank" class="nav-link text-white text-center ">
          <div><i class="fa fa-phone"></i></div>
          Number
        </a>
      </div>
      <div class="col">
        <a href="https://wa.me/91<?= $data['whatsapp']; ?>" target="_blank" class="nav-link text-white text-center ">
          <div><i class="fab fa-whatsapp"></i></div>
          Whatsapp
        </a>
      </div>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center">
      <!-- <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a> -->


      <!-- <ul class="nav col-12 col-lg-auto  justify-content-center my-md-0 text-small">
        <li>
          <a href="tel:+91-<?= $data['address']; ?>" class="nav-link text-white text-center ">
            <div><i class="fa fa-home"></i></div>
            Home
          </a>
        </li>
        <li>
          <a href="tel:+91-<?= $data['number']; ?>" class="nav-link text-white text-center ">
            <div><i class="fa fa-phone"></i></div>
            Number
          </a>
        </li>
        <li>
          <a href="https://wa.me/91<?= $data['whatsapp']; ?>" class="nav-link text-white text-center ">
            <div><i class="fab fa-whatsapp"></i></div>
            Whatsapp
          </a>
        </li>
        <li>
              <a href="#" class="nav-link text-white text-center ">
              <div><i class="fa fa-home"></i></div>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white text-center ">
              <div><i class="fa fa-home"></i></div>
                Customers
              </a>
            </li>
      </ul> -->
    </div>
  </footer>


  <!-- <div class="row text-center bg-success text-white" id="author">
    <div class="col-12 mt-4 h3 ">
      <a href="#">by P. Fattoruso</a>
    </div>
    <div class="col-12 my-2">
      <a href="https://www.linkedin.com/in/paolofattoruso/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
    </div>
  </div> -->








  <!-- Footer -->
  <?php /*
  <div class="container">
    <!-- <footer class="row row-cols-5 py-5 my-5 border-top"> -->
    <footer class="row py-5 my-5 border-top">
      <!-- <div class="col">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-muted">© 2021</p>
          </div>
      
          <div class="col">
      
          </div> -->

      <div class="col-sm-12">
        <h5>Address</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <?= $data['address'] ?>
            <br />

          </li>
        </ul>
      </div>

      <div class="col">
        <h5>Call</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">+91-8023747478</a></li>
        </ul>
      </div>

      <div class="col">
        <h5>Whatsapp</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">91-8023747478</a></li>
        </ul>
      </div>
    </footer>
  </div>*/
  ?>
  <footer class="footer mt-auto py-3 text-center bg-dark">
    <div class="container">
      <span class="text-muted">Powered By <a href="https://www.web2rise.com" target="_blank">web2rise</a></span>
    </div>
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>