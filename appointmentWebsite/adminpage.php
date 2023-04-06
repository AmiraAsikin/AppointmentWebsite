<?php
session_start();

if(empty($_SESSION['email'])):
   header('Location:login.html');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Klinik Pergigian Syazwani</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="adminpage.php" class="logo">Klinik Pergigian Syazwani<span></span></a>

         <nav class="nav">
            <!-- <a href="adminpage.php">Home</a> -->
            <a href="appointmentlist.php">View Appointment</a>
            <a href="treatmentlist.php">Services List</a>
            <a href="reviewlist.php">Customer Reviews</a>
            <a href="searchrecord.php">Search Patient</a>
            <a href="profileadmin.php">Profile</a>
         </nav>
         <a href="logoutadmin.php" class="link-btn">Logout</a>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h1 style="text-transform: uppercase; color: rgb(22, 163, 173);">Welcome to Administrator Page</h1>
            <h3>We Bring Your Healthy Smiles</h3> <br>
            <!-- <a href="appointmentlist.php" class="link-btn">View Appointments</a> -->
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
