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
   <link rel="stylesheet" href="css/style.css">

   <style>
      body{
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        padding-top: 90px;
        padding-left: 20px;
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
            font-size:13px;

        }

        th{
          background-color: #ADC2A9;
        }

        td {
            padding: 10px;
            text-align: center;
            background-color: #FFF9B6;
        }

        a1{
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
          display
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

         <a href="#home" class="logo">Klinik Pergigian Syazwani<span></span></a>

         <nav class="nav">
            <a href="appointmentlist.php">View Appointment</a>
            <a href="treatmentlist.php">Services List</a>
            <a href="reviewlist.php">Customer Reviews</a>
            <a href="searchrecord.php">Search Patient</a>
            
         </nav>
         <a href="logout.php" class="link-btn">Logout</a>

      </div>

   </div>

</header>

<!-- header section ends -->

<h2> Customer Reviews</h2>

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
  $sql = "SELECT * FROM  review";

  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<th align="center"><b>No</b></td>
     <th align="center"><b>Email Address</b></td>
     <th align="center"><b>Message</b></td>
     <th align="center"><b>Action</b></td>
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["no"].'</td>';
        echo '<td align="center">'.$row["emailaddress"].'</td>';
        echo '<td align="center">'.$row["message"].'</td>';
        ?>
        <td><a1 href="deletereview.php?No=<?php echo $row["no"];?> " onclick="return confirm('Are you sure to delete this review?') ">DELETE</a1></td>
        <?php
        echo '</tr>';
     }
  } 

  else {
    echo "no results ";  //if no record found in the database
  }

  //close connection 
  $conn->close();
//   echo '<p class=button style="padding-left: 33px;" > <a href="adminpage.php">Back to Home Page</a></p>';
?>



</body>
</html>
