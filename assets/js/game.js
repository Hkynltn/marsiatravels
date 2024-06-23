let score = 0;
const bunny = document.getElementById('bunny');
const scoreDisplay = document.getElementById('score');
const bunnyContainer = document.getElementById('bunny-container');

bunny.addEventListener('click', () => {
    score++;
    scoreDisplay.textContent = score;
    moveBunny();
});