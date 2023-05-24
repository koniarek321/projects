// get data

const currentNumber=document.querySelector('.current-number');
const previousNumber=document.querySelector('.previous-number p');
const mathSign=document.querySelector('.math-sign');
const numbersButtons=document.querySelectorAll('.number');
const operatorsButtons=document.querySelectorAll('.operator');
const equalsButton=document.querySelector('.equals');
const clearScreenButton=document.querySelector('.clear');
const calculatorHistory=document.querySelector('.last-calc');
const clearHistoryButton=document.querySelector('.history-btn');

let result='';








// functions

function displayNumbers () {
    if (this.textContent === '.' && currentNumber.innerHTML.includes('.')) return;
    if (this.textContent === '.' && currentNumber.innerHTML === '.') return currentNumber.innerHTML = '.0';
    if (this.textContent === '.' && currentNumber.innerHTML==='') return;
    currentNumber.innerHTML += this.textContent;
}

function operate () {
    if(currentNumber.innerHTML === '' && this.textContent === '-'){
        currentNumber.innerHTML='-';
        return;
    }
    else if(currentNumber===''){
        return;
    }
    if(mathSign.innerHTML !== ''){
        showResult();
    }
    previousNumber.innerHTML=currentNumber.innerHTML;
    mathSign.innerHTML=this.textContent;
    currentNumber.innerHTML='';
}

function showResult () {
    if(previousNumber.innerHTML === '' || currentNumber === '') return;

    let a=Number(currentNumber.innerHTML);
    let b=Number(previousNumber.innerHTML);
    let operator=mathSign.innerHTML;

    switch(operator) {
        case '+':
            result=a+b;
            break;
        case '-':
            result=b-a;
            break;
        case '*':
            result=a*b;
            break;
        case ':':
            result=b/a;
            break;
        case '2^':
            result= b**a;
    }

    addToHistory();
    clearHistoryButton.classList.add('active');
    currentNumber.innerHTML=result;
    previousNumber.innerHTML='';
    mathSign.innerHTML='';
}

function clearScreen () {
    result='';
    currentNumber.innerHTML='';
    previousNumber.innerHTML='';
    mathSign.innerHTML='';
}

function addToHistory() {
    const newHistoryItem = document.createElement('li');
    newHistoryItem.innerHTML = `${currentNumber.innerHTML} ${mathSign.innerHTML} ${previousNumber.innerHTML} = ${result}`;
    newHistoryItem.classList.add('history-item');
    calculatorHistory.appendChild(newHistoryItem);
}

function clearHistory () {
    calculatorHistory.textContent = '';
    clearHistoryButton.classList.remove('active');
}









// Listeners

operatorsButtons.forEach((button) => button.addEventListener('click', operate));
equalsButton.addEventListener('click', showResult);
clearScreenButton.addEventListener('click', clearScreen);
numbersButtons.forEach((button) => button.addEventListener('click', displayNumbers));
clearHistoryButton.addEventListener('click', clearHistory);


