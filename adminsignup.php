<?php
  SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: center;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
 
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>

<div class="container">
  <form action="signup~.php" method="POST">
    <div class="row">
      <h2 style="text-align:center">Admin Signup</h2>
      <?php
        if(isset($_SESSION['error'])){
          $error = $_SESSION['error'];
          echo "<p style='color:whitesmoke; text-align:center'>$error</p>";
        }

        if(isset($_SESSION['success'])){
          $success = $_SESSION['success'];
          echo "<p style='color:whitesmoke; text-align:center'>$success</p>";
          }
      ?>
      <div class="col">
        <input type="text" name="fullname" placeholder="Surname Firstname Othername" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="phone" placeholder="Phone number" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Signup">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="adminlogin.php" style="color:white" class="btn">Login</a>
    </div>
    <!-- <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div> -->
  </div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_social_login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:10 GMT -->
</html>
<?php
  unset($_SESSION['error']);
  unset($_SESSION['success']);
?>