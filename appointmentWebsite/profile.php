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
<link rel="stylesheet" href="css/style.css">
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
  <header>
      <!-- navigation bar -->  
    <?php include "banner.php"; ?> 
    </header>
    

<?php 
session_start();
$conn = mysqli_connect('localhost','root','','appointment') or die('connection failed');

$user=$_SESSION['email'];

$sql = "SELECT * FROM  user u WHERE u.emailaddress= '$user'";
//$sql = "SELECT * FROM register r, user u, course c WHERE r.emailaddress = u.emailaddress AND c.trainingname = r.trainingname AND u.emailaddress = '$user'";

$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        $email=$row["emailaddress"];
        $fname=$row["fullname"];
        $icno=$row["ic"];
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
            <h3 style="color: #0E8388; font-size: 28px; padding-top: 90px;">PATIENT'S PROFILE</h3> <br>
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
                <table class="form-group">
                <tr>
                    <th>Treatment Type</th>
                    <th>Treatment Price</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th> Appointment Status</th>
                </tr>
                <small style="font-size: 15px;">Notes :  Appointment status will be updated whether approved or rejected by the clinic administrator. <br> 
                If you want to cancel an appointment that has been made, you need to call or whatsapp us at 0107017741.</small>
                <br> <br>
              
    <?php 
   
  //  $sql2 = "SELECT * FROM  booking b WHERE b.emailaddress= '$user'";
    $sql2 = "SELECT * FROM booking b, treatment t WHERE b.treatmentType = t.treatmentType AND b.emailaddress = '$user'"; 
    //$sql2 = "SELECT * FROM register r, course c WHERE c.trainingname = r.trainingname AND r.emailaddress= '$email'"; 
    
    $result2 = $conn->query($sql2);
     //check if records were returned
    if ($result2->num_rows > 0) {
    // output data of each row
        while($row = $result2->fetch_assoc()) {

        $treatment=$row["treatmenttype"];
        $price=$row["treatmentprice"];
        $date=$row["date"];
        $time=$row["time"];
        $status=$row["status"];
        // $regdate=$row["registerdate"];
    ?>
          <tr>
                     <td><?php echo $treatment?></td>
                     <td><?php echo $price?></td>
                    <td><?php echo $date?></td>
                    <td><?php echo $time?></td> 
                    <td><?php echo $status?></td> 
                 </tr>  

<?php
         }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }

?>
                </table>
              </form>
            </div>
        </div>
      </div>
     
 
  </body>
</html>
