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
            width: 98%;
            
        }
      table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
            font-size:13px;

        }

        th{
          background-color: #ADC2A9;
        }

        td {
            padding: 8px;
            text-align: center;
            background-color: #FFF9B6;
        }

        /* a{
          background-color: #FFE699;
          width: 100%;
          padding: 12px 12px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          background-color: #87AAAA;
          font-size: 12px;
          text-decoration:none;
          color: black;
          font-weight: 400;
        } */

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

        h2{
          font-size: 30px;
          font-weight: 800;
          text-align:center;
          padding-top: 20px; 
          color: black;
    }

        span{
          color: chocolate;
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


<h2> Patient's Appointment</h2>
<br>

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

  //create and execute query
  // $sql = "SELECT * FROM  booking";
  $sql = "SELECT * FROM  user INNER JOIN booking ON booking.emailaddress = user.emailaddress INNER JOIN 
  treatment ON treatment.treatmenttype = booking.treatmenttype";

  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<th align="center"><b>ID</b></td>
     <th align="center"><b>Full Name</b></td>
     <th align="center"><b>IC Number</b></td>
     <th align="center"><b>Email Address</b></td>
     <th align="center"><b>Phone Number</b></td>
     <th align="center"><b>Treatment Date</b></td>
     <th align="center"><b>Treatment Time</b></td>
     <th align="center"><b>Treatment Type</b></td>
     <th align="center"><b>Treatment Price</b></td>
     <th align="center"><b>Appointment Status</b></td>
     <th align="center"><b>Approval Action</b></td>
     <th align="center"><b>Rejection Action</b></td>
     <th align="center"><b>Delete Action</b></td>
     <th align="center"><b>Update Action</b></td>
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
        echo '<td align="center">'.$row["treatmentprice"].'</td>';
        echo '<td align="center">'.$row["status"].'</td>';
        echo '<td> <a href="accept.php?ID='.$row["id"].'">APPROVE</a></td>';
        echo '<td> <a href="reject.php?ID='.$row["id"].'">REJECT</a></td>';
        ?>
        <td><a href="deleterecord.php?ID=<?php echo $row["id"];?> " onclick="return confirm('Are you sure to delete data?') ">DELETE</a></td>
        <?php
        echo '<td> <a href="editrecord.php?ID='.$row["id"].'">UPDATE</a></td>';
        echo '</tr>';
     }
  } 

  else {
    echo "no results ";  //if no record found in the database
  }

  //close connection 
  $conn->close();
  // echo '<p class=button style="padding-left: 33px;" > <a href="adminpage.php">Back to Home Page</a></p>';
?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>

