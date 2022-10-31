<?php 

    // Logging into the database
    $dsn = "mysql:host=localhost;dbname=halloweenies";
    $username = "root";

    // Don't steal my password ;)
    $password = "";


    // Try to connect
    try {
        $db = new PDO($dsn, $username, $password);
        //echo("connected");
    } catch (PDOException $e){
        //die(include "404.php");
         
    }

    // Get the products by sortng them
    function getProductsAlphabetical() {
        // My query
        $myQuery = "Select * from Products ORDER BY ProductName";
        global $db;
        $qry = $db->query($myQuery);      
        // Get all of the products and return them
        $products = $qry->fetchAll();
        return $products;
    }

    function getProductsPrice() {
        $myQuery = "Select * from Products ORDER BY ProductPrice";
        global $db;
        $qry = $db->query($myQuery);       
        $products = $qry->fetchAll();
        return $products;
    }

    function getProduct($productID) {
        // Defining products
        $products = getProductsPrice();

        // For each of hte products, find the one that's id matches
        foreach($products as $product) {
            if ($productID == $product[0]) {
                return $product;
            }
        }
    }

    // Adding a product to the cart. Find the session ID that matches, add the quantity
    function addProduct($qty, $id) {
        $_SESSION['theCart'][$id] += $qty;
    }

    // Get the subtotal by multiplying qty and price
    function getSubtotal($qty, $price) {
        return $qty * $price;
    }

    // Getting the total by adding the subtotals.
    function getTotal($subtotals) {

        $total = 0;
        foreach($subtotals as $subtotal) {
            $total += $subtotal;
        }

        return $total;
    }
   ?>