<?php

include 'config.php';
session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login.php');
   exit;
}

$user_id = $_SESSION['user_id'];

$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');

if(mysqli_num_rows($select) > 0){
   $row = mysqli_fetch_assoc($select);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome <?php echo $row['name']; ?></title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="top-container">
    <img class="logo" src="../images/projects/1st logo.png" alt="Logo">
    <h1>WELCOME TO LEARN SCIENCE</h1>
  </div>

<div class="container">

   <div class="profile">
      <img src="uploaded_img/<?php echo $row['image']; ?>" alt="Profile Picture">
      <div class="info">  
         <h3>Welcome, <?php echo $row['name']; ?></h3>
         <p>Email: <?php echo $row['email']; ?></p>
         <p>Date of Birth: <?php echo $row['dob']; ?></p>
         <p>Age: <?php echo $row['age']; ?></p>
         <p>Gender: <?php echo $row['gender']; ?></p>
         <p>Class: <?php echo $row['class']; ?></p>
         <p><a href="update_profile.php">Update Profile</a></p>
         <p><a href="login.php">Logout</a></p>
      </div>
      </div>

</div>

</body>
</html>
