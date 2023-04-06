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
    <style>
      label{
          font-size:20px;
        }
    </style>
  </head>  

  <?php session_start();
 include 'db_con.php';


$user=$_SESSION['email'];

$sql = "SELECT * FROM user where emailaddress = '$user'";
$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
      
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
       $email=$row["emailaddress"];
      ?>
      
  <body>
<!-- Banner -->    
<?php include "banner.php"; ?> 

<section class="contact" id="contact">

  <h1 class="heading" style="padding-top: 40px;">Write your review</h1>


            <form action="reviewsubmit.php" method='post'>
              
            
                <span>your name :</span>
                <br>
                <label><?php echo $row["fullname"]?></label>
                <br>
                <span>your ic number :</span>
                <br>
                <label><?php echo $row["ic"]?></label>
                <br>
                <span>your email :</span>
                <br>
                <label><?php echo $row["emailaddress"]?></label>
                <br>
                <span>your number :</span>
                <br>
                <label><?php echo $row["phoneno"]?></label>
                <br>
              

<?php
    }//close while loop
  }//close if loop
  else{
    echo'<font color=red>No record found';
  }
?>
                
                <span>Message :</span>
                <input type="text" name="message" class="box" required>
              
              <!-- <button type="submit" class="btn btn-warning">Submit</button> -->
              <input type="submit" value="submit" name="submit" class="link-btn">
            </form>
            </section>
          <!-- </div>
        </div>
      </div> -->

  </body>
</html>


