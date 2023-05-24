const playerPointsP = document.querySelector('.player-stats p');
const compPointsP = document.querySelector('.comp-stats p');
const imageButtons = document.querySelectorAll('.icons button');
const choiceSection = document.querySelector('.display-results');
const playerChose = document.querySelector('.player-chose');
const compChose = document.querySelector('.comp-chose');
const chooseText = document.querySelector('.choose-weapon');
const resultText = document.querySelector('.result-bar');
const resetGameButton = document.querySelector('.restart-game');

let playerPoints = 0;
let playerChoice = '';
let compPoints = 0;
let compChoice = '';

function setGame() {
    playerPointsP.innerHTML=playerPoints;
    compPointsP.innerHTML=compPoints;
}
window.onload = setGame();

function playerSelect(event) {
    playerChoice = event.target.dataset.option;
    console.log(playerChoice,'player choice')
    compSelect();
}

const availableCompChoices = ["PAPER", "ROCK", "SCISSORS"];


function compSelect(){
    const randomIndex = Math.floor(Math.random() * availableCompChoices.length);
    compChoice = availableCompChoices[randomIndex];
    console.log(compChoice, 'comp choice');

    checkResults();
}

function checkResults() {
    let winner = '';

    if (playerChoice === 'ROCK' && compChoice === 'SCISSORS' ||
     playerChoice === 'PAPER' && compChoice === 'ROCK' || 
     playerChoice === 'SCISSORS' && compChoice === 'PAPER') {
        winner = 'You won!';
        playerPoints++;
        playerPointsP.innerHTML = playerPoints;
        resultText.classList.add("active");
        resultText.innerHTML=winner;
     }
     else if (playerChoice === compChoice){
        winner = 'Draw!';
        resultText.classList.add("active");
        resultText.innerHTML=winner;
     }
     else {
        winner = 'You lost!';
        compPoints++;
        compPointsP.innerHTML = compPoints;
        resultText.classList.add("active");
        resultText.innerHTML=winner;
     }
     console.log(winner);
     choiceSection.classList.add("active");
     playerChose.innerHTML = playerChoice;
     compChose.innerHTML = compChoice;
     chooseText.classList.add("hidden");
     resetGameButton.classList.add("active");
}


function restartGame() {
    playerPoints = 0;
    compPoints = 0;
    playerPointsP.innerHTML = 0;
    compPointsP.innerHTML = 0;
    choiceSection.classList.remove("active");
    resultText.classList.remove("active");
    chooseText.classList.remove("hidden");
    resetGameButton.classList.remove("active");
}


imageButtons.forEach((button) => button.addEventListener('click', playerSelect));
resetGameButton.addEventListener('click', restartGame);