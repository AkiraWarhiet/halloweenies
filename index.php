<?php
    session_start();

    if (empty($_SESSION['theCart'])) { 
        $_SESSION['theCart'] = array(); 
    }

    include("data/dataFunctions.php");

    $products = getProducts();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include("view/display_all_products.php");

$action = filter_input(INPUT_POST, 'action');
if (!isset($action)) {
    $action = "showProducts";
}

nclude("view/display_all_products.php");


?>
</body>
</html>