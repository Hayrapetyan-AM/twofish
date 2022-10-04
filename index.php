<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/main.css">
</head>

<body class="bg-dark text-white"> 

<?php 
include 'classes/twoFish.php';
echo '<pre>';
print_r( twoFish::init('aaaaaaaaaaaaaasdsdsdsdsdsdsdaaaaaaaa') );  
echo '</pre>';
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>