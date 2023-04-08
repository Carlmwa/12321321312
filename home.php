<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <style>
          a{
               border: 2px solid black;
               padding: 15px;
               color: white;
               text-decoration: none;
               font-family: arial;
               font-weight: bold;
               font-size: 20px;
          }
     </style>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1> Welcome, <?php echo $_SESSION['name']; ?></h1>
     <br>

     <a href="index.html">CLIICK IF YOU WANT TO CONTINUE</a>
     <br>
     <br>

     <br>
     <a href="logout.php">LOGOUT</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
