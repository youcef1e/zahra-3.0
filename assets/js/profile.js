function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    const activeSection = document.getElementById(sectionId);
    if (activeSection) {
        activeSection.style.display = 'block';
    }
}
const products = [
    {
        title: 'عباية حرير دبي موديل فراشة',
        imgSrc: 'assets/images/hero_1.png',
        quantity: 1,
        size: '4',
        color: 'بيج',
        total: '400₺',
        orderNumber: '12133',
        status: 'جاهز للشحن'
    },
    {
        title: 'عباية حرير دبي موديل فراشة',
        imgSrc: 'assets/images/hero_1.png',
        quantity: 1,
        size: '1',
        color: 'بيج',
        total: '400₺',
        orderNumber: '12133',
        status: 'جاهز للشحن'
    },
    {
        title: 'عباية حرير دبي موديل فراشة مودل 2',
        imgSrc: 'assets/images/hero_1.png',
        quantity: 1,
        size: '2',
        color: 'أسود',
        total: '450₺',
        orderNumber: '12134',
        status: 'جاهز للشحن'
    },
    {
        title: 'عباية حرير دبي موديل فراشة مودل 2',
        imgSrc: 'assets/images/hero_1.png',
        quantity: 1,
        size: '2',
        color: 'أسود',
        total: '450₺',
        orderNumber: '12134',
        status: 'جاهز للشحن'
    },
    // Add more products as needed
];

const productsPerPage = 2;
let currentPage = 1;

function displayProducts() {
    const productContainer = document.getElementById('product-container');
    productContainer.innerHTML = '';

    const startIndex = (currentPage - 1) * productsPerPage;
    const endIndex = startIndex + productsPerPage;

    const currentProducts = products.slice(startIndex, endIndex);

    currentProducts.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.className = 'product2';
        productDiv.innerHTML = `
            <img src="${product.imgSrc}" alt="Product Image">
            <div class="product-info2">
                <div class="row2 row-full2 titlerow">
                    <span id="title">${product.title}</span>
                </div>
                <div class="row2 fillable">
                    <p>عدد : <span class="grand">${product.quantity}</span></p>
                    <p>مقاس : <span class="grand">${product.size}</span></p>
                    <p>لون : <span class="grand">${product.color}</span></p>
                </div>
                <div class="row2">
                    <p>الاجمالي : <span class="grand">${product.total}</span></p>
                    <p>رقم الطلب : <span class="grand">${product.orderNumber}</span></p>
                </div>
                <div class="row2">
                    <p>حالة الطلب : <span class="grand">${product.status}</span></p>
                    <button type="button">تتبع الطلب</button>
                </div>
                <div class="row2 row-full2 titlerow">
                    <button type="button">تقييم المنتج</button>
                </div>
            </div>
        `;
        productContainer.appendChild(productDiv);
    });
    document.getElementById('prev-page').disabled = currentPage === 1;
    document.getElementById('next-page').disabled = endIndex >= products.length;
}

function nextPage() {
    currentPage++;
    displayProducts();
}

function prevPage() {
    currentPage--;
    displayProducts();
}

window.onload = () => {
    showSection('orders');
    displayProducts();
};

