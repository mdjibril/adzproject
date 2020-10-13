<?php
  $msg = "";
  $msg_class = "";
  require 'connect~.php';

  // $conn = mysqli_connect("localhost", "root", "", "img-upload");
  if (isset($_POST['save_profile'])) {
    // for the database
    $rent = stripslashes($_POST['rent']);
    $squareft = stripslashes($_POST['squareft']);
    $room = stripslashes($_POST['room']);
    $available = stripslashes($_POST['available']);
    $state = stripslashes($_POST['state']);
    $address = stripslashes($_POST['address']);
    $additionalinfo = stripslashes($_POST['additionalinfo']);

    // $bio = stripslashes($_POST['bio']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "image/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        // $sql = "INSERT INTO users SET profile_image='$profileImageName', bio='$bio'";
        $sql = "INSERT INTO housetb SET profile_image='$profileImageName', rent='$rent', squareft='$squareft', room='$room', available='$available', state='$state', address='$address', additionalinfo='$additionalinfo'";
        
        if(mysqli_query($con, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>