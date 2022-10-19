
<?php
//Product Id,
//Product name
// Product Dsc
// Product Price
// Product Image
    foreach($item in $products)
    {
        echo("
        <div class='itemHolder'>
            <h3> $item[1] <h3>
            <h4> $item[3] </h4>
            <p> $item[2] </p>
            <img class='itemIcon' src='Images/$item[4]'>
        </div>
        ")
    }



?>