<?php
  session_start();
  include 'connect~.php';
  $results = mysqli_query($con, "SELECT * FROM admintb");
  $houses = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
.header {
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="admindashboard.php">Dashboard</a>
  <a href="addapartment.php">Add Apartment</a>
  <a href="viewapartment.php">All Apartments</a>
  <a href="logout~.php">Logout</a>
</div>

<div class="main">
  <h1 style="text-align: center;">Profile</h1>
    <div style="overflow-x:auto; text-align: center;">
      <?php
        if((isset($_SESSION['email'])) && !empty($_SESSION['email'])){
          $email = $_SESSION['email'];
          $adminId = $_SESSION['adminId'];
          $output1="SELECT * FROM admintb WHERE admintb.adminId = '$adminId'";
          $result1 = $con->query($output1) or die($con->error);
          while ($row1 = $result1->fetch_assoc()) {
            $fullname = $row1['fullname'];
            $email = $row1['email'];
            $phone = $row1['phone'];
            echo "<h2> Name:".$fullname."</h2>";
            echo "<h2> Email: ".$email."</h2>";
            echo "<h2> Phone:".$phone."</h2>";
          }
        }else {
          echo "";
        }
      ?>
      <div class="header">
        <img src="image/head.jpg" height="160.2px" style="max-width: 100%">
      </div>
    </div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_fixed_menu by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:03 GMT -->
</html>
