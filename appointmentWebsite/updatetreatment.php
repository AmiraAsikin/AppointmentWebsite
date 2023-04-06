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

    extract($_POST);

    // Attempt update query execution
    // $sql = "UPDATE booking SET emailaddress='".$email."', date='".$date."', time='".$time."' where emailaddress='".$email."' ";
    $sql = "UPDATE treatment SET treatmenttype='".$treatment."', treatmentdesc='".$desc."', treatmentprice='".$price."' where treatmenttype='".$treatment."' ";
    



    if(mysqli_query($conn, $sql)){
        // echo "Records were updated successfully.
        // <p class=button><a href='treatmentlist.php'>View Updated Record</a></p>";

        ?>        
    <script type="text/javascript">
      alert("Records were updated successfully."); window.location="treatmentlist.php";
    </script> 
    <?php
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Record</title>
        <style>
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
        
    </body>
    </html>