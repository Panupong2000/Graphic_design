<?php 
    session_start();
    include('server.php');

    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: comment.php');
    }


    if (isset($_POST['submit']) && isset($_SESSION['username'])) { // Check press or not Post Comment Button
      $name = $_SESSION['username'];
      $comment = $_POST['comment']; // Get Comment from form
    
      $sql = "INSERT INTO comments (name,comment)
          VALUES ('$name','$comment')";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
      } else {
        echo "<script>alert('Comment does not add.')</script>";
      }
    }
    $sql = $conn->query("SELECT id FROM comments");
    $numR = $sql->num_rows;

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
         <a class="nav-link " href="comment.php?logout='1'" style="color: red;">Logout</a>
         <?php } ?>
    </ul>
    <script> console.log()</script>
      </div>
    </div>
  </nav>
</header>
<main>
        <br><br>

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
        <div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
			<div class="input-group textarea">
      <textarea class="form-control" id="comment" name="comment" placeholder="Enter your Comment" cols="30" rows="5"></textarea><br>
			</div>
			<div class="input-group">
				<button style="background-color: #ffa64d" class=" btn" name="submit" class="btn" >Post Comment</button>
			</div>
		</form>
    <div class="container">
    <br>
    <h2> <?php echo $numR ?>    Comment</h2>
    <br>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">

      <h5><b><?php echo $row['name']; ?></b> <?php echo $row['comtime'];?></h5><br>
	  	<h6><p>&nbsp&nbsp&nbsp<?php echo $row['comment']; ?></p></h6>
      <hr>

			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
  </div>
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
    </div>
</main>
      
  </body>
</html>