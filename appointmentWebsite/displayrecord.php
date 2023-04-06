<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appointment";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
  //escape special characters in a string
  $icno=mysqli_real_escape_string($conn, $_POST['icno']);

  //create and execute query
  //$sql = "SELECT * FROM user, register, course WHERE fullname= '".$fname."'";

//   $sql = "SELECT * FROM  user INNER JOIN register ON register.emailaddress = user.emailaddress INNER JOIN 
//   course ON course.courseid = register.courseid WHERE fullname= '".$fname."' ";

$sql = "SELECT * FROM  user INNER JOIN booking ON booking.emailaddress = user.emailaddress INNER JOIN 
treatment ON treatment.treatmenttype = booking.treatmenttype WHERE ic= '".$icno."' ";

  

  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<h2>Selected record as the following:</h2> <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr>
     <th align="center"><b>ID</b></td>
     <th align="center"><b>Full Name</b></td>
     <th align="center"><b>IC Number</b></td>
     <th align="center"><b>Email Address</b></td>
     <th align="center"><b>Phone Number</b></td>
     <th align="center"><b>Treatment Date</b></td>
     <th align="center"><b>Treatment Time</b></td>
     <th align="center"><b>Treatment Type</b></td>
     
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["id"].'</td>';
        echo '<td align="center">'.$row["fullname"].'</td>';
        echo '<td align="center">'.$row["ic"].'</td>';
        echo '<td align="center">'.$row["emailaddress"].'</td>';
        echo '<td align="center">'.$row["phoneno"].'</td>';
        echo '<td align="center">'.$row["date"].'</td>';
        echo '<td align="center">'.$row["time"].'</td>';
        echo '<td align="center">'.$row["treatmenttype"].'</td>';
        //echo "<td align='center'><a href='updaterecord.php?pid=$row[Id]'> UPDATE </a>   
        //</td>";
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

 //close connection 
 $conn->close();
//  echo '<p p class=button style="padding-left: 33px;" ><a href="adminpage.php">Back to Main Menu</a></p>';

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
  <style>
    
    body{
      background-color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        padding-top: 90px;
     padding-left: 30px;
     padding-bottom: 30px;
    }
     table {
            border-collapse: collapse;
            width: 95%;
            
        }
      table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
            font-size:15px;

        }

        th{
          background-color: #ADC2A9;
        }

        td {
            padding: 10px;
            text-align: center;
            background-color: #FFF9B6;
        }

        h2{
          font-size: 25px;
          text-align:center;
        }

        h1{
          font-size: 40px;
          /* font-weight: 800; */
          text-align:center;
          padding-top: 20px; 
          font-family: 'Poppins', sans-serif;
          color: black;
        }
        span{
          color: chocolate;
        }

        .button a{
          background-color: #FFE699;
          width: 10%;
          padding: 5px 5px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          background-color: #87AAAA;
          font-size: 15px;
          text-decoration:none;
          color: black;
          font-weight: 400;
          text-align:center;
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
  
</body>
</html>
