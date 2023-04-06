<?php
session_start();

if(empty($_SESSION['email'])):
   header('Location:login.html');
endif;
?>
<html>
<head>
  <title>Klinik Pergigian Syazwani</title>
  <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style2.css">
  <style>
    form{
            padding-left: 520px;
            padding-right: 500px; 
            padding-top: 5px; 
    }


    body{
        background-color: white;
        font-family: 'Poppins', sans-serif;
        padding-top: 15%;
    }

    input{
        
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid black;
        box-sizing: border-box;
        
    }

    
    h2{
        font-size: 40px;
        /* font-weight: 800; */
        text-align:center;
        padding-top: 150px; 
        font-family: 'Poppins', sans-serif;
        color: black;
    }

    span{
        color: chocolate;
    }

    p{
      text-align:center;
      font-size: 18px;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    input[type=submit]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: rgb(10,129,103);
      font-size: 15px;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
    }

    p a{
      background-color: #4CAF50;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      text-decoration:none;
      color: black;
      font-weight: 400;
    }
    
  </style>
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

  <!-- <h2>Klinik Pergigian Syazwani</h2> -->
  <h1 style="text-align:center;">Search Patient Record </h1>
  <br>
  
  <form action="displayrecord.php" method="post">

     <p>IC NUMBER : <input name="icno" type="text" size="40" required><br></p> 
     <input type="submit" name="Submit" value="Search">
     <!-- <p><a href="adminpage.php">Back to Main Menu</a></p> -->

  </form>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>