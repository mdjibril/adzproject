<?php
  include 'connect~.php';
  $results = mysqli_query($con, "SELECT * FROM housetb");
  $houseId = mysqli_fetch_all($results, MYSQLI_ASSOC);
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
  background-color: #ffffff;
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
  <form action="" method="POST" style="display: flex; flex-direction: column; align-content: center;">
    <div class="row">
      <h2 style="text-align:center">Boking Info</h2>
      <div class="col">
        <!-- <img src="image/<?php echo $_REQUEST['images'];?>" style="height: 100px; width: 100px; margin: 0 auto"><br> -->
        <label>Amount</label>
        <input type="text" name="rent" value="<?php echo $_REQUEST['rents'];?>" disabled>
        <label>Size</label> 
        <input type="text" name="squareft" value="<?php echo $_REQUEST['squarefts'];?>" disabled>
        <label>Rooms/Bath</label> 
        <input type="text" name="room" value="<?php echo $_REQUEST['rooms'];?>" disabled>
        <label>State/Location</label>
        <input type="text" name="location" value="<?php echo $_REQUEST['states'], $_REQUEST['addresss'];?>" disabled>
        <label>More Info</label>
        <input type="text" name="additionals" value="<?php echo $_REQUEST['additionals'];?>" disabled>

        <label>More Info</label>
        <input type="text" name="additionals" value="<?php echo $_REQUEST['additionals'];?>" disabled>

        <label>Buyers Name</label>
        <input type="text" name="name" value="">

        <label>Buyers Address</label>
        <input type="text" name="name" value="">

        <label>Buyers Number</label>
        <input type="text" name="name" value="k">

        <label>Buyers Employer</label>
        <input type="text" name="name" value="">

        <label>Buyers Employer address</label>
        <input type="text" name="name" value=""> 

        <label>Buyers Employer number</label>
        <input type="text" name="name" value="">  

        <input type="submit" value="Print" onclick="print()">
      </div>
      
    </div>
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_social_login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:58:10 GMT -->
</html>
