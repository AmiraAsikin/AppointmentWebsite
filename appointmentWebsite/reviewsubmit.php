<?php
    session_start();
    include 'db_con.php';
    extract($_POST);

    $user=$_SESSION['email'];

    $sql = "SELECT * FROM user where emailaddress = '$user'";
    $result = $conn->query($sql);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        $email=$row["emailaddress"];
        }
    }

    // $date=date("Y/m/d");
    //$sql = "INSERT INTO booking (fullname, emailaddress, phoneno, date, time, treatmenttype) VALUES ( '$fullname','$emailaddress','$phoneno','$date', '$time', '$treatment')";
   $sql = "INSERT INTO review (emailaddress, message) VALUES ('$email','$message')";
   
    //execute query
    if(mysqli_query($conn,$sql)){

        echo "<script type='text/javascript'>alert('Thank you. Your review has been submitted!');
        document.location='home.php'</script>";  

    }else{
        if(mysqli_errno($conn) == 1062)
     echo "<script type='text/javascript'>alert('Thank you. Your review has been submitted!');
     document.location='home.php'</script>";
     else
     echo "<script type='text/javascript'>alert('Database insertion error:'.$sql.'<br>');
     document.location='booking.php'</script>";
      
    }//else end

    $conn->close();
?>
