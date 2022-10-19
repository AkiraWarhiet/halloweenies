
<?php
//Product Id,
//Product name
// Product Dsc
// Product Price
// Product Image
    echo("<h2> Our Products")
    foreach($item in $products)
    {
        echo("
        <div class='itemHolder'>
            <h3> $item[1] <h3>
            <h4> $item[3] </h4>
            <p> $item[2] </p>
            <img class='itemIcon' src='Images/$item[4]'>

            <form>


            </form action='.' method='post'>

            </form>
            <hr>
        </div>
        ")
    }

    echo("<select name='productkey'>");
    foreach($item in $products) {
        echo("<option value="$item[0]">
            <?php echo $item[1]; ?>
        </option>");
    }
    echo("</select> <br> <input type='hidden' name='action' value='add'>");
    

?>