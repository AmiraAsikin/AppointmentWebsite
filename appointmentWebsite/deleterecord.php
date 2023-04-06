<html>
<head>
  <title>Klinik Pergigian Syazwani</title>
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

<?php
  include 'db_con.php';

  $id=$_REQUEST['ID'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  //get input value
  //$adName=$_POST['advisor_name'];

  // sql to delete a record
  $sql = "DELETE FROM booking WHERE ID='".$id."'";

  if ($conn->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    ?>        
    <script type="text/javascript">
      alert("Record deleted successfully."); window.location="appointmentlist.php";
    </script> 
    <?php
  } 
  else {
    echo "Error deleting record: " . $conn->error;
  }


  //close connection  
  $conn->close();
//   echo '<p class=button><a href="appointmentlist.php">Back to Previous Page</a></p>';
// ?>
</body> 
</html>