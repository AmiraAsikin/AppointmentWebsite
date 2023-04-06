<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Klinik Pergigian Syazwani</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style2.css">
  </head>
  <style>
    
      table {
            border-collapse: collapse;
            width: 90%;
            
        }
      table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: center;
            font-size:20px;

        }

        th{
          background-color: #986D8E;
        }


        td {
            padding: 10px;
            text-align: center;
            background-color: #F0D9FF;
        }

        h3{
          
          font-size:25px;
          padding-top:10%;

        }

        label{
          font-size:20px;
        }
    </style>

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
    

<?php 
session_start();
$conn = mysqli_connect('localhost','root','','appointment') or die('connection failed');

$admin=$_SESSION['email'];

$sql = "SELECT * FROM  admin a WHERE a.emailaddress= '$admin'";
//$sql = "SELECT * FROM register r, user u, course c WHERE r.emailaddress = u.emailaddress AND c.trainingname = r.trainingname AND u.emailaddress = '$user'";

$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
        $fname=$row["fullname"];
        $icno=$row["ic"];
        $email=$row["emailaddress"];
        $phoneno=$row["phoneno"];
        $gender=$row["gender"];
          
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
     <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
            
            <form role="form" id="register-form" >
            <h3 style="color: #0E8388; font-size: 28px; padding-top: 90px;">ADMIN'S PROFILE</h3> <br>
            <div class="form-group">
                <label for="fname">Full Name : </label>
                <label><?php echo $fname?></label>
              </div> 
              <div class="form-group">
                <label for="icno">Ic Number : </label>
                <label><?php echo $icno?></label>
              </div> 
              <div class="form-group">
                <label for="email">Email Address : </label>
                <label><?php echo $email?></label>
              </div>
              <div class="form-group">
                <label for="phoneno">Phone Number : </label>
                <label><?php echo $phoneno?></label>
              </div> 
              <div class="form-group">
                <label for="gender">Gender : </label>
                <label><?php echo $gender?></label>
              </div>
              </form>
            </div>
        </div>
      </div>
     
 
  </body>
</html>
