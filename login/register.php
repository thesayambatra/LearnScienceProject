<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $class = mysqli_real_escape_string($conn, $_POST['class']);

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already exists'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }elseif($image_size > 20000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image, dob, age, gender, class) VALUES('$name', '$email', '$pass', '$image', '$dob', '$age', '$gender', '$class')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'Registration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
   <div class="top-container-form">
      <div class="logo-container">
         <img src="http://localhost/LearnScience/images/projects/1st%20logo.png" alt="Logo">
      </div>
      <h2 class="rn">Register Now</h2>
   </div>
      <?php
      if(isset($message)){
         foreach($message as $msg){
            echo '<div class="message">'.$msg.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Enter Username" class="box" required>
      <input type="email" name="email" placeholder="Enter Email" class="box" required>
      <input type="password" name="password" placeholder="Enter Password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm Password" class="box" required>
      <input type="date" name="dob" placeholder="Date of Birth (YYYY-MM-DD)" class="box" required>
      <input type="number" name="age" placeholder="Age" class="box" required>
      <select name="gender" class="box" required>
         <option value="">Select Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Other">Other</option>
      </select>
      <select name="class" class="box" required>
         <option value="">Select Class</option>
         <option value="10th">10th</option>
         <option value="12th">12th</option>
      </select>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Register Now" class="btn">
      <p>Already have an account? <a href="login.php">Login Now</a></p>
   </form>

</div>

</body>
</html>
