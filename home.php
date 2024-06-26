<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

// Check if the user is not logged in
if(empty($user_id)){
   header('location:login.php');
   exit(); // Terminate script after redirection
}

// Logout action
if(isset($_GET['logout'])){
   // Unset user_id and destroy the session
   unset($user_id);
   session_destroy();
   header('location:index1.php');
   exit(); // Terminate script after redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `profile1` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">Update Profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to logout?')" class="delete-btn">Logout</a>
      <a href="index1.php" class="btn">Home Page</a>
      <p>New <a href="login.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>

</body>
</html>
