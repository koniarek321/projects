/*
<div class="product-item on-sale">
            <img src="images/huawei-1.jpg" alt="">
            <p class="product-name">Huawei p20</p>
            <p class="product-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                dolores eaque. Eligendi ab officia minus.
            </p>
            <div class="product-price">
                <span class="price">643.59 €</span>
                <span class="price-sale">512.60 €</span>
            </div>
            <button class="add-to-basket-btn">Add product to cart</button>
            <p class="product-item-sale-info">Promocja</p>
        </div>
*/

const menuList = document.querySelector('.basket-bar .menu-list');
const registerButton = document.querySelector('.register-btn');
const loginButton = document.querySelector('.log-in-btn')
const cookieDiv = document.querySelector('.cookie-info');
const cookieButton = document.querySelectorAll('.cookie-info .cookie-buttons button');
const logoutDiv = document.querySelector('.basket-bar .logout')
const logoutUser = document.querySelector('.logout .user-btn')
const logoutButton = document.querySelector('.logout input')



const isLogged = ()=>{
        menuList.style.display="none";
        logoutDiv.style.display="flex"
    
}
//isLogged()

logoutUser.addEventListener('click', ()=>{
    if(logoutButton.style.display === "none"){
        logoutButton.style.display = "block";
    }
    else {
        logoutButton.style.display = "none";
    }
})

showDisplayOptions = () => {
    const displayOptions = document.querySelector('.display-options')

    if(displayOptions.style.display== 'flex') {
        displayOptions.style.display = 'none';
    }
    else {
        displayOptions.style.display = 'flex'
    }
}





cookieButton.forEach(item => {
    item.addEventListener('click', () => {
        cookieDiv.style.display = 'none';
    })
})

registerButton.addEventListener('click', () => {
    location.href = 'register.php'
})

loginButton.addEventListener('click', () => {
    location.href = 'login.php'
})

menuList.addEventListener('click', showDisplayOptions);


