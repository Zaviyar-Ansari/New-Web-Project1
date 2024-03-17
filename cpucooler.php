<?php
@include 'config.php';

$message = array(); // Initialize an empty array for messages

// Check if the form was submitted
if(isset($_POST['add_to_cart'])){
    // Form submission logic
    $product_id = $_POST['product_id']; // Get the product ID from the form

    // Fetch product data based on the provided product ID
    $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$product_id'");

    if(mysqli_num_rows($select_product) > 0){
        $product_data = mysqli_fetch_assoc($select_product);

        $product_name = $product_data['name'];
        $product_price = $product_data['price'];
        $product_image = $product_data['image'];
        $product_quantity = 1;

        // Check if the product is already in the cart
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

        if(mysqli_num_rows($select_cart) > 0){
            $message[] = 'Product already added to cart';
        } else {
            // Insert the product into the cart table
            $insert_product = mysqli_query($conn, "INSERT INTO `cart` (name, price, image, quantity) VALUES ('$product_name', '$product_price', '$product_image', '$product_quantity')");
            if($insert_product){
                $message[] = 'Product added to cart successfully';

                // If you want to store the data in another table, you can do so here
                // For example, let's say you have a table named 'orders' to store order details
                $insert_order = mysqli_query($conn, "INSERT INTO `orders` (product_id, product_name, product_price, product_image, quantity) VALUES ('$product_id', '$product_name', '$product_price', '$product_image', '$product_quantity')");
                if($insert_order){
                    $message[] = 'Order details stored successfully';
                } else {
                    $message[] = 'Error storing order details: ' . mysqli_error($conn); // Display MySQL error message
                }
            } else {
                $message[] = 'Error adding product to cart: ' . mysqli_error($conn); // Display MySQL error message
            }
        }
        
        // Redirect to the same page to prevent form resubmission
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } else {
        $message[] = 'Product not found';
    }
}

// Display messages
if(isset($message)){
    foreach($message as $msg){
        echo '<div class="message">' . $msg . '</div>';
    }
}
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPU Cooling Fan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style1.css">
    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
        
        #featured>div.row.mx-auto.container>nav>ul>li.page-item.active>a {
            background-color: black;
        }
        
        #featured>div.row.mx-auto.container>nav>ul>li:nth-child(n):hover>a {
            background-color: coral;
            color: white;
        }
        
        .pagination a {
            color: black;
        }
    </style>
</head>

<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-4 fixed-top">
        <div class="container">
            <img src="logoimg/logo.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa-solid fa-bars"></i></span>
