<?php
  include 'connect~.php';

  $output = "SELECT * FROM housetb";
  $result = $con->query($output) or die($con->error);

  $results = mysqli_query($con, "SELECT * FROM housetb");
  $houseId = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

.button {
  text-decoration: none;
  color: white;
  background-color: #4caf50;
  border-radius: 10px;
  text-align: center;
  padding: 10px;
}

td {
 padding-left: 10px;
 padding-right: 10px;
}

</style>
</head>
<body>

<div class="header">
  <img src="image/head.jpg" height="160.2px" style="max-width: 100%">
</div>

<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="guest.php">Guest</a>
  <a href="adminlogin.php">Login</a>
  <a href="about.php">About</a>
</div>

<div class="content">
  <h3 style="text-align: center;">Booking Page Guest</h3>
  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Image</th>
        <th>House</th>
        <th>location</th>
        <th>More Info</th>
        <th>Book space</th>
      </tr>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()){
          $image = $row['profile_image'];
          $rent = $row['rent'];
          $squareft = $row['squareft'];
          $room = $row['room'];
          $state = $row['state'];
          $address = $row['address'];
          $additionalinfo = $row['additionalinfo'];

          // echo "".$image."";
          // echo "".$rent."";
          // echo "<a href='booking.php?images=$image&rents=$rent&squarefts=$squareft&rooms=$room&states=$state&addresss=$address&additionals=$additionalinfo' class='button'>Book space</a>";
        ?>
        <?php foreach ($houseId as $house): ?>
         <tr>
          <td><img src="<?php echo 'image/' . $house['profile_image']; ?>" width="90" height="90" alt=""> </td>
          <td><?php echo $house['rent'];; ?> <br><?php echo $house['squareft']; ?> <br><?php echo $house['room']; ?></td>
          <td><?php echo $house['state']; ?> <br><?php echo $house['address']; ?></td>
          <td><?php echo $house['additionalinfo']; ?></td>
          <td><?php echo "<a href='booking.php?images=$image&rents=$rent&squarefts=$squareft&rooms=$room&states=$state&addresss=$address&additionals=$additionalinfo' class='button'>Book space</a>"; ?></td>
         </tr>
        <?php endforeach; ?>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>

  <br>
  <br>        
<footer style="text-align: center;"> &copy 2020 by Abu Nana</footer>
</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_navbar_sticky by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:03 GMT -->
</html>
