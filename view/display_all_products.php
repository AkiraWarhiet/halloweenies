
<?php
//Product Id,Product name, Product Dsc, Product Price, Product Image
    // Header At The Top
    echo("<h2> Our Products");

    //For Every Item In Our Database
    foreach($products as $item)
    {
        // This Displays Its Info
        echo("
        <div class='itemHolder'>
            <h3> $item[1] <h3>
            <h4> $item[3] </h4>
            <p> $item[2] </p>
            <img class='itemIcon' src='data/Images/$item[4]'>
            <hr>
        </div>
        ");
    }

    // Start Of The Select Boxes With The Item Names
    echo("<select name='productkey'>");

    // For Every Product In The Datbase
    foreach($products as $item) {
        // Supply An Option
        echo("<option value='$item[0]'>
              $item[1]
        </option>");
    }
    // This Closes The Select and Adds Our Hidden Input and Starts The Next Select
    echo("</select> <br> <input type='hidden' name='action' value='add'>  <select name='itemqty'>");

    // Give The Option to buy Up too 10 of the product
    for($i = 1; $i <= 10; $i++) {
        echo("<option value='$i'}?> $i </option> ");
    }
    // End The Select and Create The Submit Buton
    echo("</select><br> <input type='submit' value='showCart'>");
?>