</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index1.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogpage.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUspage.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactuspage.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <i class="fa-solid fa-bag-shopping"></i> >
                        <a href="home.php"><i class="fa-regular fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Featured section of shop page-->
    <section id="featured" class="my-5 py-5">
        <div class="container  mt-5 py5">
            <h3 class="font-weight-bold">CPU Cooler</h3>
            <hr>
            <p>Here you can check out our new products with fair price on Craft PC.</p>
        </div>
        <div class="row mx-auto container">
            <!--first part-->
            <!--first-->
            <div onclick="window.location.href='cpucoller1.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/03a293d508ebcf6e8b412a5bda212834.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">NZXT T120 Black CPU Air Cooler</h5>
                <h4 class="p-price"> PKR 17,130</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="213"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--second-->
            <div onclick="window.location.href='cpucoller2.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/7b0f63c7616f6360c004f3e573a74f4f.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cryoring H7 Tower Cooling Fan</h5>
                <h4 class="p-price"> PKR 28,507</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="214"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third-->
            <div onclick="window.location.href='cpucoller3.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/629c65c1c9fde98112d87cffc195d912.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">ATC700 CPU Air Cooler</h5>
                <h4 class="p-price"> PKR 24,094</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="215"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth-->
            <div onclick="window.location.href='cpucoller4.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/64dbfe2a9eb0373711622f185974bb24.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">DEEPCOOL GAMMAXX 400 CPU Cooler 4 Heatpipes 120mm</h5>
                <h4 class="p-price"> PKR 13,684</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="216"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--Second part-->
            <!--first-->
            <div onclick="window.location.href='cpucoller5.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/7cf8c40de49522b853519e320fc16bbf.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">ID-COOLING SE-914-XT Black/White Cooler 131mm</h5>
                <h4 class="p-price"> PKR 9,975</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="217"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--second-->
            <div onclick="window.location.href='cpucoller6.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/8b90e310acc42322dc3f475a1abb3be3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">cryoring CPU Cooler Single Fan Side Flow AMD, H7 V2</h5>
                <h4 class="p-price"> PKR 10,352</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="218"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third-->
            <div onclick="window.location.href='cpucoller7.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/9c47195d65b628c9eb26e53dc3fc517c.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Artic Freezer 34 eSport DUO|Tower CPU Cooler</h5>
                <h4 class="p-price"> PKR 14,626</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="219"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth-->
            <div onclick="window.location.href='cpucoller8.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/5634bd07dba4f5cc5ea8f1b0e97c8ab7.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cooler Master V8 GTS</h5>
                <h4 class="p-price"> PKR 23,499</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="220"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third part-->
            <!--first-->
            <div onclick="window.location.href='cpucoller9.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/b0809daf785ac2ef468c336c2b3c5bfb.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Corsair A500 Dual Fan CPU Cooler</h5>
                <h4 class="p-price"> PKR 28,507</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="221"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--second-->
            <div onclick="window.location.href='cpucoller10.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/cc7ed87fe88617e4a1e1619d876c41da.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cooler MasterAir Maker 8</h5>
                <h4 class="p-price"> PKR 38,199</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="222"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third-->
            <div onclick="window.location.href='cpucoller11.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/c51222ad7324f120bce4842dfbe09597.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Hyper 212 RGB Black Edition CPU Air Cooler</h5>
                <h4 class="p-price"> PKR 25,587 </h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="223"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth-->
            <div onclick="window.location.href='cpucoller12.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/deepcool-ak400-cooler-price-in-pakistan-4-19643-838230-190923051634788.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">DeepCool AK400</h5>
                <h4 class="p-price"> PKR 9,975</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="224"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth part-->
            <!--first-->
            <div onclick="window.location.href='cpucoller13.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/f9fa8c4490c42723e30462f6cc922b54.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cooler Master Hyper TX3 EVO</h5>
                <h4 class="p-price"> PKR 31,113</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="225"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--second-->
            <div onclick="window.location.href='cpucoller14.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/f68688cd326ea83a79110751a20aca72.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cpu Cooler 4 Cobre Heatpipe Cooling Fan </h5>
                <h4 class="p-price"> PKR 7,697</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="226"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third-->
            <div onclick="window.location.href='cpucoller15.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/images (15).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cooler Master Standard Cooler i50</h5>
                <h4 class="p-price"> PKR 3,521</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="227"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth-->
            <div onclick="window.location.href='cpucoller16.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/images (16).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Corsair H55 RGB 120mm Liquid CPU Cooler</h5>
                <h4 class="p-price"> PKR 21,600</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="228"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--Fifth part-->
            <!--first-->
            <div onclick="window.location.href='cpucoller17.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/images (17).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">EKL 21923 EKL LP CPU Cooler</h5>
                <h4 class="p-price"> PKR 3,853</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="229"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--second-->
            <div onclick="window.location.href='cpucoller18.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/images (18).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">DeepCool AK400 CPU Cooler</h5>
                <h4 class="p-price"> PKR 7,499</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="230"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--third-->
            <div onclick="window.location.href='cpucoller19.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/images (19).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Alseye EL120 Cooling Kit CPU Cooler</h5>
                <h4 class="p-price"> PKR 10,000</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="231"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
            <!--forth-->
            <div onclick="window.location.href='cpucoller20.php'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/cpucooler/2904c7457dc17ca32b904a173a218db9.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Cool Master V8 GTS 3Tower Heatsink</h5>
                <h4 class="p-price"> PKR 56,430</h4>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="232"> <!-- Set the product ID -->
                    <input type="submit" class="buy-btn" value="Add to Cart" name="add_to_cart">
                    </form>
            </div>
        </div>

    </section>
    <!--Footer-->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="logoimg/logo.png" alt="">
                <p>Elevate your PC experience with Craft PC. Discover prebuilt PCs, build your custom rig, and shop accessories for the ultimate setup. Your ideal computing world is just a click away!</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Featuted</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#">Pre build</a></li>
                    <li><a href="#">Custom build</a></li>
                    <li><a href="#">Acessories</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>123 STREET NAEM, CITY, US</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(+92)320-8433088</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>zawiyaransari5@gmail.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img1.jpeg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img2.jpeg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img3.jpeg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img4.jpeg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img5.jpeg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="Instaimg\img6.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="Paymentimg/mastecard.png" alt="">
                    <img src="Paymentimg/jazz.png" alt="">
                    <img src="Paymentimg/banktransfer.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                    <p>Craft PC eCommerce © 2023. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>  
</body>

</html>