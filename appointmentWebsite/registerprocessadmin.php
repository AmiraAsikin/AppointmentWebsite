<?php
//  include 'db_con.php';

 $conn = mysqli_connect('localhost','root','','appointment') or die('connection failed');
  //get input values from form
     extract($_POST);
     $sql = "INSERT INTO admin (fullname, ic, emailaddress, phoneno, gender, password) 
     VALUES ('$fname', '$icno', '$email', '$phoneno', '$gender', '$password')";


      //execute query
      if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('New record created successfully!');
    document.location='loginadmin.html'</script>";
      } 
      else {
        echo "<script type='text/javascript'>alert('The record already created!');
        document.location='register.html'</script>";
      }

      //close connection
      $conn->close();
  ?>