<?php
    include "navbar.php";
    $product = getProduct($action);
?>

<div id="individual" class="itemHolder">
    <form action="index.php" method="post">
        <input type="text" name="productName" value=<?= $product[1]?>>
        <input type="text" name="productPrice" value=<?= $product[3]?>>
        <input type="text" name="productDesc" value=<?= $product[2]?>>
        <input type="text" name="productImg" value=<?= $product[4]?>>

        <input type="hidden" type="text" name="pID" value="">
        <input type="submit" value="Save Changes">
    </form>
</div>