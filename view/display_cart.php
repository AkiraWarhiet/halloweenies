<?php

include "navbar.php";
// This starts off the html formatting and the select statement
echo("<form method='post' action='?action=add'> <select name='productkey'>");

    // For Every Product In The Datbase
    foreach($products as $item) {
        // Supply An Option
        echo("<option value='$item[0]'>
              $item[1]
        </option>");
    }
    // This Closes The Select and Adds Our Hidden Input and Starts The Next Select
    echo("</select> <select name='itemqty'>");

    for($i = 1; $i <= 10; $i++) {
        echo("<option value='$i'}?> $i </option> ");
    }
    // End The Select and Create The Submit Buton
    echo("</select> <input type='hidden' name='action' value='add'> <br> <input type='submit' value='Add Item(s)'> </form>");

    ?>
    <!-- This gives us a form for the clear so it goes in a post and not a get -->
    <form action="" method="POST">
        <input type='hidden' name='action' value='clear'> 
        <input type='submit' value='Clear Cart'>
    </form>
    <?php

    // Predefining subtotals as an array
    $subtotals = array();

    // For each cart item in the session...
    foreach($_SESSION['theCart'] as $key => $qty) {

        // Dont include the naming
        if ($key != "theCart") {

            // Go ythrough every product until you find the matching instance and then calulate the subtotal
            foreach($products as $product) {
                $subtotals[$key] = getSubtotal($qty, $product[3]);

                if($key == $product[0]) {
                    echo("<h3> ( $$product[3] )   $product[1]  x $qty </h3>");
                    echo("<h4 class='subtotal'> Subtotal: $$subtotals[$key] </h4>");
                }
            }
        }
    }

    // Define total by adding the subtotals
    $total = getTotal($subtotals);

    // Echo total
    echo("<h1> $$total </h1>")


?>