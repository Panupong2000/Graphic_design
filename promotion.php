<?php 
    session_start();

    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: home.php');
    // }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: promotion.php');
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
<title>Promotion</title>
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
         <a class="nav-link " href="promotion.php?logout='1'" style="color: red;">Logout</a>
         <?php } ?>
    </ul>
      </div>
    </div>
  </nav>
</header>
<main>
        <br>
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
<br>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <div class ="col-mb-12">
        <img src="pic/1.jpg" alt="" width = 100% height = 100%/>
        
        </div>
      </div>
      <div class="carousel-item">
       
        <img src="pic/2.jpg" alt="" width = 100% height = 100%/>
         
      </div>
      <div class="carousel-item">
       
        <img src="pic/3.jpg" alt="" width = 100% height = 100%/>
       
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>


  <br><br><br>
  <div class = "container">
  <div class="row row-cols-1 row-cols-md-2 mb-2 text-center "> 
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Portfolio</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">฿75 <span class="text-muted"> *</span></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>หน้าปก คำนำ สารบัญ</li>
          <li>เนื้อหา / รายละเอียด</li>
          <li>- ราคาเหมาที่ถูกกว่า - </li>
        </ul>
        <button type="button" style="background-color: #ffa64d" onclick="location.href='p1.php'"  class="w-100 btn btn-lg">See more</button>
      </div>
    </div>
    </div>
    
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">about Graphic</h4>
      </div>
      <div class="card-body">
      <small class="text-muted">start</small>
        <h1 class="card-title pricing-card-title">฿200</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>สั่ง > 3 ชิ้น ลด 10 %</li>
          <li>สามารถแก้งานได้ฟรี * </li>
        </ul>
        <button type="button" onclick="location.href='p2.php'" style="background-color: #ffa64d" class="w-100 btn btn-lg">See more</button>
      </div>
    </div>
    </div>
  </div>
  </div>



  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <a style="display:scroll;position:fixed;bottom:5px;right:5px;" class="backtotop" href="#" rel="nofollow" title="Back to Top"><img style="border:0;" src="protfolio/img/topup.png" width=60 height=50/></a>
    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
    <br><br>
    <p>&copy; 2021 by ทัวร์ลง </p>
  </footer>
</main>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      
  </body>
</html>


        <!-- <img src="/test/123.jpg" alt="" /> -->
    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    </div>
</main>
      
  </body>
</html>