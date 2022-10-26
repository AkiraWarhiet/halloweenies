<div id="nav">
    <?php
        if ($action != "displayCart") {
            include "order_by.php";
        }

    ?>
                
    <form action='' method='POST'> 
        <input type='hidden' name='action' value='displayCart'> 
        <br> 
        <input class='linkButton' id='displayCart'  type='submit' value='Show Cart'>
    </form>

    <form action='' method='POST'> 
        <input type='hidden' name='action' value='displayProducts'> 
        <br> 
        <input class='linkButton' id='allProducts'  type='submit' value='All Products'>
    </form>
    <br>
</div>