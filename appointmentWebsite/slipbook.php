<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Klinik Pergigian Syazwani</title>
    <style>
      /* .container{
        background: #ADC2A9;
        padding-left:35%;
        padding-right:30%;
        padding-top:30px;
        padding-bottom:20%;
      } */

      table {
            border-collapse: collapse;
            width: 100%;
            
          
        }
      table,
        td,
        th {
            border: 1px solid black;
            /* text-align: center; */
            font-size:18px;
            padding-left:20px;

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
          text-align: center;

        }

        label{
          font-size:20px;
        }

        .btnbtn-warning{
          background-color: #79B4B7;
          border-radius: 5px;
          margin-top: 5px;
          padding: 15px 20px 15px 20px;
          color: black;
          font-size: 15px;
          font-weight: bold;
        }
      
    </style>
  </head>  
  <body>
    <header>
      <!-- navigation bar -->  
    <?php include "banner.php"; ?> 
    </header>
       
    <?php session_start();
    include 'db_con.php';

    $user=$_SESSION['email'];

    $sql = "SELECT * FROM  booking b, user u, treatment t WHERE  b.emailaddress= u.emailaddress AND t.treatmenttype = b.treatmenttype AND b.emailaddress = '$user'";

    $result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // $email=$row["emailaddress"];
        $fname=$row["fullname"];
        $email=$row["emailaddress"];
        $phoneno=$row["phoneno"];
        $date=$row["date"];
        $time=$row["time"];
        $treatment=$row["treatmenttype"];
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
            <h1 style=" text-align: center; padding-top: 90px; padding-left: 15px;">Klinik Pergigian Syazwani <br> Appointment Booking Slip</h1> <br>
            <p style=" text-align: center; padding-top: 10px; font-size: 25px; ">Your appointment was successful!</p> <br>
            <form role="form" id="register-form">
            <table align="center" border="1">
                <tr>
                    <th width="104">Email Address</td>
                    <td width="350"><?php echo $email?></td>
                </tr>

              <tr>
                  <th width="104">Full Name</td>
                  <td width="350"><?php echo $fname?></td>
              </tr>

              <tr>
                  <th width="104">Phone Number</td>
                  <td width="350"><?php echo $phoneno?></td>
              </tr>

              <tr>
                  <th width="104">Treatment Date</td>
                  <td width="350"><?php echo $date?></td>
              </tr> 

              <tr>
                  <th width="104">Treatment Time</td>
                  <td width="350"><?php echo $time?></td>
              </tr>

              <tr>
                  <th width="104">Treatment Type</td>
                  <td width="350"><?php echo $treatment?></td>
              </tr>
              <tr>
                  <th width="104">&nbsp&nbsp</td>
                  <td width="350"><button type="submit" class="btnbtn-warning" onclick="window.print()">Print Appointment Slip</button></td>
              </tr>
              </table>
          </div>
        </div>
      </div>
          
 
  </body>
</html>

