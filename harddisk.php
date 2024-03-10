<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hard disk</title>
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
            <h3 class="font-weight-bold">Hard Disk</h3>
            <hr>
            <p>Here you can check out our new products with fair price on Craft PC.</p>
        </div>
        <div class="row mx-auto container">
            <!--first part-->
            <!--first-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/8b00cc4f8a564353a51c922507c24fbe.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Caviar Black 3.5 SATA II HDD</h5>
                <h4 class="p-price"> PKR 4,266</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/17f650eee0d6273b858510a724a3dbc1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate BarraCuda 3.5 HDD</h5>
                <h4 class="p-price"> PKR 10,416</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/55b8f09388a5b47372694be5e6200f99.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate Desktop 1000GB</h5>
                <h4 class="p-price"> PKR 11,000</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/7416787a1ac987dc46121db177508029.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Black 4TB</h5>
                <h4 class="p-price"> PKR 58,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--Second part-->
            <!--first-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/bbf230214786be76008353b176204a29.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Caviar Black SATA III 6TB harddisk</h5>
                <h4 class="p-price"> PKR 62,883</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/d4fad3756c1fbedd67b32236e08bbc99.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Blue PC Hard Drive 500GB</h5>
                <h4 class="p-price"> PKR 13,499</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/d73b47cc5f50af3a3477c74aaa2fcd0a.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">HITACHI 0S03364 DESKSTAR 4TB</h5>
                <h4 class="p-price"> PKR 19,720</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/f7db628c6e9338194cf72c5743d0d14e.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Toshiba MQ01ABD Series 1TB</h5>
                <h4 class="p-price"> PKR 8,348</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third part-->
            <!--first-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/f92e30278cfa4790e7ebb10a7ae07514.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Black 3.5-Inch </h5>
                <h4 class="p-price"> PKR 58,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (4).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD Blue SATA Hard Disk 4TB</h5>
                <h4 class="p-price"> PKR 13,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (5).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD 1000 Hard Drive 1TB</h5>
                <h4 class="p-price"> PKR 7,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (1).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">PC Hard Drive 3TB</h5>
                <h4 class="p-price"> PKR 26,725</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth part-->
            <!--first-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (7).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Westren Digital WD1000 Hard Drive 6TB</h5>
                <h4 class="p-price"> PKR 33,000</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (8).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD SATA Hard Drive 1TB</h5>
                <h4 class="p-price"> PKR 12,000</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (9).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD SATA Hard Drive 6TB</h5>
                <h4 class="p-price"> PKR 36,000</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (10).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">WD SATA Hard Drive 3 TB</h5>
                <h4 class="p-price"> PKR 16,755</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--Fifth part-->
            <!--first-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (11).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate 500GB SATA 3.5Inch</h5>
                <h4 class="p-price"> PKR 16,500</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (12).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate SATA 3.5 Hard Drive 4TB</h5>
                <h4 class="p-price"> PKR 25,199</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (13).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate SATA 3.5 Hard Drive 1TB</h5>
                <h4 class="p-price"> PKR 8,200</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div onclick="window.location.href='s2product1.html'" ; class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="accessories/harddisk/images (14).jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h5 class="p-name">Seagate Desktop HDD 1000GB</h5>
                <h4 class="p-price"> PKR 7,899</h4>
                <button class="buy-btn">Buy Now</button>
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
</body>

</html>