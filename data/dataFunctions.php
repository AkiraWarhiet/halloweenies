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
   ?>