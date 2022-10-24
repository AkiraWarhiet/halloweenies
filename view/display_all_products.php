
<?php
//Product Id,Product name, Product Dsc, Product Price, Product Image
    // Header At The Top
    ?>
        <!-- Allows you to pick a sorting type -->
        <form action="" method="POST">
            <input type='hidden' name='action' value='showProductsA'> 
            <input type='submit' value='Sort Alphabetical'>
        </form>

        <form action="" method="POST">
            <input type='hidden' name='action' value='showProducts'> 
            <input type='submit' value='Sort Normally'>
        </form>


    <?php
    // Echo header 
    echo("<h2> Our Products");

    //For Every Item In Our Database
    foreach($products as $item)
    {
        // This Displays Its Info
        echo("
        <div class='itemHolder'>
            <h3> $item[1] <h3>
            <h4> $item[2] </h4>
            <p> $item[3] </p>
            <img class='itemIcon' src='data/Images/$item[4]'>
            <a href='?id=$item[0]'> View </a>
            <hr>
        </div>
        ");
    }

    ?>

    <?php

    // Start Of The Select Boxes With The Item Names
    echo("<form action='' method='POST'> <input type='hidden' name='action' value='displayCart'> <br> <input type='submit' value='Show Cart'></form>");
?>