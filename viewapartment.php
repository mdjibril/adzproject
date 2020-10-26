<?php
  include 'connect~.php';
  $results = mysqli_query($con, "SELECT * FROM housetb");
  $houseId = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin:0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

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
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}


/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  /*opacity: 0.9;*/
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding-left: 10px;
  padding-right: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}
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
  <h1 style="text-align:center">All Apartment</h1>
  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Image</th>
        <th>House</th>
        <th>location</th>
        <th>More Info</th>
      </tr>
      <tbody>
        <?php foreach ($houseId as $house): ?>
         <tr>
          <td><img src="<?php echo 'image/' . $house['profile_image'] ?>" width="90" height="90" alt=""> </td>
          <td><?php echo $house['rent']; ?>, <br><?php echo $house['squareft']; ?>, <br><?php echo $house['room']; ?></td>
          <td><?php echo $house['state']; ?>, <?php echo $house['address']; ?></td>
          <td><?php echo $house['additionalinfo']; ?></td>
         </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
</body>
<script type="text/javascript" src="js/script.js"></script>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_fixed_menu by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:03 GMT -->
</html>
