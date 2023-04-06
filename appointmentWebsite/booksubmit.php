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
   $sql = "INSERT INTO booking (emailaddress, date, time, treatmenttype) VALUES ('$email','$date', '$time', '$treatment')";
   
    //execute query
    if(mysqli_query($conn,$sql)){

        // echo "<script type='text/javascript'>alert('You have successfully booked your dental treatment with us. If you want to make any changes about your appointment, you can call or whatsApp us at 0106642936. ');
        // document.location='slipbook.php'</script>";

        echo "<script type='text/javascript'>alert('You have succesfully booked your dental treatment with us. If you want to make any changes for your appointment, you can call or whatsApp us at 0106642936.');
        document.location='profile.php'</script>";
           

    }else{
        if(mysqli_errno($conn) == 1062)
     echo "<script type='text/javascript'>alert('You have already book your dental treatment');
     document.location='booking.php'</script>";
     else
     echo "<script type='text/javascript'>alert('Database insertion error:'.$sql.'<br>');
     document.location='booking.php'</script>";
      
    }//else end

    $conn->close();
?>
