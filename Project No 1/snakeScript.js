let music = new Audio("Sounds/TicTacToe/music.mp3") ;

var rows = 5;
var columns = 5;

var currTile;
var otherTile;

var turns = 0;

music.play();
window.onload = function() {
    //initialize the 5x5 board
    for (let r = 0; r < rows; r++) {
        for (let c = 0; c < columns; c++) {
            //<img>
            let tile = document.createElement("img");
            tile.src = "./puzzelPicsAll/blank.jpg";

            //DRAG FUNCTIONALITY
            tile.addEventListener("dragstart", dragStart); //click on image to drag
            tile.addEventListener("dragover", dragOver);   //drag an image
            tile.addEventListener("dragenter", dragEnter); //dragging an image into another one
            tile.addEventListener("dragleave", dragLeave); //dragging an image away from another one
            tile.addEventListener("drop", dragDrop);       //drop an image onto another one
            tile.addEventListener("dragend", dragEnd);      //after you completed dragDrop

            document.getElementById("board").append(tile);
        }
    }

    //pieces
    let pieces = [];
    for (let i=1; i <= rows*columns; i++) {
        pieces.push(i.toString()); //put "1" to "25" into the array (puzzle images names)
    }
    pieces.reverse();
    for (let i =0; i < pieces.length; i++) {
        let j = Math.floor(Math.random() * pieces.length);

        //swap
        let tmp = pieces[i];
        pieces[i] = pieces[j];
        pieces[j] = tmp;
    }

    for (let i = 0; i < pieces.length; i++) {
        let tile = document.createElement("img");
        tile.src = "./puzzelPicsAll/" + pieces[i] + ".jpg";

        //DRAG FUNCTIONALITY
        tile.addEventListener("dragstart", dragStart); //click on image to drag
        tile.addEventListener("dragover", dragOver);   //drag an image
        tile.addEventListener("dragenter", dragEnter); //dragging an image into another one
        tile.addEventListener("dragleave", dragLeave); //dragging an image away from another one
        tile.addEventListener("drop", dragDrop);       //drop an image onto another one
        tile.addEventListener("dragend", dragEnd);      //after you completed dragDrop

        document.getElementById("pieces").append(tile);
    }
}

//DRAG TILES
function dragStart() {
    currTile = this; //this refers to image that was clicked on for dragging
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();

}

function dragLeave() {
    
}

function dragDrop() {
    otherTile = this; //this refers to image that is being dropped on
}

function dragEnd() {

    // which we wanna swap. if his link means source contain blank(string) then we can say not move for this time 
    if (currTile.src.includes("blank")) {
        return;
    }

    //Swap the images
    let currImg = currTile.src;
    let otherImg = otherTile.src;
    currTile.src = otherImg;
    otherTile.src = currImg;

    turns += 1;
    document.getElementById("turns").innerText = turns;
}

















// snake game js 

// // Game Constants & Variables
// let inputDir = {x: 0, y: 0}; 
// const foodSound = new Audio("Sounds/Snake/food.mp3");
// const gameOverSound = new Audio('Sounds/Snake/gameover.mp3');
// const moveSound = new Audio('Sounds/Snake/move.mp3');
// const musicSound = new Audio('Sounds/Snake/music.mp3');

// let speed = 5;
// let score = 0;
// let lastPaintTime = 0;

// let snakeArr = [
//     {x: 13, y: 15}
// ];
// food = {x: 6, y: 7};

// musicSound.play();   //when enter that moment sound will play.

// // Game Functions
// function main(ctime) {
//     window.requestAnimationFrame(main);
//     // console.log(ctime)
//     if((ctime - lastPaintTime)/1000 < 1/speed){
//         return;
//     }
//     lastPaintTime = ctime;
//     gameEngine();
// }

// function isCollide(snake) {
//     // If you bump into yourself 
//     for (let i = 1; i < snakeArr.length; i++) {
//         if(snake[i].x === snake[0].x && snake[i].y === snake[0].y){
//             return true;
//         }
//     }
//     // If you bump into the wall
//     if(snake[0].x >= 18 || snake[0].x <=0 || snake[0].y >= 18 || snake[0].y <=0){
//         return true;
//     }
        
//     return false;
// }

// function gameEngine(){
//     // Part 1: Updating the snake array & Food
//     if(isCollide(snakeArr)){
//         gameOverSound.play();
//         musicSound.pause();
//         inputDir =  {x: 0, y: 0}; 
//         alert("Game Over. Press any key to play again!");
//         snakeArr = [{x: 13, y: 15}];
//         musicSound.play();
//         score = 0; 
//     }

//     // If you have eaten the food, increment the score and regenerate the food
//     if(snakeArr[0].y === food.y && snakeArr[0].x ===food.x){
//         foodSound.play();
//         score += 1;
//         if(score>hiscoreval){
//             hiscoreval = score;
//             localStorage.setItem("hiscore", JSON.stringify(hiscoreval));
//             hiscoreBox.innerHTML = "HiScore: " + hiscoreval;
//         }
//         scoreBox.innerHTML = "Score: " + score;
//         snakeArr.unshift({x: snakeArr[0].x + inputDir.x, y: snakeArr[0].y + inputDir.y});
//         let a = 2;
//         let b = 16;
//         food = {x: Math.round(a + (b-a)* Math.random()), y: Math.round(a + (b-a)* Math.random())}
//     }

//     // Moving the snake
//     for (let i = snakeArr.length - 2; i>=0; i--) { 
//         snakeArr[i+1] = {...snakeArr[i]};
//     }

//     snakeArr[0].x += inputDir.x;
//     snakeArr[0].y += inputDir.y;

//     // Part 2: Display the snake and Food
//     // Display the snake
//     board.innerHTML = "";
//     snakeArr.forEach((e, index)=>{
//         snakeElement = document.createElement('div');
//         snakeElement.style.gridRowStart = e.y;
//         snakeElement.style.gridColumnStart = e.x;

//         if(index === 0){
//             snakeElement.classList.add('head');
//         }
//         else{
//             snakeElement.classList.add('snake');
//         }
//         board.appendChild(snakeElement);
//     });
//     // Display the food
//     foodElement = document.createElement('div');
//     foodElement.style.gridRowStart = food.y;
//     foodElement.style.gridColumnStart = food.x;
//     foodElement.classList.add('food')
//     board.appendChild(foodElement);


// }


// // Main logic starts here
// musicSound.play();
// let hiscore = localStorage.getItem("hiscore");
// if(hiscore === null){
//     hiscoreval = 0;
//     localStorage.setItem("hiscore", JSON.stringify(hiscoreval))
// }
// else{
//     hiscoreval = JSON.parse(hiscore);
//     hiscoreBox.innerHTML = "HiScore: " + hiscore;
// }

// window.requestAnimationFrame(main);
// window.addEventListener('keydown', e =>{
//     inputDir = {x: 0, y: 1} // Start the game
//     moveSound.play();
//     switch (e.key) {
//         case "ArrowUp":
//             console.log("ArrowUp");
//             inputDir.x = 0;
//             inputDir.y = -1;
//             break;

//         case "ArrowDown":
//             console.log("ArrowDown");
//             inputDir.x = 0;
//             inputDir.y = 1;
//             break;

//         case "ArrowLeft":
//             console.log("ArrowLeft");
//             inputDir.x = -1;
//             inputDir.y = 0;
//             break;

//         case "ArrowRight":
//             console.log("ArrowRight");
//             inputDir.x = 1;
//             inputDir.y = 0;
//             break;
//         default:
//             break;
//     }

// });