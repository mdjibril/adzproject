<?php include_once('addapartment~.php') ?>

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
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=file], select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, select:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

#profileDisplay { 
  display: block; 
  height: 210px; 
  width: 60%; 
  margin: 0px auto; 
  /*border-radius: 50%; */
}
.img-placeholder {
  width: 60%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 210px;
  /*border-radius: 50%;*/
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}

.img-placeholder h4 {
  margin-top: 20%;
  color: red;
  text-align: center;
}

.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
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
  <h1 style="text-align:center">Add Apartment</h1>
  <form action="addapartment.php" method="POST" enctype='multipart/form-data'> 
  <div class="container">
    <?php if (!empty($msg)): ?>
      <div class="alert <?php echo $msg_class ?>" style="text-align: center;">
        <?php echo $msg; ?>
      </div>
      <br>
    <?php endif; ?>
    <span class="img-div">
      <div class="text-center img-placeholder"  onClick="triggerClick()">
          <h4>Update image</h4>
      </div>
      <img src="image/head.jpg" onClick="triggerClick()" id="profileDisplay">
    </span>
    <center><label for="profileImage"><b>Apartment Image</b></label></center>
    <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
    <br><br>
    
    <label for="rent"><b>Rent</b></label>
    <input type="text" placeholder="Enter Rent Price in Naira" name="rent" required>

    <label for="squareft"><b>Square Feet</b></label>
    <input type="text" placeholder="Enter Square Feet" name="squareft" required>

    <label for="room"><b>Room</b></label>
    <input type="text" placeholder="Bed/Bath Room e.g 3 bd / 1 bt" name="room" required>

    <label for="available"><b>Available</b></label>
    <select class='form-control' name='available'>
      <option value='Yes'>Yes</option>
      <option value='No'>No</option>
    </select>

    <label for="state"><b>State</b></label>
    <select class='form-control' name='state'>
        <option>Abia</option>
        <option>Adamawa</option>
        <option>Akwa Ibom</option>
        <option>Anambra</option>
        <option>Bauchi</option>
        <option>Bayelsa</option>
        <option>Benue</option>
        <option>Borno</option>
        <option>Cross River</option>
        <option>Delta</option>
        <option>Ebonyi</option>
        <option>Edo</option>
        <option>Ekiti</option>
        <option>Enugu</option>
        <option>Gombe</option>
        <option>Imo</option>
        <option>Jigawa</option>
        <option>Kaduna</option>
        <option>Kano</option>
        <option>Katsina</option>
        <option>Kebbi</option>
        <option>Kogi</option>
        <option>kwara</option>
        <option>Lagos</option>
        <option>Nasarawa</option>
        <option>Niger</option>
        <option>Ogun</option>
        <option>Ondo</option>
        <option>Osun</option>
        <option>Oyo</option>
        <option>Plateau</option>
        <option>Rivers</option>
        <option>Sokoto</option>
        <option>Taraba</option>
        <option>Yobe</option>
        <option>Zamfara</option>
        <option>FCT - Abuja</option>
      </select>


    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>

    <label for="additionalinfo"><b>Addtional Info</b></label>
    <input type="text" placeholder="Enter address" name="additionalinfo" >

    <button type="submit" name="save_profile" class="registerbtn">Register</button>
  </div>
</form>
</div>
</body>
<script type="text/javascript" src="js/script.js"></script>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_fixed_menu by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:03 GMT -->
</html>
