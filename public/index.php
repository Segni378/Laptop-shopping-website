<?php include 'utility/Filters.php'?>
<?php include 'utility/products.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop easily with us!😊</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="asset/js/script.js" defer></script>
</head>
    <body>
        <!-- Hero Section -->
        <div class = "home-page-hero-section"></div>
        <!-- Navigation -->
        <div class="nav"></div>

        <!-- Main body -->

        <main>

            <div class = "cat-content-container">
                <div class = "inner-cat-content-container">
                    <div class = "cat-nav-filter-options">
                        <div class = "cat-nav-header-filter-title">
                            <span>Filter Results</span>
                        </div>
                        <?php
                                $filterContent = array();
                                $filterContent = [
                                        [
                                            ["title" => "Price", "name" => "80000-or-more", "labelContent" => "₹ 80, 000 or more", "id" => "80000-or-more"],
                                            ["name" => "70000-800000", "labelContent" => "₹ 70000 - ₹ 800000", "id" => "70000-800000"],
                                            ["name" => "60000-700000", "labelContent" => "₹ 60,000 - ₹70,0000", "id" => "60000-70000"],
                                            ["name" => "50000-60000", "labelContent" => "₹ 50,000 - ₹60,0000", "id" => "50000-60000"]
                                        ],
                                        [
                                            ["title" => "Brand","name" => "DELL", "labelContent" => "DELL", "id"=>"DELL"],
                                            ["name" => "HP", "labelContent" => "HP", "id" => "HP"],  
                                            ["name" => "LENOVO", "labelContent" => "LENOVO", "id" => "LENOVO"],  
                                            ["name" => "ACER", "labelContent" => "ACER", "id" => "ACER"],  
                                        ],
                                        [
                                            ["title" => "Processor", "name" => "AMD", "labelContent" => "AMD", "id" => "AMD"],
                                            ["name" => "core-i3", "labelContent" => "Core i3", "id" => "core-i3"],
                                            ["name" => "core-i5", "labelContent" => "Core i5", "id" => "core-i5"],
                                            ["name" => "core-i7", "labelContent" => "Core i7", "id" => "core-i7"],
                                        ],
                                        [
                                            ["title" => "Processor Generation","name" => "10th-gen", "labelContent" => "10th Generation", "id" => "10th-gen"],
                                            ["name" => "11th-gen", "labelContent" => "11th Generation", "id" => "11th-gen"],
                                            ["name" => "7th-gen", "labelContent" => "7th Generation", "id" => "7th-gen"],
                                        ],
                                        [
                                            ["title" => "System Memory", "name" => "16-gb", "labelContent" => "16 GB", "id" => "16-gb"],
                                            ["name" => "32-gb", "labelContent" => "32 GB", "id" => "32-gb"],
                                            ["name" => "4-gb", "labelContent" => "4 GB", "id" => "4-gb"],
                                            ["name" => "16-gb", "labelContent" => "16 GB", "id" => "4-gb"],
                                        ]
                                    ];
                                makeFilters($filterContent);
                            ?>
                                
                    </div>
                    <div class = "cat-side-content reveal-slowly">
                        <div class="cat-shop-by-brand-container">
                            <div class = "cat-side-content-title">
                                <span>Top Brands</span>
                            </div>
                            <div class = "cat-shop-by-brand">
                                <div class = "cat-available-brands">
                                    <a href="#" id="brand-4">
                                        <div class = "cat-brand-img" >
                                        <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/Top_Brands_HP.jpg" alt="HP Laptop">
                                        </div>
                                    </a>
                                    <a href="#" id="brand-3" >
                                        <div class = "cat-brand-img" >
                                        <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/Top_Brands_Dell.jpg" alt="Dell Laptop">
                                        </div>
                                    </a>
                                    <a href="#" id="brand-2" >
                                        <div class = "cat-brand-img" id="brand-2">
                                        <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/Top_Brands_Lenovo.jpg" alt="Lenovo Laptop">
                                        </div>
                                    </a>
                                    <a href="#" id="brand-1">
                                        <div class = "cat-brand-img" id="brand-1">
                                        <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/Top_Brands_Acer.jpg" alt="Acer Laptop">
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cat-shop-by-size-container">
                            <div class = "cat-side-content-title">
                                <span>Shop By Size</span>
                            </div>
                            <div class = "cat-shop-by-size">
                                <div class = "cat-available-size">
                                    <a href="#" id="size-4">
                                        <div class = "cat-shop-by-size-img">
                                        <img src="https://cdn.shopclues.com/images/banners/1Web-Screen_Sizes_Less_13.3_Inch.jpg" alt="Less than 13.3 inch">
                                    </div>
                                    <span>Less than 13.3 inch</span>
                                </a>
                                    <a href="#" id="size-3">
                                        <div class = "cat-shop-by-size-img">
                                        <img src="https://cdn.shopclues.com/images/banners/2Web-Screen_Sizes_13.3-Inch.jpg" alt="13.3 inch">
                                        </div>
                                    <span>13.3 inch </span>
                                    </a>
                                    <a href="#" id="size-2">
                                        <div class = "cat-shop-by-size-img">
                                        <img src="https://cdn.shopclues.com/images/banners/2Web-Screen_Sizes_13.3-Inch.jpg" alt="14 inch">
                                    </div>
                                    <span>14 inch </span>
                                    </a>
                                    <a href="#" id="size-1">
                                    <div class = "cat-shop-by-size-img">
                                        <img src="https://cdn.shopclues.com/images/banners/2Web-Screen_Sizes_13.3-Inch.jpg" alt="15.6 inch">
                                    </div>
                                    <span>15.6 inch</inch>
                                    </a>
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="cat-shop-by-price-container reveal-slowly">
                <div class = "cat-side-content-title">
                    <span>Shop By Price</span>
                </div>
                <div class="cat-shop-by-price" >
                    <div class = "cat-price-ranges">
                        <a href="#" class="content content-1"><div class = "cat-price">₹ 80, 000 or more</div></a>
                        <a href="#" class="content content-2"><div class = "cat-price">₹ 70,000 - ₹ 80,0000</div></a>
                        <a href="#" class="content content-3"><div class = "cat-price">₹ 60,000 - ₹70,0000</div></a>
                        <a href="#" class="content content-4"><div class = "cat-price">₹ 50,000 - ₹60,000</div></a>
                    </div>
                </div>
            </div>
            <div class="cat-shop-by-processor-container reveal-slowly">
                <div class = "cat-side-content-title">
                    <span>Shop By Processor</span>
                </div>
                <div class="cat-shop-by-processor">
                    <div class = "cat-available-processors">
                        <a href="#" class = "content content-1"><div class = "cat-shop-by-processor-img">
                            <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/ShopByProcessor_intelcoreI3.jpg" alt="Intel core i3">
                        </div>
                            <span>Intel core i3</span>
                        </a>
                        <a href="#" class = "content content-2"><div class = "cat-shop-by-processor-img">
                            <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/ShopByProcessor_intelcore_i5.jpg" alt="Intel core i5">
                        </div>
                            <span>Intel core i5</span>
                        </a>
                        <a href="#" class = "content content-3" ><div class = "cat-shop-by-processor-img">
                            <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/ShopByProcessor_intelCorei7.jpg" alt="Intel core i7">
                        </div>
                            <span>Intel core i7</span>
                        </a>
                        <a href="#" class = "content content-4"><div class = "cat-shop-by-processor-img">
                            <img src="https://cdn.shopclues.com/images/banners/Work/wired_laptop_clp/ShopByProcessor_ADM.jpg" alt="AMD">
                        </div>
                            <span>AMD</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="middle-page-banner-container reveal-slowly">
        
                    <div class="middle-page-banner content content-3" ></div>
                    <div class="banner-img-description content content-3">
                        <p class = "banner-description-title content content-1">High Performance Laptop</p>
                        <p class="banner-description content content-1">Powered by Intel Core i5 & i7, these Laptops are <br>
                        made to do more in every moment.</p>
                        <button class = "banner-shop-now-btn content content-1">Shop Now</button>
                    </div>
            </div>
            <div class="middle-page-banner-container middle-page-banner-container-2 reveal-slowly">
                <div class="banner-img-description-2 content content-3">
                    <p class = "banner-description-title content content-2">High Performance Laptop</p>
                    <p class="banner-description content content-2">Powered by Intel Core i5 & i7, these Laptops are <br>
                    made to do more in every moment.</p>
                    <button class = "banner-shop-now-btn-2 content content-2">Shop Now</button>
                </div>
                <div class="middle-page-banner-2 content content-3"></div>
            </div>
            <div class="middle-page-banner-container reveal-slowly">
                <div class="middle-page-banner-3 content content-3"></div>
                <div class="banner-img-description-3 content content-3">
                    <p class = "banner-description-title content content-3">High Performance Laptop</p>
                    <p class="banner-description content content-3">Powered by Intel Core i5 & i7, these Laptops are <br>
                    made to do more in every moment.</p>
                    <button class = "banner-shop-now-btn-3 content content-3">Shop Now</button>
                </div>
            </div>
            <div style="padding : 20px;" class="reveal-slowly">
                <div class="sample-grid-display-products " style="background-color: #F3F3F3;">
                
                        <?php
                            $productInfo = array();
                            $productInfo = [
                                ["img"=> "https://i.dell.com/sites/csimages/Banner_Imagery/all/in-dhs-rday-2022-vostro-15-3510-laptop.png", "alt" => "", "p1" => "New Vostro 3510 Laptop", "p2" => "₹ 60,690","p3" => "11th Generation Intel® Core™ i5-1135G7 Processor", "p4" => "Windows 11 Home", "p5" => "Intel® UHD Graphics with shared graphics memory", "p6" => "8GB, 8GBx1, DDR4, 2666MHz", "p7" => "256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5\" SATA Hard Drive (Storage)", "p8" => "39.6-cm. display", "p9" => "Starting at 1.69 kg", "class" => "content-1"],
                                ["img"=> "https://i.dell.com/sites/csimages/Banner_Imagery/en/Indhs-republic-event-vostro-14-3401-laptop-D552126WIN9DE.png", "alt" => "", "p1" => "New Vostro 3510 Laptop", "p2" => "₹ 60,690","p3" => "11th Generation Intel® Core™ i5-1135G7 Processor", "p4" => "Windows 11 Home", "p5" => "Intel® UHD Graphics with shared graphics memory", "p6" => "8GB, 8GBx1, DDR4, 2666MHz", "p7" => "256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5\" SATA Hard Drive (Storage)", "p8" => "39.6-cm. display", "p9" => "Starting at 1.69 kg", "class" => "content-2"],
                                ["img"=> "https://i.dell.com/sites/csimages/Banner_Imagery/all/in-dhs-rday-2022-inspiron-15-5510-laptop.png", "alt" => "", "p1" => "New Vostro 3510 Laptop", "p2" => "₹ 60,690","p3" => "11th Generation Intel® Core™ i5-1135G7 Processor", "p4" => "Windows 11 Home", "p5" => "Intel® UHD Graphics with shared graphics memory", "p6" => "8GB, 8GBx1, DDR4, 2666MHz", "p7" => "256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5\" SATA Hard Drive (Storage)", "p8" => "39.6-cm. display", "p9" => "Starting at 1.69 kg", "class" => "content-3"],
                                ["img"=> "https://i.dell.com/sites/csimages/Banner_Imagery/all/in-dhs-rday-2022-inspiron-14-5410-laptop.png", "alt" => "", "p1" => "New Vostro 3510 Laptop", "p2" => "₹ 60,690","p3" => "11th Generation Intel® Core™ i5-1135G7 Processor", "p4" => "Windows 11 Home", "p5" => "Intel® UHD Graphics with shared graphics memory", "p6" => "8GB, 8GBx1, DDR4, 2666MHz", "p7" => "256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5\" SATA Hard Drive (Storage)", "p8" => "39.6-cm. display", "p9" => "Starting at 1.69 kg", "class" => "content-4"],
                            ];
                            
                            makeProducts($productInfo);
                        ?>                
                    
                </div>
            </div> 
            <?php include 'utility/footer.php' ?>
        </main>
    </body>
</html>