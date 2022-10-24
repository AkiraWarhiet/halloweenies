<?php 


    $dsn = "mysql:host=localhost;dbname=HalloweenItems";
    $username = "root";
    $password = "";


    try {
        $db = new PDO($dsn, $username, $password);
        //echo("connected");
    } catch (PDOException $e){
        //die(include "404.php");
         
    }

    function getProductsAlphabetical() {
        $myQuery = "Select * from Products ORDER BY ProductName";
        global $db;
        $qry = $db->query($myQuery);       
        $products = $qry->fetchAll();
        return $products;
    }

    function getProducts() {
        $myQuery = "Select * from Products";
        global $db;
        $qry = $db->query($myQuery);       
        $products = $qry->fetchAll();
        return $products;
    }

    function getProduct($productID) {
        $products = getProducts();
        foreach($products as $product) {
            if ($productID == $product[0]) {
                return $product;
            }
        }
    }

    function addProduct($qty, $id) {
        $_SESSION['theCart'][$id] += $qty;
    }

    function getSubtotal($qty, $price) {
        return $qty * $price;
    }

    function getTotal($subtotals) {

        $total = 0;
        foreach($subtotals as $subtotal) {
            $total += $subtotal;
        }

        return $total;
    }
   ?>