<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Klinik Pergigian Syazwani</title>
	</head>
    <style>
body{
      background-color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        padding-top: 90px;
     padding-left: 30px;
     padding-bottom: 30px;
    }
    
    .banner_pad{
        background-color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;

    }

    .banner_pad span{
        color:#364f6b;
    }

    h1{
        padding-top: 100px;
        text-align:center;
        font-family: 'Poppins', sans-serif;
        
    }

    p{
        text-align:center;
        font-family: 'Poppins', sans-serif;
       
    }

    .session{
        text-align:center;
        font-family: 'Poppins', sans-serif;
    }

    </style>

	
	<body>
	
		<div class="wrapper">
           
		
			<!-- main content -->
			<div class="main-content bottom-0">
				<div class="container">
					<div class="banner_pad">
                        <h1 style="font-size: 20px; font-family: 'Poppins', sans-serif;"><span>THANK YOU! </span></h1>
						<p style="font-size: 18px;font-family: 'Poppins', sans-serif;"><strong>Please Enjoy Our Dental Treatment and Come Again.</strong></p>
					</div>
				</div>
                <div class="session">
                    <?php

                    session_start();
                    if(empty($_SESSION['email'])):
                        header('Location:login.html');
                    endif;

                    $servername="localhost"; // Host name
                    $username="root"; // Mysql username
                    $password=""; // Mysql password
                    $dbName="appointment"; // Database name

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbName);

                    session_destroy();

                    echo '<meta http-equiv="refresh" content="2;url=login.html">';
                    echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
                    echo '<span class="itext">Logging out please wait!....</span>';
                    ?>
                </div>
</body>
</html>

