const passwordLength = document.getElementById('length');
const upperCaseInput = document.getElementById('uppercase-input');
const lowerCaseInput = document.getElementById('lowercase-input');
const numbersInput = document.getElementById('numbers-input');
const symbolsInput = document.getElementById('symbols-input');
const passwordOutput = document.getElementById('generated-password');
const generateButton = document.querySelector('button');



const lowerCaseLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
let upperCaseLetters =[];
lowerCaseLetters.forEach((char) => {
    upperCaseLetters.push(char.toUpperCase());
})

const numbers = ["1","2","3","4","5","6","7","8","9", "0"];
const symbols = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")"];

function generate() {
    let actualArray = [];
    let password='';
    
    if (lowerCaseInput.checked === true) {
        actualArray += lowerCaseLetters;
    }
    if (upperCaseInput.checked === true){
        actualArray += upperCaseLetters;
    }
    if (numbersInput.checked === true) {
        actualArray += numbers;
    }
    if (symbolsInput.checked) {
        actualArray += symbols;
    }
    

    if (passwordLength.value === '' || passwordLength.value <= 0) {
        alert('Enter password length!')
    }
    else {
        for (let i =0; i < passwordLength.value; i++) {
            let temp = actualArray[Math.floor(Math.random()*actualArray.length)];
            if(temp === ',') {
                --i;
            }
            else {
                password += temp;
                temp = '';
            }
        }
        passwordOutput.value = password;
    }
}




generateButton.addEventListener('click', generate);
