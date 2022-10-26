
        <!-- Allows you to pick a sorting type -->
    <?php
    include "navbar.php";
    // Echo header 

    echo("<div id='products'> <h2> Our Products </h2>");

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
        </div>
        ");
    }
?>