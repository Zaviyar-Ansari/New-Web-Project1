<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style1.css">
    <style>
        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }
        
        .sproduct input:focus {
            outline: none;
        }
        
        .buy-btn {
            background-color: coral;
            opacity: 1;
            transition: 0.3s all;
        }
        
        .icon img {
            height: 55px;
            width: 48px;
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
                        <i class="fa-solid fa-bag-shopping"></i>
                        <a href="home.php"><i class="fa-regular fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Product details-->
    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="prebuildimg1/2d7d45954a3ebb6254091c52926d9ae4.jpg" id="MainImg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6> Home / Pre Build</h6>
                <h3 class="py-4">NZXT Fussion pre Built</h3>
                <h2>PKR 277,000</h2>
                <input type="number" value="1">
                <button class="buy-btn">Add to Cart</button>
                <h4 class="mt-5 mb-5">Product Specification</h4>
                <div class="icon">
                    <h4><img src="preduilticon/noun-pc-case-6011776.png" alt=""> <b><u>NZXT H9 Flow</u></b> <img src="preduilticon/noun-cpu-1136736.png" alt=""> <b><u>AMD Ryzen 5975WX</u></b></h4>
                    <h4> <img src="preduilticon/noun-graphic-card-2071184.png" alt=""> <b><u>NVIDIA GeForce RTX 4090</u></b> <img src="preduilticon/noun-motherboard-3140591.png" alt=""> <b><u> Asrock Z790 Taichi</u></b></h4>
                    <h4> <img src="preduilticon/noun-ram-1724288.png" alt=""> <b><u>64GB DDR4</u></b> <img src="preduilticon/noun-ssd-2374273.png" alt=""> <b><u>2TB NVMe M.2</u></b></h4>
                    <h4><img src="preduilticon/noun-power-supply-6376705.png" alt=""> <b><u>NZXT C Series 1200W ATX</u></b></h4>
                </div>
                <span>Behold the NZXT H9 Flow Gaming PC, featuring the powerhouse AMD Ryzen 5975WX and NVIDIA GeForce RTX 4090 for unparalleled performance. The Asrock Z790 Taichi motherboard ensures stability, complemented by a massive 64GB DDR4 RAM for seamless multitasking. Storage is vast with a 2TB NVMe M.2, all powered by the reliable NZXT C Series 1200W ATX supply. Encased in the sleek NZXT H9 Flow, this gaming rig boasts a perfect marriage of cutting-edge components and aesthetic appeal, promising an extraordinary gaming experience.</span>

            </div>
        </div>

    </section>
    <!--Related products-->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py5">
            <h3>Related products</h3>
            <hr class="mx-auto">
        </div>
        <div class="row mx-auto container-fluid">
            <!--first-->
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mainprodimg/pordimg1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">ZNXT pre Build PC</h5>
                <h4 class="p-price"> PKR 1,929,399 </h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--second-->
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mainprodimg/pordimg2.jpeg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Corsiar pre Build PC</h5>
                <h4 class="p-price"> PKR 1,429,399</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--third-->
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mainprodimg/pordimg3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">EVGA GeForce GTX TITAN 2</h5>
                <h4 class="p-price"> PKR 17,699</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <!--forth-->
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mainprodimg/pordimg4.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">MSI A320M-A PRO</h5>
                <h4 class="p-price"> PKR 15,500 </h4>
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
    <script>
        var MainImg = document.getElementById('MainImg');
    </script>
</body>

</html>

</html>