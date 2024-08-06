if (window.innerWidth <= 960) {
function addCssLink(url) {
  var link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = url;
  document.head.appendChild(link);
}
var cssUrls = [
  'https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css',
  'https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'
];

cssUrls.forEach(addCssLink);

    var sideMenuHTML = `
        <div id="sideMenu" class="side-menu">
            <div class="menu-content">
                <i class="fi fi-sr-circle-xmark close-side-menu"></i>
                <div class="logo-slid">
                    <img src="assets/images/logo.svg" alt="Logo">
                </div>
                <div class="menu-items">
                    <a href="index.php">المتجر</a>
                    <a href="#">عبايات</a>
                    <a href="#">أطقم</a>
                    <a href="#">التخفيضات</a>
                    <a href="#">انضم لبرنامج التسويق بالعمولة</a>
                </div>
                <div class="footer-links">
                    <a href="MembershipAgreement.php">من نحن؟</a>
                    <a href="salesAgreement.php">سياسية الاعادة والاستبدال</a>
                    <a href="privacyPolicy.php">سياسة الخصوصية</a>
                    <a href="termsAndConditions.php">الشروط والاحكام</a>
                </div>
                <div class="footer-image">
                    <img src="assets/images/payment.svg" alt="Footer Image">
                </div>
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('afterbegin', sideMenuHTML);
  let footer = document.querySelector(".footer").remove();
  document.querySelector(".footer-cotainer").remove();
  const searchInputWrapper = document.querySelector(".searchInputWrapper");
  const newElement = document.createElement("i");
  newElement.className = "fi fi-br-menu-burger burger";
  if (searchInputWrapper) {
    searchInputWrapper.parentNode.replaceChild(newElement, searchInputWrapper);
  }
  let range = document.querySelector(".range");
  if (range) {
    range.remove();
  }
  const loginLink = document.querySelector('.right a[href="login.php"]');
  if (loginLink) {
    loginLink.remove();
  }

const htmlString = `
<div class="under-container">
  <div class="under-nav">
    <a href="index.php"><i class="fi fi-rr-shop"></i>المتجر</a>
    <a href="#favorites"><i class="fi fi-rr-heart"></i>المفضلة</a>
    <a href="#search"><i class="fi fi-rr-search"></i>بحث</a>
    <a href="login.php"><i class="fi fi-rr-circle-user"></i>حسابي</a>
  </div>
</div>`;
document.body.insertAdjacentHTML('beforeend', htmlString);
var menu = document.getElementById('sideMenu');
document.querySelector('.burger').addEventListener('click', function() {
  menu.classList.toggle('open');
});
document.querySelector('.close-side-menu').addEventListener('click', function() {
  menu.classList.toggle('open');
})
}

