<?php
    session_start();
    $action = filter_input(INPUT_POST, 'action');

    include("data/dataFunctions.php");

    if ($action == "showProductsA") {
        $products = getProductsAlphabetical();
    }
    else {
        $products = getProducts();
    }

    if (empty($_SESSION['theCart'])) { 
        $_SESSION['theCart'] = array();
        foreach($products as $product) {
            $_SESSION['theCart'][$product[0]] = 0;
        }
    }
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
switch($action) {
    case 'add':
        $id = filter_input(INPUT_POST, 'productkey');
        $qty = filter_input(INPUT_POST, 'itemqty');
        addProduct($qty, $id);
        include("view/display_cart.php");
        break;
    case 'clear':
        foreach($products as $product) {
            $_SESSION['theCart'][$product[0]] = 0;
        }
        include("view/display_cart.php");
        break;
    case "displayCart": 
        include("view/display_cart.php");
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