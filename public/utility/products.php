<?php

    function makeProducts($products){
    
        for($i = 0; $i < sizeof($products); $i++) {?>
        <!-- <div> -->
         <div class="inner-sample-grid-display-products">
             <div class="compare">
                 <input type="checkbox" name="compare" id="compare" style="margin-left: 10px">
                 <label for="compare">Compare</label>
             </div>
            <div class="sample-grid-display-products-img">
                    <img src="<?php echo $products[$i]["img"] ?>" alt="<?php $products[$i]["alt"] ?>">
            </div>
            <div class="sample-grid-display-products-description">
                <p class="product-title"><?php echo $products[$i]["p1"] ?></p>
                <p><?php echo $products[$i]["p2"] ?></p>
                <p><?php echo $products[$i]["p3"] ?></p>
            </div>
            <div class="product-details">
                <div >
                    <i class="fab fa-windows" style="margin-left: 5px; margin-right: 5px; "></i>
                    <p style="display:inline;"><?php echo $products[$i]["p4"] ?></p> 
                </div>
                <div>
                    <i class="fas fa-photo-video" style="margin-left: 5px; margin-right: 5px;"></i>
                    <p style="display:inline;"><?php echo $products[$i]["p5"] ?></p>
                </div>
                <div>
                    <i class="fas fa-memory" style="margin-left: 5px; margin-right: 5px;"></i>
                    <p style="display:inline;"></p><?php echo $products[$i]["p6"] ?></p>
                </div>
                <div>
                    <i class="fas fa-hdd" style="margin-left: 5px; margin-right: 5px;"></i>
                    <p style="display:inline;"><?php echo $products[$i]["p7"] ?></p>

                </div>
                <div>
                    <i class="fas fa-laptop" style="margin-left: 5px; margin-right: 5px;"></i>
                    <p style="display:inline;"><?php echo $products[$i]["p8"] ?></p>
                </div>
                <div>
                    <i class="fas fa-weight" style="margin-left: 5px; margin-right: 5px;"></i>
                     <p style="display:inline;"><?php echo $products[$i]["p9"] ?></p>
                </div>
                           
            </div>
            <a href="javascript:void(0)" class="show-details"></a>
            <div class="add-to-cart-btn">
                <button >Add To Cart</button>
            </div>
         </div>     
        <!-- </div> -->
<?php
}
}
?>