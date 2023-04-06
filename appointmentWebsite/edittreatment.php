<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

$bil=$_REQUEST['Bil'];
//$query = "SELECT * FROM booking b , user u , treatment t where Id ='".$id."'"; 
// $query = "SELECT * FROM  treatment  where ID='".$id."' ";
$query = "SELECT * FROM  treatment where Bil='".$bil."' ";


$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>
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

<style>
    form{
        padding-left: 500px;
        padding-right: 500px; 
        padding-top: 20px; 
    }

    h1{
        text-align:center;
        padding-top: 20px; 
        font-size: 40px;
    }

    body{
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        padding-top: 90px;
     padding-left: 30px;
     padding-bottom: 30px;
    }
    
    input{
        
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid black;
            box-sizing: border-box;
    }

    h2{
          font-size: 40px;
          font-weight: 800;
          text-align:center;
          padding-top: 20px; 
          font-family: 'Poppins', sans-serif;
          color: #364f6b;
    }

    span{
          color: chocolate;
    }

    input[type=submit]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
    }

    input[type=button]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
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
<div class="form">

<h1>Update Service</h1>

<div>
<form name="form" method="post" action="updatetreatment.php"> 
<input type="hidden" name="new" value="1" />
<input name="bil" type="hidden" value="<?php echo $row['bil'];?>" />
<p><input type="text" name="treatment" value="<?php echo $row['treatmenttype'];?>" /></p>
<p><input type="text" name="desc" value="<?php echo $row['treatmentdesc'];?>" /></p>
<p><input type="text" name="price" value="<?php echo $row['treatmentprice'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
<!-- <input type="button" value="Back" onClick="history.back()"> -->
</form>
</div>



</div>
</body>
</html>