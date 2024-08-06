<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS links-->
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/footer.css"  media="(min-width: 960px)">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <title>زهرة تسجيل الدخول</title>
</head>
<body>
<?php
    require_once "layout/nav.php";
    ?>
<!--main structure-->
<div class="log-pic">
    <i class="fi fi-rr-circle-user"  id="picture"></i>
</div>

<div class="wrapper">
    <div class="form-container">
       <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked >
          <input type="radio" name="slide" id="signup" >
          <label for="login" class="slide login">تسجيل الدخول</label>
          <label for="signup" class="slide signup">التسجيل</label>
          <div class="slider-tab"></div>
       </div>
       <div class="form-inner">
          <form action="#" class="login">
             <div class="field">
                <label for="phone">رقم الهاتف</label>
                <input type="text" id="phone" required maxlength="15">
             </div>
             <div class="field">
                <label for="pass">كلمة المرور</label>
                <input type="password" id="pass" required>
             </div>
             <div class="pass-link">
                <a href="#">نسيت كلمة السر ؟</a>
             </div>
             <div class="btn">
                <input type="submit" value="دخول">
             </div>
          </form>
          <form action="#" class="signup register">
            <div class="field">
                <label for="whatsapp-num">رقم الواتساب</label>
                <select id="country-code">
                    <option value="+90">+90</option>
                    <option value="+1">+970</option>
                    <!-- Add more country codes as needed -->
                </select>
                <input type="text" required id="whatsapp-num" maxlength="15">
            </div>
             <div class="field">
                <label for="password">كلمة السر</label>
                <input type="password"  required id="password"> 
             </div>
             <div class="field">
                <label for="pass-repeat">تأكيد كلمة السر</label>
                <input type="password"  required id="pass-repeat">
             </div>
             <div class="field otp">
                <div id="otp-btn">احصل على رمز التاكيد</div>
                <input type="tect"  required id="otp" placeholder="قم بإدخال رمز التاكيد الذي حصلت عليه من واتساب">
             </div>
             <div class="term">
                <input type="checkbox" required id="whatsapp-terms">
                <label for="whatsapp-terms">اوافق على <a href="#">استخدام واتساب</a> لإبلاغي بحالة الطلبات ومعلومات المنتجات </label>
            </div>
            <div class="term">
                <input type="checkbox" required id="terms">
                <label for="terms">اوافق على <a href="#"> اتفاقية البيع وسياسة الخصوصية وسياسة الإعادة والإستبدال </a>   </label>
            </div>
            
             <div class=" btn">
                <input type="submit" value="تسجيل">
             </div>
             <div class="social-reg">
                 <div><a href="#"><i class="fi fi-brands-google"></i>التسجيل من خلال </a></div>
                 <div><a href="#"><i class="fi fi-brands-facebook"></i>التسجيل من خلال </a></div>
                </div>
          </form>

       </div>
    </div>
 </div>
<!--end main structure-->
<?php
    require_once "layout/footer.php";
    ?>
<script src="assets/js/login.js"></script>
<script src="assets/js/mobile.js" defer></script>
</body>
</html>