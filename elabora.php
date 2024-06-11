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


    <h1><?php echo 'input inserito: ' . $name; ?></h1>
    <h2><?php echo 'lunghezza input: ' . strlen($name); ?></h2>


</body>
</html>