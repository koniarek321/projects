const adminOptions = document.querySelectorAll('.content .available-activities #options-button')
const addProductForm = document.querySelector('.add-new-product-form');
const deleteProductForm = document.querySelector('.delete-product-form');
const updateProductForm = document.querySelector('.update-product-form');
const userButton = document.querySelector('.basket-bar .user-btn')
const logoutButton = document.querySelector('.basket-bar .logout .logout-btn')


adminOptions.forEach((optionsButton) => optionsButton.addEventListener('mouseover', ()=>{
    let valueOfButton = optionsButton.innerHTML;
    let arrowsBefore = '<<<';
    let arrowsLater = '>>>';
    optionsButton.innerHTML = `${arrowsBefore} ${valueOfButton} ${arrowsLater}`;
}))

adminOptions.forEach((optionsButton) => optionsButton.addEventListener('mouseleave', ()=>{
    let temp = optionsButton.innerText.replace('<<<', '');
    let originalValue = temp.replace('>>>', '');
    optionsButton.innerHTML = originalValue
}))

const optionsList = [...adminOptions];
optionsList.forEach((button, index) => button.addEventListener('click', () => {

    if(button === optionsList[0]){
        if(addProductForm.style.display === "none"){
            addProductForm.style.display = "flex";
        }
        else {
            addProductForm.style.display = "none";
        }
    }
    
    else if (button === optionsList[1]){
        if(deleteProductForm.style.display === "none") {
            deleteProductForm.style.display = "flex";
        }
        else {
            deleteProductForm.style.display = "none";
        }
    }
    else {
        if (updateProductForm.style.display === "flex") {
            updateProductForm.style.display = "none";
        }
        else {
            updateProductForm.style.display = "flex";
        }
    }
}))



userButton.addEventListener('click', () => {
    if(logoutButton.style.display === "none"){
        logoutButton.style.display = "block"
    }
    else {
        logoutButton.style.display = "none"
    }
})