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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <script src="https://kit.fontawesome.com/a1aef83858.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <script src="asset/js/script.js" defer></script>
</head>
<body>

<div class="home-page-hero-section">
    <div class="promotion-section">
        <div class="hero-text">
            <h2>Heeeeeeeeeeee</h2>
        </div>
        <!-- <div class="hero-text">
            <h2>Hayeeesso</h2>
        </div> -->
    </div>
    <div class="heroSlides">
            <img src="./image/image4.jpg">
    </div>
    <div class="heroSlides">
            <img src="./image/image1.jpg">
    </div>
</div>

    <!-- <div class="heroSlides">
            <img src="./image/image6.webp">
        <div class="hero-text">
            <h2>Hayilunna taaffasa</h2>
        </div>
    </div>
    <div class="heroSlides">
            <img src="./image/image1.jpg">
        <div class="hero-text">
            <h2>Hayeeesso</h2>
        </div>
    </div> -->
</div>

    <!-- Navigation -->
  <div id="navbar">
        <div class="home_nav">
            <div class="logo-home-page-header-search-button">

                <img class="logo" src="image/home-page-logo.jpg">
                <button class= "home-page-header-search-button" type="submit">
                    <input class="search-1" type="text" placeholder="Search.." name="Search">
                    <i class="fas fa-search"></i>
                </button>
            </div>
                <div class="both_cart_sign">

                    <div class="home-page-header-cart">
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <div class="home_nav_registeration">
                        <button id="open_here">sign up</button>
                        <div class="registration_nav">
                            <div class="registration_form_box">
                                <div class="registration_form_nav">
                                    <div class="close">+</div>
                                    <div class="button-box">
                                        <div id="btn"></div>
                                        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                                    </div>
                                    <div class="social-icons">
                                        <img src="./image/home-page-logo.jpg">
                                        <img src="./image/home-page-logo.jpg">
                                        <img src="./image/home-page-logo.jpg">
                                    </div>
                                    <form id="login" class="input-group">
                                        <input type="text" class="input-field" placeholder="User Id" required>
                                        <input type="text" class="input-field" placeholder="password" required>
                                        <input type="checkbox" class="check-box"><span>remember password?</span>
                                        <button type="submit" class="Submit-btn"> Log In</button>
                                    </form>
                                    <form id="register"class="input-group">
                                        <input type="text" class="input-field" placeholder="Name" required>
                                        <input type="text" class="input-field" placeholder="Surname" required>
                                        <input type="email" class="input-field" placeholder="Email Id" required>
                                        <input type="text" class="input-field" placeholder="password" required>
                                        <input type="text" class="input-field" placeholder="Confirm password" required>
                                        <input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
                                        <button type="submit" class="Submit-btn"> Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    <!-- Hero Section -->

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
                                    <a href="./utility/Single_page.php" id="brand-4">
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

                </div>
            </div>

        </main>
        <div class = "spin-image-container">
            <div class="spin-image-responsive">
                <div class="cloudimage-360" data-folder="image/36 laptop images for spin/"
                data-filename-x="kutr{index}.png" data-amount-x="36" data-magnifier="2">
                </div>
            </div>
            <div class="spin-image-description">
                <p> spin 360 degree to view all the faces and
                    click over the magnifier glass to zoom in </p>
            </div>
      </div>

      <div class="carousel-slider-container">


      <div class="col-lg-12">
      <div class="slider-content">
        <!----------------------------- item 1  ------------------------>
        <li class="item-a">
          <!--box-slider--------------->
              <div class="box">
              <!--img-box---------->
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="slide-img">
                <img src="image/laptop1.jpg" alt="1">
                <!--overlayer---------->
                <div class="overlay">
                <!--buy-btn------>
                <a href="#" class="buy-btnXX">Buy Now</a>
                </div>
              </div>
              <!--detail-box--------->
              <div class="detail-box">
              <!--type-------->
              <div class="type">
              <a href="#" class="for-description">Asus VivoBook X415
                           X415JA-EK562TS</a>
                  <span>35.56 cms (14")</span>
              </div>

              <!--price-------->
              <!-- <a href="#" class="price">₹50,990 </a> -->
               <!-- ------------------rating ------------------>
              <div class="thumb-content">
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
                 <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
              </div>

              </div>

              </div>
          </li>

 <!----------------------------- item 2    ------------------------>

<li class="item-b">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop12.jpg" alt="2">
        <!--overlayer---------->
        <div class="overlay">
        <!--buy-btn------>
        <a href="#" class="buy-btnXX">Buy Now</a>
        </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <a href="#" class="for-description">HP Pavilion Aero Laptop 13-be0190AU | HP Store India

         </a>
      <span>43.94 cms (17.3")</span>
      </div>
      <!--price-------->
      <!-- <a href="#" class="price">₹92,990</a> -->
       <!-- ------------------rating ------------------>
       <div class="thumb-content">
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <p class="item-price"><strike>₹57,990</strike> <b>₹60,990</b></p>
         <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
      </div>

      </div>

      </div>
  </li>

<!------------------------------item 3 --------------------------->
<li class="item-c">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop7.jpg" alt="7">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>
      <a href="#" class="buy-btnXX">Buy Now</a>
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <a href="#" class="for-description">Asus VivoBook M515 M515DA-BQ312TS</a>
      <span>39.62 cms (15.6")</span>
      </div>
      <!--price-------->
      <!-- <a href="#" class="price">₹33,990</a> -->

      <!-- ------------------rating ------------------>
      <div class="thumb-content">
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
         <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
      </div>

      </div>

      </div>
  </li>
<!-----------------------------item 4----------------------------->
<li class="item-d">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop2.jpg" alt="12">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>
      <a href="#" class="buy-btnXX">Buy Now</a>
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
        <!--type-------->
          <div class="type">
          <a href="#" class="for-description">ASUS ROG Zephyrus G14 GA401QH-HZ077TS</a>
          <span>35.56 cms (14")</span>
          </div>
        <!--price-------->
        <!-- <a href="#" class="price">₹90,990</a> -->

    <!-- ------------------rating ------------------>
          <div class="thumb-content">
            <div class="star-rating">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
            <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
          </div>

      </div>

      </div>
  </li>
<!---------------------------item 5----------------------------->
<li class="item-e">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop13.jpg" alt="13">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>
      <a href="#" class="buy-btnXX">Buy Now</a>
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <a href="#" class="for-description">Asus VivoBook X509
          X509FA-EJ311TS</a>
      <span>39.62 cms (15.6")</span>
      </div>
      <!--price-------->
      <!-- <a href="#" class="price">₹37,990</a> -->

       <!-- ------------------rating ------------------>
       <div class="thumb-content">
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
         <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
      </div>

      </div>

      </div>
  </li>
<!-----------------------------item 6----------------------------->
<li class="item-f">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop15.jpg" alt="15">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>
      <a href="#" class="buy-btnXX">Buy Now</a>
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <a href="#" class="for-description">ASUS TUF Dash F15
          FX516PM-AZ153TS</a>
      <span>39.62 cms (15.6")</span>
      </div>
      <!--price-------->
      <!-- <a href="#" class="price">₹1,28,990</a> -->

       <!-- ------------------rating ------------------>
       <div class="thumb-content">
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <!-- <div> -->
          <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
           <a href="#" class="button-for-Add-To-cart">Add to Cart</a>

        <!-- </div> -->
      </div>

      </div>

      </div>
  </li>
  <!-------------------------------item 7 ------------------------------->

  <li class="item-g">
      <!--box-slider--------------->
          <div class="box">
          <!--img-box---------->
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="slide-img">
            <img src="image/laptop17.jpg" alt="17">
          <!--overlayer---------->
          <div class="overlay">
          <!--buy-btn------>
          <a href="#" class="buy-btnXX">Buy Now</a>
          </div>
          </div>
          <!--detail-box--------->
          <div class="detail-box">
          <!--type-------->
          <div class="type">
          <a href="#" class="for-description">ASUS ZenBook Flip 13
                  UX363EA-HP501TS</a>
          <span>33.78 cms (13.3")</span>
          </div>
          <!--price-------->
          <!-- <a href="#" class="price">₹94,990</a> -->

           <!-- ------------------rating ------------------>
           <div class="thumb-content">
            <div class="star-rating">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
             <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
          </div>

          <!-- </div> -->

          </div>
      </li>

      <!-------------------------------item 8 -------------------------->

<li class="item-h">
  <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
      <div class="slide-img">
        <img src="image/laptop18.jpg" alt="18">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>
      <a href="#" class="buy-btnXX">Buy Now</a>
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <a href="#" class="for-description">ASUS VivoBook Ultra
          K14 KM413UA-EB702TS</a>
      <span>35.56 cms (14")</span>
      </div>
      <!--price-------->
      <!-- <a href="#" class="price">₹67,990</a> -->

       <!-- ------------------rating ------------------>
       <div class="thumb-content">
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <p class="item-price"><strike>₹55,990</strike> <b>₹50,990</b></p>
         <a href="#" class="button-for-Add-To-cart">Add to Cart</a>
      </div>

      </div>

      </div>
  </li>


        </div>
      </div>

      <div class="arrow_prev">
          <span><i class="fa-solid fa-angles-left"></i></span>
         </div>
         <div class="arrow_next">
           <span><i class="fa-solid fa-angles-right"></i></span>
          </div>
    </div>

  </div>
    <!-- </section> -->

      <?php include 'utility/footer.php' ?>

      <!-- Carousel resources -->
        <script
                  src="https://code.jquery.com/jquery-3.6.0.min.js"
                  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            $('.slider-content').slick({
       prevArrow: '.arrow_prev',
       nextArrow: '.arrow_next',
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });
        </script>
        <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2.7.4/js-cloudimage-360-view.min.js"></script>
    <script>
      $(document).ready(function(){
          $(".wish-icon i").click(function(){
              $(this).toggleClass("fa-heart fa-heart-o");
            });
      });
      </script>
    </body>
</html>
