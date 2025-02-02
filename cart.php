<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/footer.css" media="(min-width: 960px)">
    <link rel="stylesheet" href="assets/css/visa.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>cart</title>
</head>

<body>
    <?php
    require_once "layout/nav.php";
    ?>
    <!-- cart -->
    <div class="cart-container">
        <div class="products">
            <!-- List of products will go here -->
            <div class="total">
                <div class="product-container">
                    <div class="product-image" style="background-image: url('assets/images/hero_1.png');"></div>
                    <div class="product-info">
                        <h2>عباية حرير دبي موديل فراشة</h2>
                        <div class="details">
                            <span>العدد : <input id="quantity" type="number" value="1" min="1"></span>
                            <span>المقاس : <span class="span-colored">1</span></span>
                            <span>اللون: <span class="span-colored">بيج</span></span>
                        </div>
                        <div class="total">
                            <span>الإجمالي : <span id="total-price">₺400</span></span>
                        </div>
                        <div class="discount-code">
                            <input type="text" placeholder="هل لديك كود خصم ؟">
                            <button type="button">تطبيق</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="checkout">
            <div class="checkout-sections">
                <div class="information">
                    <h2>معلومات الشحن</h2>
                    <!-- User information form will go here -->
                    <form>
                        <div class="form-row">
                            <input type="text" id="first-name" name="first_name" placeholder="الاسم الاول">
                            <input type="text" id="last-name" name="last_name" placeholder="الاسم الاخير">
                        </div>
                        <div class="form-row">
                            <input type="text" id="phone-number" name="phone_number" placeholder="رقم الهاتف" class="full-width">
                        </div>
                        <div class="form-row">
                            <input type="text" id="country" name="country" placeholder="تركيا" value="تركيا" readonly>
                            <select id="state" name="state">
                                <option value="">الولاية</option>
                                <option value="adana">أدانا</option>
                                <option value="ankara">أنقرة</option>
                                <option value="istanbul">إسطنبول</option>
                                <option value="izmir">إزمير</option>
                                <option value="antalya">أنطاليا</option>
                            </select>
                            <select id="region" name="region">
                                <option value="">المنطقة</option>
                                <option value="marmara">مرمرة</option>
                                <option value="ege">المنطقة الإيجية</option>
                                <option value="akdeniz">المنطقة المتوسطية</option>
                                <option value="karadeniz">المنطقة الشمالية</option>
                                <option value="icerik">المنطقة الداخلية</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="text" id="address-details" name="address-details" placeholder="تفاصيل العنوان : رقم الشارع , رقم البناء , رقم الشقة ان وجد" class="full-width">
                        </div>
                        <div class="form-row button-row">
                            <input type="text" id="address-name" name="address-name" placeholder="اسم العنوان : مثال “بيت” " class="full-width">
                            <button type="button">مساعدة<i class="fi fi-brands-whatsapp"></i></button>
                        </div>
                        <div class="form-row">
                            <textarea id="notes" name="notes" rows="1" placeholder="الملاحظات"></textarea>
                        </div>
                    </form>
                </div>
                <div class="pay-section">
                    <div class="pay-options">
                        <div class="pay-option" id="cod">
                            الدفع عند الإستلام
                        </div>
                        <div class="pay-option" id="card">
                            البطاقة البنكية
                        </div>
                    </div>
                    <div class="button-or-card" id="cod-button">
                        <h3>سيتم تحصيل مبلغ <span>XXX</span> عند استلام طلبك نقداً</h3>
                        <button>إتمام الطلب </button>
                    </div>
                    <div class="button-or-card" id="card-details">
                        <div class="checkouts">
                            <div class="credit-card-box">
                                <div class="flip">
                                    <div class="front">
                                        <div class="chip"></div>
                                        <div class="logo">
                                            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                <g>
                                                    <g>
                                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                               c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                               c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                               M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                               c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                               c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                               l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                               C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                               C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                               c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                               h-3.888L19.153,16.8z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="number"></div>
                                        <div class="card-holder">
                                            <label>Card holder</label>
                                            <div></div>
                                        </div>
                                        <div class="card-expiration-date">
                                            <label>Expires</label>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="strip"></div>
                                        <div class="logo">
                                            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                <g>
                                                    <g>
                                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                               c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                               c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                               M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                               c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                               c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                               l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                               C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                               C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                               c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                               h-3.888L19.153,16.8z" />
                                                    </g>
                                                </g>
                                            </svg>

                                        </div>
                                        <div class="ccv">
                                            <label>CCV</label>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="form" autocomplete="off" novalidate>
                                <fieldset>
                                    <label for="card-number">رقم البطاقة</label>
                                    <input type="num" id="card-number" class="input-cart-number" maxlength="4" />
                                    <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
                                    <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
                                    <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
                                </fieldset>
                                <fieldset>
                                    <label for="card-holder">اسم حامل البطاقة</label>
                                    <input type="text" id="card-holder" />
                                </fieldset>
                                <fieldset class="fieldset-expiration">
                                    <label for="card-expiration-month">تاريخ انتهاء الصلاحية</label>
                                    <div class="select">
                                        <select id="card-expiration-month">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select id="card-expiration-year">
                                            <option></option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                            <option>2025</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset-ccv">
                                    <label for="card-ccv">CCV</label>
                                    <input type="text" id="card-ccv" maxlength="3" />
                                </fieldset>
                                <button class="btn">إتمام الطلب </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart -->
    <?php
    require_once "layout/footer.php";
    ?>
    <script src="assets/js/cart.js" defer></script>
    <script src="assets/js/visa.js" defer></script>
    <script src="assets/js/mobile.js" defer></script>
</body>

</html>