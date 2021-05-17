<?php 
    session_start();

    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: home.php');
    // }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: contract.php');
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
<title>Contact</title>
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
         <a href="contract.php?logout='1'" style="color: red;">Logout</a></p>
         <?php } ?>
    </ul>
      </div>
    </div>
  </nav>
</header>
<main>
        <br><br><br>
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
<html lang="en">


<head>
  <title>contact</title>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Den</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.1656270178146!2d100.51319365872197!3d13.819136900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b877800c9af%3A0xd754c571fc7177b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1610993007042!5m2!1sth!2sth" width="1500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<!-- contact start-->
    <div id="contact" class="contact_section">
    	<div class="container">	
    	<div class="contact-taital">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="contact_text"><strong>Contact Us</strong></h1>
    			</div>
    		</div>
    	</div>
    		<div class="row">	
    			<div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Tel. & E-mail</h2>
           
    			
    				<div class="image-icon"><img src="images/phone-icon.png"><span class="email_text">061-1546738</span></div>
    				<div class="image-icon"><img src="images/email-icon.png"><span class="email_text">webdesign@gmail.com</span></div>
    			</div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Fb & Line</h2>
            
         
    				<div class="image-icon"><img src="images/fb-icon2.png"><span class="email_text">WebDesign</span></div>
    				<div class="image-icon"><img src="images/line-icon.png"><span class="email_text">webdesign42564</span></div>
    			</div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
            <br>
            </br>
            <br>
            </br>
            <br>
            </br>
            <br>
            </br>
           
    				<div class="social_icon">
    					<ul>
    						<li><a href="https://www.facebook.com/panuparm.aong/"><img src="images/fb-icon.png"></a></li>
    						<li><a href="https://www.facebook.com/panuparm.aong/"><img src="images/twitter-icon.png"></a></li>
    						<li><a href="https://www.facebook.com/panuparm.aong/"><img src="images/google-icon.png"></a></li>
    						<li><a href="https://www.facebook.com/panuparm.aong/"><img src="images/linkedin-icon.png"></a></li>
    					</ul>
    				</div>
    			</div>
    		
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- contact end-->
</body>
</html>
  </body>
</html>