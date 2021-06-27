<?php
session_start();

if (!isset($_SESSION["username"])) {
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Muhammad Riski</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<?php include ("header.html"); ?>

 <!-- banner -->
 <section class="banner">
   <h2>WELCOME TO MY WEBSITE</h2>
 </section>



</body>
</html>
