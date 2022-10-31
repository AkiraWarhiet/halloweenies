<?php
   include "navbar.php";
    $product = getProduct($action);


?>


<div id="individual" class="itemHolder">
    <h3> <?php echo($product[1]); ?> </h3>
    <h2> <?php echo($product[3]); ?> </h2>
    <p> <?php echo($product[2]); ?> </p>
    <?php echo("<img class='itemIcon' src='data/Images/$product[4]'>") ?>


    <form action='' method='POST'> 
        <input type='hidden' name='editor' value='editItem'> 
        <input type='hidden' name='action' value='$product[0]'> 
        <br> 
        <input type='submit' value='Edit Item'>
    </form>

    
</div>