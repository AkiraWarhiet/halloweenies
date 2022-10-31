<?php
    /* Developers:Charlie Barnhart
                  Chloe Gertner

    */





    // Start the session 
    session_start();

    // Define action ahead of time so we can decide what to do when we display the page
    $action = filter_input(INPUT_POST, 'action');

    // Include all of the data functions
    include("data/dataFunctions.php");

    // If show products is alphabetical, Call the querty that orders it
    if ($action == "showProductsA") {
        $products = getProductsAlphabetical();
    }

    // Order it by ID number
    else {
        $products = getProductsPrice();
    }

    // If the session is empty, pre define it as an array so we don't have an angry console
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
    <!-- Fun Format Stuff -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloweenies</title>
    <link rel="stylesheet" href="view/styles.css">
</head>
<body>
    
<?php
// Defining ID so we can do individual displays
$id = filter_input(INPUT_GET, 'id');

// Switch case > if statement
switch($action) {
    // Case Add is for addng and item in cart
    case 'add':
        // Defining ID and QTY with Post
        $id = filter_input(INPUT_POST, 'productkey');
        $qty = filter_input(INPUT_POST, 'itemqty');

        // Call our add product function
        addProduct($qty, $id);

        // Display the cart
        include("view/display_cart.php");
        break;
    // Case clear is for clearing the cart
    case 'clear':
        foreach($products as $product) {
            $_SESSION['theCart'][$product[0]] = 0;
        }
        include("view/display_cart.php");
        break;
    // This dsplays the cart
    case "displayCart": 
        include("view/display_cart.php");
        break;
    // This is what does the indiviaul views of the items
    case "displayProducts":
        include ("view/display_all_products.php");
        break;
    case "showProductsA":
        include ("view/display_all_products.php");
        break;
    case "showProductsP":
        include ("view/display_all_products.php");
        break;
    default:
        // If ID is set, go ahead and display the indivudal's page
            
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