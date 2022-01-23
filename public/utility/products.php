<?php

    function makeProducts($products){
    
        for($i = 0; $i < sizeof($products); $i++) {?>
         <div class="inner-sample-grid-display-products">
             <div class="compare">
                 <input type="checkbox" name="compare" id="compare" style="margin-left: 10px">
                 <label for="compare">Compare</label>
             </div>
            <div class="sample-grid-display-products-img">
                    <img src="<?php echo $products[$i]["img"] ?>" alt="<?php $products[$i]["alt"] ?>">
            </div>
            <div class="sample-grid-display-products-description">
                <p><?php echo $products[$i]["p1"] ?></p>
                <p><?php echo $products[$i]["p2"] ?></p>
                <p><?php echo $products[$i]["p3"] ?></p>
            </div>
            <div class="product-details">
                <p><?php echo $products[$i]["p4"] ?></p> 
                <p><?php echo $products[$i]["p5"] ?></p>
                <p><?php echo $products[$i]["p6"] ?></p>
                <p><?php echo $products[$i]["p7"] ?></p>
                <p><?php echo $products[$i]["p8"] ?></p>
                <p><?php echo $products[$i]["p9"] ?></p>            
            </div>
            <a href="javascript:void(0)" class="show-details"></a>
            <div class="add-to-cart-btn">
                <button >Add To Cart</button>
            </div>
         </div>
<?php
}
}
?>