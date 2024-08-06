<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS links-->
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/footer.css" media="(min-width: 960px)">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>

    <title>profile</title>
</head>
<body>
    <!-- alert button -->
    <div id="customAlert" class="alert-container">
        <div class="alert-box">
            <p id="alertMessage">هل أنت متأكد؟</p>
            <button id="accepteAlert">نعم</button>
            <button id="closeAlertBtn">اغلاق</button>
        </div>
    </div>
<?php
    require_once "layout/nav.php";
?>

<!--profile-->
<div class="profile-pic">
    <i class="fi fi-rr-circle-user"></i>
</div>

<div class="profile-details-container">
    <div class="navbar-product">
        <div onclick="showSection('orders')"><i class="fi fi-rr-rectangle-list"></i>طلباتي</div>
        <div onclick="showSection('shipping-info')"><i class="fi fi-rr-marker"></i>معلومات الشحن</div>
        <div onclick="showSection('wishlist')"><i class="fi fi-rr-heart"></i>قائمة الأمنيات</div>
        <div onclick="showSection('change-password')"><i class="fi fi-rr-lock"></i>تغيير كلمة السر</div>
    </div>

    <div id="orders" class="section">
        <div id="product-container" class="product-container2"></div>
        <div class="pagination2">
            <button id="prev-page" onclick="prevPage()" disabled><i class="fi fi-ss-angle-circle-right"></i></button>
            <button id="next-page" onclick="nextPage()"><i class="fi fi-ss-angle-circle-right "></i></button>
        </div>
    </div>
    <div id="shipping-info" class="section">
        <div class="container">
            <form id="mainForm">
                <div id="addressForms">
                    <div class="address-form selected" data-address-id="1">
<div class="row">
    <div>
        <input type="text" id="first-name-1" name="first-name-1" class="full-width disabled-field" placeholder="الأسم الأول" disabled>
    </div>
    <div>
        <input type="text" id="last-name-1" name="last-name-1" class="full-width disabled-field" placeholder="الأسم الأخير" disabled>
    </div>
</div>

<div class="row full-width">
    <div>
        <input type="tel" id="phone-number-1" name="phone-number-1" class="full-width disabled-field" placeholder="رقم الهاتف" disabled maxlength="15">
    </div>
</div>
<div class="row">
    <div>
        <input type="text" id="state-1" name="state-1" class="full-width disabled-field" placeholder="تركيا" disabled>
    </div>
    <div>
        <select id="willaya" name="willaya" class="full-width disabled-field" placeholder="الولاية" disabled>
            <option value="">الولاية</option>
            <option value="adana">أدانا</option>
            <option value="ankara">أنقرة</option>
            <option value="istanbul">إسطنبول</option>
            <option value="izmir">إزمير</option>
            <option value="antalya">أنطاليا</option>
        </select>
    </div>
    <div>
        <select id="area-1" name="area-1" class="full-width disabled-field" placeholder="المنطقة" disabled>
            <option value="">المنطقة</option>
            <option value="marmara">مرمرة</option>
            <option value="ege">المنطقة الإيجية</option>
            <option value="akdeniz">المنطقة المتوسطية</option>
            <option value="karadeniz">المنطقة الشمالية</option>
            <option value="icerik">المنطقة الداخلية</option>
        </select>    </div>
</div>
<div class="row full-width">
    <div>
        <input type="text" id="address-details-1" name="address-details-1" class="full-width disabled-field" placeholder="تفاصيل العنوان" rows="4" disabled></textarea>
    </div>
</div>
                        <div class="select-default">
                            <button type="button" onclick="setAsDefault(this)">تعيين كافتراضي</button>
                            <button type="button" onclick="removeAddress(this)">حذف</button>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="button" onclick="enableEditing()">تعديل</button>
                    <button type="button" onclick="addNewAddress()">اضافة عنوان جديد</button>
                    <button type="submit">حفظ</button>
                </div>
            </form>
        </div>
    
    </div>
    <div id="wishlist" class="section">
        <div class="big-container" id="products-container">
            <div class="row-product">
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
            <div class="row-product">
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
    </div>
    <div class="pagination2">
        <button id="prev-page-pro" onclick="prevPagePro()" disabled><i class="fi fi-ss-angle-circle-right"></i></button>
        <button id="next-page-pro" onclick="nextPagePro()"><i class="fi fi-ss-angle-circle-right "></i></button>
    </div>
    </div>
    <div id="change-password" class="section">
        <form class="container-pass">
            <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="text" id="phone" name="phone" >
            </div>
            <div class="form-group">
                <label for="current-password">كلمة المرور الحالية</label>
                <input type="password" id="current-password" name="current-password" >
            </div>
            <div class="form-group">
                <label for="new-password">كلمة المرور الجديدة</label>
                <input type="password" id="new-password" name="new-password">
            </div>
            <button type="submit">موافق</button>
        </form>
    
    </div>
</div>

<!--end of profile-->

<?php
    require_once "layout/footer.php";
?>
<script src="assets/js/profile.js" defer></script>
<script src="assets/js/mobile.js" defer></script>
</body>
</html>