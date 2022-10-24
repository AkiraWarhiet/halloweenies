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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    
<?php
$id = filter_input(INPUT_GET, 'id');
$action = filter_input(INPUT_POST, 'action');

switch($action) {
    case "showProducts": 
        include("view/display_all_products.php");
        break;
    default:
        if ($id) {
            include("view/display_product.php");
        }
        else {
            include("view/display_all_products.php");
        }

}


?>
</body>
</html>