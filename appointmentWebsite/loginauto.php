<?php
session_start();

// Code to connect to database
// include 'db_con.php';
$conn = mysqli_connect('localhost','root','','appointment') or die('connection failed');

// Define $myusername and $mypassword
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT emailaddress, password FROM user WHERE emailaddress='$email' and password='$password'";
$result = $conn->query($sql);

$row=mysqli_fetch_array($result);


// Mysql_num_row is counting table row
if ($result->num_rows > 0) 
{
    $_SESSION['email']=$row['emailaddress'];

    //redirect to file "home.php"
    header("location:home.php");
}
else 
{
    // echo "<p>Wrong Username or Password. Please try again.</p>";
    ?>        
    <script type="text/javascript">
      alert("The email address and password do not match."); window.location="login.html";
    </script> 
    <?php

}

$conn->close();
?>