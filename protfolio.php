<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: protfolio.php');
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
<title>Portfolio</title>
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
         <a class="nav-link " href="protfolio.php?logout='1'" style="color: red;">Logout</a>
         <?php } ?>
    </ul>
      </div>
    </div>
  </nav>
</header>
<main>
        <br>
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
      
<br/>
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
<br><br>

<div class="container">
        <div id="list-example" class="list-group">
            <div class="row">
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Portfolio 1</a>
            </div>
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" href="#list-item-2">Portfolio 2</a>
            </div>
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" href="#list-item-3">Portfolio 3</a>
            </div>
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" href="#list-item-4">Portfolio 4</a>
            </div>
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" href="#list-item-5">Portfolio 5</a>
            </div>
            <div class="col-md-2">
            <a class="list-group-item list-group-item-action" style="background-color: #ffa64d" href="#list-item-6">Graphic design</a>
            </div>
            </div>
        </div>
<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  

<hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
        <h4 id="list-item-1">Portfolio 1</h4>
    </div>
</div>
<br/>
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_3.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_4.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_5.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_6.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_7.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_8.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_9.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_10.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_11.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_12.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_13.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_14.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_15.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_16.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_17.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_18.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_19.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_20.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_21.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_22.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_23.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_24.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_25.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_26.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_27.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_28.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_29.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_30.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_31.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_32.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port1/1_210116_33.jpg" width=75% height=75% alt="">
            </div>
            
            
        </div>
    </div>
<hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
        <h4 id="list-item-2">Portfolio 2</h4>
    </div>
</div>
<br/>
  <div class="container">
        <div class="row">     
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_3.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_4.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_5.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_6.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_7.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_8.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_9.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_10.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_11.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_12.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_13.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_14.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_15.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_16.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_17.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_18.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_19.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port2/2_210116_20.jpg" width=75% height=75% alt="">
            </div>
            
        </div>
    
    </div>
    <hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
        <h4 id="list-item-3">Portfolio 3</h4>
    </div>
</div>
<br/>
  <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_3.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_4.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_5.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_6.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_7.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_8.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_9.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_10.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_11.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_12.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_13.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_14.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_15.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_16.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_17.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_18.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_19.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port3/3_210116_20.jpg" width=75% height=75% alt="">
            </div>
            
        
        </div>
    
    </div>
    <hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
            <h4 id="list-item-4">Portfolio 4</h4>
    </div>
</div>
<br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_3.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_4.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_5.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_6.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_7.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_8.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_9.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_10.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_11.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_12.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_13.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port4/4_210116_14.jpg" width=75% height=75% alt="">
            </div>
            
        
        </div>
    
    </div>
<hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
        <h4 id="list-item-5">Portfolio 5</h4>
    </div>
</div>
<br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_3.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_4.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_5.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_6.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_7.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_8.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-3">
                <img src="protfolio/port5/5_210116_9.jpg" width=75% height=75% alt="">
            </div>
            
            
        
        </div>
    
    </div>
<hr/>
<div class="alert alert-dark" role="alert">
    <div class="container">
        <h4 id="list-item-6">Graphic Design</h4>
    </div>
</div>
<br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_0.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_1.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_2.jpg" width=75% height=75% alt="">
            </div>
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_3.jpg" width=75% height=55% alt="">
            </div>
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_4.jpg" width=75% height=55% alt="">
            </div>
            <div class="col-md-4">
                <img src="protfolio/graphic/6_210116_5.jpg" width=75% height=55% alt="">
            </div>
            
        
        </div>
    
    </div>
</div>
</div>
<div class="container">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Thank you </h4>
  <p>ติดต่อสอบถามรายละเอียด หรือ จ้างงานได้ทางหน้า Contact / Comment ติชมเพื่อเป็นแนวทางในการพัฒนาเว็บไซต์ต่อไป </p>
  
  <hr>
  <p class="mb-0"></p>
</div>
</div>
<a style="display:scroll;position:fixed;bottom:5px;right:5px;" class="backtotop" href="#" rel="nofollow" title="Back to Top"><img style="border:0;" src="protfolio/img/topup.png" width=60 height=50/></a>


  </body>
</html>