// deliveruy js
let addressId = 2; // Starting ID for new addresses
        let defaultAddressId = 1; // Initially, the default address has ID 1

        function enableEditing() {
            const defaultAddressForm = document.querySelector(`.address-form[data-address-id="${defaultAddressId}"]`);
            if (defaultAddressForm) {
                const formElements = defaultAddressForm.querySelectorAll('input,select');
                formElements.forEach(element => {
                    element.disabled = !element.disabled;
                    element.classList.toggle('disabled-field', element.disabled);
                });
            }
        }

        function addNewAddress() {
            const addressForms = document.getElementById('addressForms');
            
            // Create a new address form
            const newAddressForm = document.createElement('div');
            newAddressForm.className = 'address-form';
            newAddressForm.dataset.addressId = addressId;
            addressId++;

            newAddressForm.innerHTML = `
               <!-- First Row: الأسم الأول, الأسم الأخير -->
<div class="row">
    <div>
        <input type="text" id="first-name-${newAddressForm.dataset.addressId}" name="first-name-${newAddressForm.dataset.addressId}" class="full-width disabled-field" placeholder="الأسم الأول" disabled>
    </div>
    <div>
        <input type="text" id="last-name-${newAddressForm.dataset.addressId}" name="last-name-${newAddressForm.dataset.addressId}" class="full-width disabled-field" placeholder="الأسم الأخير" disabled>
    </div>
</div>

<!-- Second Row: رقم الهاتف -->
<div class="row full-width">
    <div>
        <input type="tel" id="phone-number-${newAddressForm.dataset.addressId}" name="phone-number-${newAddressForm.dataset.addressId}" class="full-width disabled-field" placeholder="رقم الهاتف" disabled maxlength="15">
    </div>
</div>

<!-- Third Row: الولاية, المنطقة, البلد -->
<div class="row">
    <div>
        <input type="text" id="state-${addressId}" name="state-${addressId}" class="full-width disabled-field" placeholder="تركيا" disabled>
    </div>
    <div>
        <select id="area-${addressId}" name="area-${addressId}" class="full-width disabled-field" disabled>
            <option value="">الولاية</option>
            <option value="adana">أدانا</option>
            <option value="ankara">أنقرة</option>
            <option value="istanbul">إسطنبول</option>
            <option value="izmir">إزمير</option>
            <option value="antalya">أنطاليا</option>
        </select>
    </div>
    <div>
        <select id="country-${addressId}" name="country-${addressId}" class="full-width disabled-field" disabled>
            <option value="">المنطقة</option>
            <option value="marmara">مرمرة</option>
            <option value="ege">المنطقة الإيجية</option>
            <option value="akdeniz">المنطقة المتوسطية</option>
            <option value="karadeniz">المنطقة الشمالية</option>
            <option value="icerik">المنطقة الداخلية</option>
        </select>
    </div>
</div>

<!-- Fourth Row: تفاصيل العنوان -->
<div class="row full-width">
    <div>
        <input type="text" id="address-details-${newAddressForm.dataset.addressId}" name="address-details-${newAddressForm.dataset.addressId}" class="full-width disabled-field" placeholder="تفاصيل العنوان" rows="4" disabled></textarea>
    </div>
</div>

                
                <!-- Select Default Button -->
                <div class="select-default">
                    <button type="button" onclick="setAsDefault(this)">تعيين كافتراضي</button>
                    <button type="button" onclick="removeAddress(this)">حذف </button>

                </div>
            `;

            addressForms.appendChild(newAddressForm);
        }

        function setAsDefault(button) {
            // Remove 'selected' class from all address forms
            document.querySelectorAll('.address-form').forEach(form => {
                form.classList.remove('selected');
            });

            // Set the clicked form as the default
            const form = button.closest('.address-form');
            form.classList.add('selected');

            defaultAddressId = form.dataset.addressId;
        }

        function removeAddress(button) {
            console.log(button);
            const form = button.closest('.address-form');
            
            const customAlert = document.getElementById('customAlert');
            const closeAlertBtn = document.getElementById('closeAlertBtn');
            const accept = document.getElementById('accepteAlert');
            customAlert.style.display = 'flex';

            closeAlertBtn.addEventListener('click', function() {
                customAlert.style.display = 'none';
            });

            accept.addEventListener('click', function() {
                form.remove();
                customAlert.style.display = 'none';
            });
        }


  function changeSlide(dot, index) {
    const row = dot.closest('.row-product');
    const imagesContainer = row.querySelector('.images-container');
    const dots = row.querySelectorAll('.dot');

    imagesContainer.style.transform = `translateY(-${index * 100}%)`;

    dots.forEach(d => d.classList.remove('active'));
    dot.classList.add('active');
}


// product wishlist

const rawProducts = [
    { id: 1, price: '1000₺', image: 'assets/images/hero_1.png' },
    { id: 2, price: '1200₺', image: 'assets/images/hijab_clarification.svg' },
    { id: 3, price: '800₺', image: 'assets/images/hero_1.png' },
    // Add more products as needed
];

const productsPerPage2 = 2;
let currentPage2 = 1;

// Render products for the current page
function renderProducts() {
    const container = document.getElementById('products-container');
    container.innerHTML = '';

    // Calculate start and end index of products to display
    const startIndex = (currentPage2 - 1) * productsPerPage2;
    const endIndex = Math.min(startIndex + productsPerPage2, rawProducts.length);

    for (let i = startIndex; i < endIndex; i++) {
        const product = rawProducts[i];
        const productDiv = document.createElement('div');
        productDiv.className = 'row-product';

        productDiv.innerHTML = `
            <i class="fi fi-rr-heart heart"></i>
            <i class="fi fi-rr-shopping-bag-add bag"></i>
            <div class="product-price">${product.price}</div>
            <div class="images-container">
                <a href="product.html">
                    <div class="image" style="background-image: url('${product.image}');"></div>
                    <div class="image" style="background-image: url('${product.image}');"></div>
                    <div class="image" style="background-image: url('${product.image}');"></div>
                </a>
            </div>
            <div class="dots">
                <div class="dot active" onclick="changeSlide(this, 0)"></div>
                <div class="dot" onclick="changeSlide(this, 1)"></div>
                <div class="dot" onclick="changeSlide(this, 2)"></div>
            </div>
        `;

        container.appendChild(productDiv);
    }

    updatePaginationButtons();
}

// Update the enabled/disabled state of pagination buttons
function updatePaginationButtons() {
    document.getElementById('prev-page-pro').disabled = currentPage2 === 1;
    document.getElementById('next-page-pro').disabled = currentPage2 * productsPerPage2 >= rawProducts.length;
}

// Go to the previous page
function prevPagePro() {
    if (currentPage2 > 1) {
        currentPage2--;
        renderProducts();
    }
}

// Go to the next page
function nextPagePro() {
    if (currentPage2 * productsPerPage2 < rawProducts.length) {
        currentPage2++;
        renderProducts();
    }
}

// Initial render
renderProducts();

