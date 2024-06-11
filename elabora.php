<?php 
$name = $_GET['name']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


    <h1><?php echo 'Name: ' . $name; ?></h1>
    <h2><?php echo 'lunghezza name: ' . strlen($name); ?></h2>
    <h2><?php echo 'Censored: ' . str_repeat('*', 3); ?></h2>


</body>
</html>