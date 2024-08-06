<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/footer.css" media="(min-width: 960px)">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-straight/css/uicons-solid-straight.css'>
    <title>product page</title>
</head>

<body>
<?php
    require_once "layout/nav.php";
?>
    <!--product section-->

    <div class="product-section">
        <div class="upper">
            <div class="upper-left">
                <div class="wrapper-naves">
                <div class="first-nav">
                    <div id="counter">
                        <span>21</span>
                        <p>عميل يشاهد المنتج الان </p>
                    </div>
                    <div id="stock-count">
                        <span>90</span>
                        <p>باقي في المخزن </p>
                    </div>
                </div>
                <div class="secondd-nav">
                    <div>
                        <span>المقاسات</span>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                    <div>
                        <button type="button" class="cloud-btn">شراء مباشر</button>
                        <button type="button" class="cloud-btn">اضافة للسلة</button>
                    </div>
                </div>
            </div>

                <div class="third-nav">
                    <div class="tab-container">
                        <div class="tab active" onclick="showContent('reviews')">التقييمات</div>
                        <div class="tab" onclick="showContent('description')">وصف المنتج</div>
                        <div class="tab" onclick="showContent('sizeChart')">جدول المقاسات</div>
                    </div>

                    <div id="reviews" class="content active reviews-hero">
                        <div class="review-header">
                            <div class="stars">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-ss-star"></i>
                                <i class="fi fi-ss-star"></i>
                                <i class="fi fi-ss-star"></i>
                                <i class="fi fi-ss-star"></i>
                            </div>
                            <div class="name">
                                **اس** عم
                            </div>
                        </div>
                        <div class="review-content">
                        لقد اشتريت هذا الحجاب مؤخرًا وأنا مسرورة جدًا به. القماش عالي الجودة وناعم على البشرة، كما أنه يسمح بالتهوية بشكل جيد ولا يسبب أي نوع من التهيج. اللون جميل ومتطابق مع الصورة المعروضة على الموقع. الطول مثالي ويمكن ترتيبه بسهولة بطرق مختلفة. أنصح بهذا الحجاب بشدة لأي شخص يبحث عن حجاب أنيق ومريح للاستخدام اليومي.
                        </div>
                    </div>
                    <div id="description" class="content">
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،</p>
                    </div>
                    <div id="sizeChart" class="content ">
                        <div class="hero-size">
                        <div class="left-section">
                            <img src="assets/images/hijab_clarification.svg" alt="صورة المنتج">
                        </div>
                        <div class="right-section">
                                <div class="table-header">
                                  <div class="header-cell">المقاس</div>
                                  <div class="header-cell">عرض الكتف</div>
                                  <div class="header-cell">طول الكم</div>
                                  <div class="header-cell">طول العباية</div>
                                </div>
                                <div class="table-row">
                                  <div class="table-cell"><span class="num-edit">1</span><span>40-38</span></div>
                                  <div class="table-cell">38</div>
                                  <div class="table-cell">61</div>
                                  <div class="table-cell">149</div>
                                </div>
                                <div class="table-row">
                                  <div class="table-cell"><span class="num-edit">2</span><span>42-44</span></div>
                                  <div class="table-cell">39.5</div>
                                  <div class="table-cell">61</div>
                                  <div class="table-cell">149</div>
                                </div>
                                <div class="table-row">
                                  <div class="table-cell"><span class="num-edit">3</span><span>46-48</span></div>
                                  <div class="table-cell">41  </div>
                                  <div class="table-cell">61</div>
                                  <div class="table-cell">149</div>
                                </div>
                                <div class="table-row">
                                  <div class="table-cell"><span class="num-edit">4</span><span>50-52</span></div>
                                  <div class="table-cell">42.5</div>
                                  <div class="table-cell">61</div>
                                  <div class="table-cell">149</div>
                                </div>
                              
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="upper-right">
                <div class="row">
                    <div class="images-container">
                        <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
                        <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
                        <div class="image" style="background-image: url('assets/images/hero_1.png');"></div>
                    </div>
                    <div class="dots">
                        <div class="dot active" onclick="changeSlide(this, 0)"></div>
                        <div class="dot" onclick="changeSlide(this, 1)"></div>
                        <div class="dot" onclick="changeSlide(this, 2)"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower">
            <div>
            <h1 >منتجات مشابهة</h1>
        </div>
        <!--product grid-->
<div class="big-container" style="width: 100% !important;">
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

        </div>
    </div>
<!--product section-->
<?php
    require_once "layout/footer.php";
?>
<script src="assets/js/main.js" defer></script>
<script src="assets/js/mobile.js" defer></script>
</body>

</html>