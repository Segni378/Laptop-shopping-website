<?php
    
    function makeFilters($filterContent) {
                for($i = 0; $i < sizeof($filterContent); $i++){?>
                    <div class = "cat-nav-filter-option">
                        <legend class = "cat-nav-filter-title">
                                <span><?php echo $filterContent[$i][0]['title'] ?></span>
                                <a class = "toggle-arrow" href="javascript:void(0)"></a>
                        </legend>
                        <div class = "filter-content">
                            <ul>
                                <?php
                                for($j = 0; $j < sizeof($filterContent[$i]); $j++) {?>
                                    <li>
                                        <input type="checkbox" name='<?php $filterContent[$j]['name'] ?>' id='<?php $filterContent[$j]['id'] ?>'>
                                         <label for="<?php $filterContent[$i][$j]['name'] ?>"><?php echo $filterContent[$i][$j]['labelContent'] ?></label>
                                       
                                    </li>
                                <?php
                                }
                                ?>
                            </ul> 
                        </div>
                    </div>
<?php  
}                      
}
?>