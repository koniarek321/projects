const backToStoreButton = document.querySelector('.back-to-store')
const termsCheckbox = document.getElementById('check')
const submitRegistrationInput = document.getElementById('submit')
const showPasswordInput = document.getElementById('showpassword')
const passwordInput = document.getElementById('password')
const toggleCreatedAccInfo = document.querySelector('.created-account-info')
const toggleCreatedAccInfoButton = document.querySelector('.created-account-info button')


const isCheckboxChecked = () => {
    if (termsCheckbox.checked ===false){
        submitRegistrationInput.style.opacity = '0.3';
        submitRegistrationInput.style.cursor = 'auto'
        submitRegistrationInput.disabled = true;
    }
    else {
        submitRegistrationInput.style.opacity = '1';
        submitRegistrationInput.style.cursor = 'pointer'
        submitRegistrationInput.disabled = false;
    }
}
isCheckboxChecked();

const showPassword = () => {
    if(showPasswordInput.checked === true){
        passwordInput.type = 'text';
    }
    else {
        passwordInput.type = 'password';
    }
}




toggleCreatedAccInfoButton.addEventListener('click', () => {
    toggleCreatedAccInfo.style.display = 'none'
})

submitRegistrationInput.addEventListener('click',() => {
    toggleCreatedAccInfo.style.display = 'flex'
} )

showPasswordInput.addEventListener('click', showPassword)

termsCheckbox.addEventListener('click', isCheckboxChecked);

backToStoreButton.addEventListener('click', () => {
    location.href = 'index.php'
})