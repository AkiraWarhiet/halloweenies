
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
            <form action='' method='POST'>
                <input type='hidden' name='action' value='$item[0]'> 
                <input type='submit' value='View'>
            </form>
        </div>
        ");
    }

    echo("</div>");
?>