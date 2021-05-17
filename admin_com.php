<?php
  session_start();
//     if (!isset($_SESSION['email'])) {
//         echo "<script type='text/javascript'>";
//         echo "alert('คุณไม่ใช่แอดมินนี่');"; 
//         echo "window.location = 'index.php'; ";
//         echo "</script>";
      
     
//   }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: home.php');
    }

   
  include('server.php');
  include('adminto.php');
  $query = "SELECT * FROM comments ORDER BY id ASC" or die("Error:" . mysqli_error());
  $result = mysqli_query($conn, $query);
  echo '<div class="container">';
  echo '<h3 class="display-6 fw-bold ">User information</h3>';
  echo ' <table class="table table-hover">';
      echo "
        <tr>
        <td>No.</td>
        <td>username</td>
        <td>comment</td>
        <td>time</td>                
      </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>" .$row["id"] .  "</td> ";
      echo "<td>" .$row["name"] .  "</td> ";
      echo "<td>" .$row["comment"] .  "</td> ";
      echo "<td>" .$row["comtime"] .  "</td> ";

       echo "<td><a href='del_com.php?ID=$row[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";

  mysqli_close($conn);
?>