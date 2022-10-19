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
switch($action) {
    case 'add':
        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($product_key, $item_qty);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                     FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart12'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cart_view.php');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'show_add_item':
        include('add_item_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart12']);
        include('cart_view.php');
        break;
}


?>
</body>
</html>