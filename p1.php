<?php 
    session_start();

    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: home.php');
    // }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: home.php');
    }

?>

<!doctype html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<html lang="en">
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Graphic Design</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="protfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="promotion.php" >Promotion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="comment.php" >Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contract.php" >Contact</a>
          </li>
        </ul>

        <?php  if(!isset($_SESSION['username'])) {?>
          <ul class="navbar-nav me-2">
        <li class="nav-item">
            <a class="nav-link " href="login.php" >Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="register.php" >Register</a>
          </li>
    </ul>
      <?php } else { ?>
         <li><a class="navbar-brand">Welcome  <?php echo $_SESSION['username'];?><a></li>
         p><a href="p1.php?logout='1'" style="color: red;">Logout</a></p>
         <?php } ?>
    </ul>
      </div>
    </div>
  </nav>
</header>
<main>
        <br><br>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Portfolio</h1>
      <p class="lead fw-normal">ประกอบไปด้วย หน้าปก คำนำ สารบัญ รายละเอียดเนื้อหา ปกหลัง</p>
      <span class="text-muted"> เหมาในราคาเพียง ฿500 / 10 หน้า หรือ ฿800 / 20 หน้า </span>
      <p></p>
      <a class="btn btn-outline-secondary" href="contract.php">contact us</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"style="width: 23%; height: 300px;">
      <div class="my-3 py-3">
        <h2 class="display-5">หน้าปก</h2>
        <p class="lead">100 บาท</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"style="width: 31%; height: 300px;">
      <div class="my-3 p-3">
        <h2 class="display-5">คำนำ สารบัญ</h2>
        <p class="lead">100 บาท</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"style="width: 23%; height: 300px;background-color:#323232">
      <div class="my-3 py-3">
        <h2 class="display-5">เนื้อหา</h2>
        <p class="lead">75 บาท / 1 หน้า</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class=" me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"style="width: 23%; height: 300px;background-color:#f6f6f6">
      <div class="my-3 p-3">
        <h2 class="display-5">ปกหลัง</h2>
        <p class="lead">100 บาท</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>
  <br><br><br>
   <!-- FOOTER -->
   <footer class="container">
   <a style="display:scroll;position:fixed;bottom:5px;right:5px;" class="backtotop" href="#" rel="nofollow" title="Back to Top"><img style="border:0;" src="protfolio/img/topup.png" width=60 height=50/></a>
    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
    <p>&copy; 2021 by ทัวร์ลง </p>
  </footer>


  