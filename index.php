<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    

    <!-- CSS links-->
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/footer.css" media="(min-width: 960px)">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <!--iclude-->
    <title>zahra</title>
</head>
<body>
    <?php
    require_once "layout/nav.php";
    ?>
<!-- Slider -->
 <div class="slider-container">
<div class="slider">
    <div class="slides">
        <div class="slide">
            <img src="assets/images/hero_1.png" alt="Image 1">
        </div>
        <div class="slide">
            <img src="assets/images/hero_1.png" alt="Image 2">
        </div>
        <div class="slide">
            <img src="assets/images/hero_1.png" alt="Image 3">
        </div>
        <div class="slide">
            <img src="assets/images/hero_1.png" alt="Image 4">
        </div>
    </div>
    <div class="navigation">
        <div class="nav-dot" onclick="currentSlide(0)"></div>
        <div class="nav-dot" onclick="currentSlide(1)"></div>
        <div class="nav-dot" onclick="currentSlide(2)"></div>
        <div class="nav-dot" onclick="currentSlide(3)"></div>
    </div>
</div>
</div>
<!-- Slider -->

<!--second nav bar -->
<nav class="second-nav">
    <div class="links-nav">
    <ul class="nav-links">
        <li><a href="#home">الكل</a></li>
        <li><a href="#about">عبايات</a></li>
        <li><a href="#services">فساتين</a></li>
        <li><a href="#contact">أطقم</a></li>
        <li><a href="#contact">نقابات</a></li>
        <li><a href="#contact">تخفيضات</a></li>
    </ul>
</div>
<div class="range">
    <div class="field">
      <div class="value left" id="rangeValue">1000₺</div>
      <input type="range" min="10" max="100000" value="100" step="5" id="rangeInput">
    </div>
  </div>
</nav>

<!--end of second nav bar -->
<!--product grid-->
<div class="big-container">
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    <div class="row">
        <i class="fi fi-rr-heart heart"></i>
        <i class="fi fi-rr-shopping-bag-add bag"></i>
        <div class="product-price">1000₺</div>
        <div class="images-container">
            <a href="product.php">
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
            </a>
        </div>
        <div class="dots">
            <div class="dot active" onclick="changeSlide(this, 0)"></div>
            <div class="dot" onclick="changeSlide(this, 1)"></div>
            <div class="dot" onclick="changeSlide(this, 2)"></div>
        </div>
    </div>
    

    <!-- Repeat the above row structure for more rows -->
</div>
<!--end of product grid-->

<?php
    require_once "layout/footer.php";
    ?>

<!--scripts-->

<script src="assets/js/slider.js" defer></script>
<script src="assets/js/main.js" defer></script>
<script src="assets/js/mobile.js" defer></script>

</body>
</html>
