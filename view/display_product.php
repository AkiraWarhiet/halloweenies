<?php
   include "navbar.php";
    $product = getProduct($id);


?>


<div class="itemHolder">
    <h3> <?php echo($product[1]); ?> </h3>
    <h2> <?php echo($product[3]); ?> </h2>
    <p> <?php echo($product[2]); ?> </p>
    <?php echo("<img class='itemIcon' src='data/Images/$product[4]'>") ?>

</div>