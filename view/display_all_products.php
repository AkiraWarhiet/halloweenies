
<?php
//Product Id,Product name, Product Dsc, Product Price, Product Image
    // Header At The Top
    ?>
        <form action="" method="POST">
            <input type='hidden' name='action' value='showProductsA'> 
            <input type='submit' value='Sort Alphabetical'>
        </form>

        <form action="" method="POST">
            <input type='hidden' name='action' value='showProducts'> 
            <input type='submit' value='Sort Normally'>
        </form>


    <?php
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
    <!-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

        </div>
    </div> -->

    <?php

    // Start Of The Select Boxes With The Item Names
    echo("<form action='' method='POST'> <input type='hidden' name='action' value='displayCart'> <br> <input type='submit' value='Show Cart'></form>");
?>