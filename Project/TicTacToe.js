// For single user play game

let music = new Audio("Sounds/TicTacToe/music.mp3")   //Set the music ito a variable.
let audioTurn = new Audio("Sounds/TicTacToe/ting.mp3")
let gameover = new Audio("Sounds/TicTacToe/gameover.mp3")

let turn = "X"                                        //initial turn will be for x.
let isgameover = false;                               //game is initially not over.



// Function to change the turn(Only for print which turn it is)
const changeTurn = ()=>{                              //Return the value of which turn.
    return turn === "X"? "0": "X"                     //if its x turn runing then next will be 0, if not means else it will be turn for x.     
}

// Function to check for a win
const checkWin = ()=>{                                //checkWin is a function which give use the value isgameover or not! then set value that x Won or 0 Won. set the emoji width wich we initially set at 0. Set line position by translate and rotaion and line with.(All those will hapen after winning).
    let boxtext = document.getElementsByClassName('boxtext');     //get an array of elements of the span means the area of one. means one box. here we get 9 boxs one by one! 
    let wins = [                                      //This is a 2D array, which has 9 elements. Those elements also containing 6 items where the first three items containg the wining possible set. which condition we say that , it's win. 
        [0, 1, 2, 5, 5, 0],                           //Here 5 and 5 used for translate(X-axis and Y-axis) and 0 is for rotation(angle). those last three is used to place the line.! where the first roww is win.!
        [3, 4, 5, 5, 15, 0],
        [6, 7, 8, 5, 25, 0],
        [0, 3, 6, -5, 15, 90],
        [1, 4, 7, 5, 15, 90],
        [2, 5, 8, 15, 15, 90],
        [0, 4, 8, 5, 15, 45],
        [2, 4, 6, 5, 15, 135],
    ]
    wins.forEach(e =>{                                                                                                 //We travers by this array! where arrays element one by one come into e. that means first time e = [0, 1, 2, 5, 5, 0]. 
        if((boxtext[e[0]].innerText === boxtext[e[1]].innerText) && (boxtext[e[2]].innerText === boxtext[e[1]].innerText) && (boxtext[e[0]].innerText !== "") ){    //if any of array 2d (both 3)items of any elements are mathced means [0,1,2] means first row are fill by same element then we can say the element is win.
            document.querySelector('.info').innerText = boxtext[e[0]].innerText + " Won";                              //Then the text in inofo class will change by the item which are same in 2d arrays inner 3 item(checked by if).                     
            isgameover = true;                                                                                         //game is finaly over.(If not then we say class info text continue showing which turn it is!)
            music.pause();                                                                                             //If any one wine then the background music shoud off.
            gameover.play();                                                                                           //after game over it will play music.
            document.querySelector('.imgbox').getElementsByTagName('img')[0].style.width = "200px";                    //showing the gif by giving width
            document.querySelector(".line").style.transform = `translate(${e[3]}vw, ${e[4]}vw) rotate(${e[5]}deg)`     //how the line will be
            document.querySelector(".line").style.width = "20vw";                                                      //how much line will be width
        }
    })
}


//Bot logic;
const botTurn = ()=>{                                //checkWin is a function which give use the value isgameover or not! then set value that x Won or 0 Won. set the emoji width wich we initially set at 0. Set line position by translate and rotaion and line with.(All those will hapen after winning).

    let boxtext1 = document.getElementsByClassName('boxtext');     //get an array of elements of the span means the area of one. means one box. here we get 9 boxs one by one! 

    // for bot wining 

    //for box0
    if(boxtext1[1].innerText == "0" && boxtext1[2].innerText =="0" && boxtext1[0].innerText ==""){
        boxtext1[0].innerText = "0";
    }
    else if(boxtext1[4].innerText == "0" && boxtext1[8].innerText== "0" && boxtext1[0].innerText == ""){
        boxtext1[0].innerText = "0";
    }
    else if(boxtext1[3].innerText == "0" && boxtext1[6].innerText== "0" && boxtext1[0].innerText == ""){
        boxtext1[0].innerText = "0";
    }

    //for BOX1
    else if(boxtext1[0].innerText == "0" && boxtext1[2].innerText =="0" && boxtext1[1].innerText ==""){
        boxtext1[1].innerText = "0";
    }
    else if(boxtext1[4].innerText == "0" && boxtext1[7].innerText== "0" && boxtext1[1].innerText == ""){
        boxtext1[1].innerText = "0";
    }

    //for box2
    else if(boxtext1[1].innerText == "0" && boxtext1[0].innerText =="0" && boxtext1[2].innerText ==""){
        boxtext1[2].innerText = "0";
    }
    else if(boxtext1[4].innerText == "0" && boxtext1[6].innerText== "0" && boxtext1[2].innerText == ""){
        boxtext1[2].innerText = "0";
    }
    else if(boxtext1[5].innerText == "0" && boxtext1[8].innerText== "0" && boxtext1[2].innerText == ""){
        boxtext1[2].innerText = "0";
    }

    //for BOX3
    else if(boxtext1[0].innerText == "0" && boxtext1[6].innerText =="0" && boxtext1[3].innerText ==""){
        boxtext1[3].innerText = "0";
    }
    else if(boxtext1[4].innerText == "0" && boxtext1[5].innerText== "0" && boxtext1[3].innerText == ""){
        boxtext1[3].innerText = "0";
    }

    //for box4
    else if(boxtext1[0].innerText == "0" && boxtext1[8].innerText =="0" && boxtext1[4].innerText ==""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[1].innerText == "0" && boxtext1[7].innerText== "0" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[2].innerText == "0" && boxtext1[6].innerText== "0" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[3].innerText == "0" && boxtext1[5].innerText== "0" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }

    //for BOX5
    else if(boxtext1[3].innerText == "0" && boxtext1[4].innerText =="0" && boxtext1[5].innerText ==""){
        boxtext1[5].innerText = "0";
    }
    else if(boxtext1[2].innerText == "0" && boxtext1[8].innerText== "0" && boxtext1[5].innerText == ""){
        boxtext1[5].innerText = "0";
    }

    //for box6
    else if(boxtext1[0].innerText == "0" && boxtext1[3].innerText =="0" && boxtext1[6].innerText ==""){
        boxtext1[6].innerText = "0";
    }
    else if(boxtext1[2].innerText == "0" && boxtext1[4].innerText== "0" && boxtext1[6].innerText == ""){
        boxtext1[6].innerText = "0";
    }
    else if(boxtext1[7].innerText == "0" && boxtext1[8].innerText== "0" && boxtext1[6].innerText == ""){
        boxtext1[6].innerText = "0";
    }

    //for BOX7
    else if(boxtext1[1].innerText == "0" && boxtext1[4].innerText =="0" && boxtext1[7].innerText ==""){
        boxtext1[7].innerText = "0";
    }
    else if(boxtext1[6].innerText == "0" && boxtext1[8].innerText== "0" && boxtext1[7].innerText == ""){
        boxtext1[7].innerText = "0";
    }

    //for box8
    else if(boxtext1[2].innerText == "0" && boxtext1[5].innerText =="0" && boxtext1[8].innerText ==""){
        boxtext1[8].innerText = "0";
    }
    else if(boxtext1[6].innerText == "0" && boxtext1[7].innerText== "0" && boxtext1[8].innerText == ""){
        boxtext1[8].innerText = "0";
    }
    else if(boxtext1[0].innerText == "0" && boxtext1[4].innerText== "0" && boxtext1[8].innerText == ""){
        boxtext1[8].innerText = "0";
    }






    //For defence.
    // (FIRST PRIORITY)

    //for box0
    else if(boxtext1[1].innerText == "X" && boxtext1[2].innerText =="X" && boxtext1[0].innerText ==""){
        boxtext1[0].innerText = "0";
    }
    else if(boxtext1[4].innerText == "X" && boxtext1[8].innerText== "X" && boxtext1[0].innerText == ""){
        boxtext1[0].innerText = "0";
    }
    else if(boxtext1[3].innerText == "X" && boxtext1[6].innerText== "X" && boxtext1[0].innerText == ""){
        boxtext1[0].innerText = "0";
    }

    //for BOX1
    else if(boxtext1[0].innerText == "X" && boxtext1[2].innerText =="X" && boxtext1[1].innerText ==""){
        boxtext1[1].innerText = "0";
    }
    else if(boxtext1[4].innerText == "X" && boxtext1[7].innerText== "X" && boxtext1[1].innerText == ""){
        boxtext1[1].innerText = "0";
    }

    //for box2
    else if(boxtext1[1].innerText == "X" && boxtext1[0].innerText =="X" && boxtext1[2].innerText ==""){
        boxtext1[2].innerText = "0";
    }
    else if(boxtext1[4].innerText == "X" && boxtext1[6].innerText== "X" && boxtext1[2].innerText == ""){
        boxtext1[2].innerText = "0";
    }
    else if(boxtext1[5].innerText == "X" && boxtext1[8].innerText== "X" && boxtext1[2].innerText == ""){
        boxtext1[2].innerText = "0";
    }

    //for BOX3
    else if(boxtext1[0].innerText == "X" && boxtext1[6].innerText =="X" && boxtext1[3].innerText ==""){
        boxtext1[3].innerText = "0";
    }
    else if(boxtext1[4].innerText == "X" && boxtext1[5].innerText== "X" && boxtext1[3].innerText == ""){
        boxtext1[3].innerText = "0";
    }

    //for box4
    else if(boxtext1[0].innerText == "X" && boxtext1[8].innerText =="X" && boxtext1[4].innerText ==""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[1].innerText == "X" && boxtext1[7].innerText== "X" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[2].innerText == "X" && boxtext1[6].innerText== "X" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }
    else if(boxtext1[3].innerText == "X" && boxtext1[5].innerText== "X" && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }

    //for BOX5
    else if(boxtext1[3].innerText == "X" && boxtext1[4].innerText =="X" && boxtext1[5].innerText ==""){
        boxtext1[5].innerText = "0";
    }
    else if(boxtext1[2].innerText == "X" && boxtext1[8].innerText== "X" && boxtext1[5].innerText == ""){
        boxtext1[5].innerText = "0";
    }

    //for box6
    else if(boxtext1[0].innerText == "X" && boxtext1[3].innerText =="X" && boxtext1[6].innerText ==""){
        boxtext1[6].innerText = "0";
    }
    else if(boxtext1[2].innerText == "X" && boxtext1[4].innerText== "X" && boxtext1[6].innerText == ""){
        boxtext1[6].innerText = "0";
    }
    else if(boxtext1[7].innerText == "X" && boxtext1[8].innerText== "X" && boxtext1[6].innerText == ""){
        boxtext1[6].innerText = "0";
    }

    //for BOX7
    else if(boxtext1[1].innerText == "X" && boxtext1[4].innerText =="X" && boxtext1[7].innerText ==""){
        boxtext1[7].innerText = "0";
    }
    else if(boxtext1[6].innerText == "X" && boxtext1[8].innerText== "X" && boxtext1[7].innerText == ""){
        boxtext1[7].innerText = "0";
    }

    //for box8
    else if(boxtext1[2].innerText == "X" && boxtext1[5].innerText =="X" && boxtext1[8].innerText ==""){
        boxtext1[8].innerText = "0";
    }
    else if(boxtext1[6].innerText == "X" && boxtext1[7].innerText== "X" && boxtext1[8].innerText == ""){
        boxtext1[8].innerText = "0";
    }
    else if(boxtext1[0].innerText == "X" && boxtext1[4].innerText== "X" && boxtext1[8].innerText == ""){
        boxtext1[8].innerText = "0";
    }

    
    //For defecnce
    // (FOR SECOND PRIORITY)

    //for BOX4 2nd proirity(But it is the first priyority. because first time user put one value in any place, and we should block the middle.)
    else if((boxtext1[0].innerText == "X" || boxtext1[1].innerText == "X" || boxtext1[2].innerText =="X" || boxtext1[3].innerText == "X" || boxtext1[5].innerText =="X" || boxtext1[6].innerText == "X" || boxtext1[7].innerText =="X" || boxtext1[8].innerText =="X") && boxtext1[4].innerText == ""){
        boxtext1[4].innerText = "0";
    }

    //for BOX0 2nd proirity
    else if((boxtext1[1].innerText == "X" || boxtext1[3].innerText == "X" || boxtext1[4].innerText =="X") && boxtext1[0].innerText == ""){
        boxtext1[0].innerText = "0";
    }

    //for BOX5 2nd proirity(We set this here because avoid ambiguity)
    else if((boxtext1[2].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[8].innerText =="X") && boxtext1[5].innerText == ""){
        boxtext1[5].innerText = "0";
    }
    
    //for BOX1 2nd proirity(without this we avoid the ambiguty)
    else if((boxtext1[0].innerText == "X" || boxtext1[2].innerText == "X" || boxtext1[4].innerText =="X") && boxtext1[1].innerText == ""){
        boxtext1[1].innerText = "0";
    }

    //for BOX2 2nd proirity
    else if((boxtext1[1].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[5].innerText =="X") && boxtext1[2].innerText == ""){
        boxtext1[2].innerText = "0";
    }
    
    //for BOX3 2nd proirity
    else if((boxtext1[0].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[6].innerText =="X") && boxtext1[3].innerText == ""){
        boxtext1[3].innerText = "0";
    }

    //for BOX6 2nd proirity
    else if((boxtext1[3].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[7].innerText =="X") && boxtext1[6].innerText == ""){
        boxtext1[6].innerText = "0";
    }

    //for BOX7 2nd proirity
    else if((boxtext1[6].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[8].innerText =="X") && boxtext1[7].innerText == ""){
        boxtext1[7].innerText = "0";
    }

    //for BOX8 2nd proirity
    else if((boxtext1[5].innerText == "X" || boxtext1[4].innerText == "X" || boxtext1[7].innerText =="X") && boxtext1[8].innerText == ""){
        boxtext1[8].innerText = "0";
    }
}

// Game Logic
music.play();
let boxes = document.getElementsByClassName("box");       //Take all dive as an array into "boxes" variable
Array.from(boxes).forEach(element =>{                     //we apply a for each loop on boxes variable, which is an array. thats why we use Array.from() -> for that function we will get this variable as array and we can apply for each loop.
    
    //element means div one by one.
    //boxtext means the text under the div which is come by foreach loop one by one.
    
    let boxtext = element.querySelector('.boxtext');      //element is the array item of those divs by using querySelector on it we get it's span which we want to write.
    element.addEventListener('click', ()=>{               //add eventListener on element, means when we click on the div means box. then
        if(boxtext.innerText === ''){                     //if this span under the div is empty then we                  
                                    
            audioTurn.play();                             //if any one click one the box means div we need a sound effect, and that happen in here.
            boxtext.innerText = "X";                      //For user always turn is x.
            
            turn = changeTurn();                          //For displaying bot turn. we add both place the turn variable.
            
            // Check Win for , is x win?
            checkWin();                                   //we check win after every click on oun div.
            if (!isgameover){                             //check is game over or not is not then set which turn it is. By the way this function will define under the win checking.
                document.getElementsByClassName("info")[0].innerText  = "Turn for " + turn;
            } 


            var delayInMilliseconds = 400; //0.4 second
            setTimeout(function() {
                botTurn();

                turn = changeTurn();  
                
                //Check win for bot, is bot win or not?
                checkWin();                                   //we check win after every click on oun div.
                if (!isgameover){                             //check is game over or not is not then set which turn it is. By the way this function will define under the win checking.
                    document.getElementsByClassName("info")[0].innerText  = "Turn for " + turn;
                } 

            }, delayInMilliseconds);            
        }
    })
})



// Add onclick listener to reset button
reset.addEventListener('click', ()=>{                           //if any one click on reset button then
    let boxtexts = document.querySelectorAll('.boxtext');       //get all span as array into the boxtexts.
    Array.from(boxtexts).forEach(element => {                   //foreach loop on spans
        element.innerText = ""                                  //set all span value null. beacuse we reset the game.
    });
    music.play();                                               //game background music is start playing after i reload the game. because i am playing.
    turn = "X";                                                 //because we reset the game and our game logic say that the initial turn is for x.
    isgameover = false                                          //game is not over.
    document.querySelector(".line").style.width = "0vw";                                        //vanish the line.
    document.getElementsByClassName("info")[0].innerText  = "Turn for " + turn;                 //show turn for x(initialy)
    document.querySelector('.imgbox').getElementsByTagName('img')[0].style.width = "0px"        //vanish the image.
})


















//For MultiUser(play) game.


// let music = new Audio("Sounds/TicTacToe/music.mp3")   //Set the music ito a variable.
// let audioTurn = new Audio("Sounds/TicTacToe/ting.mp3")
// let gameover = new Audio("Sounds/TicTacToe/gameover.mp3")
// let turn = "X"                                        //initial turn will be for x.
// let isgameover = false;                               //game is initially not over.



// // Function to change the turn
// const changeTurn = ()=>{                              //Return the value of which turn.
//     return turn === "X"? "0": "X"                     //if its x turn runing then next will be 0, if not means else it will be turn for x.     
// }

// // Function to check for a win
// const checkWin = ()=>{                                //checkWin is a function which give use the value isgameover or not! then set value that x Won or 0 Won. set the emoji width wich we initially set at 0. Set line position by translate and rotaion and line with.(All those will hapen after winning).
//     let boxtext = document.getElementsByClassName('boxtext');     //get an array of elements of the span means the area of one. means one box. here we get 9 boxs one by one! 
//     let wins = [                                      //This is a 2D array, which has 9 elements. Those elements also containing 6 items where the first three items containg the wining possible set. which condition we say that , it's win. 
//         [0, 1, 2, 5, 5, 0],                           //Here 5 and 5 used for translate(X-axis and Y-axis) and 0 is for rotation(angle). those last three is used to place the line.! where the first roww is win.!
//         [3, 4, 5, 5, 15, 0],
//         [6, 7, 8, 5, 25, 0],
//         [0, 3, 6, -5, 15, 90],
//         [1, 4, 7, 5, 15, 90],
//         [2, 5, 8, 15, 15, 90],
//         [0, 4, 8, 5, 15, 45],
//         [2, 4, 6, 5, 15, 135],
//     ]
//     wins.forEach(e =>{                                                                                                 //We travers by this array! where arrays element one by one come into e. that means first time e = [0, 1, 2, 5, 5, 0]. 
//         if((boxtext[e[0]].innerText === boxtext[e[1]].innerText) && (boxtext[e[2]].innerText === boxtext[e[1]].innerText) && (boxtext[e[0]].innerText !== "") ){    //if any of array 2d (both 3)items of any elements are mathced means [0,1,2] means first row are fill by same element then we can say the element is win.
//             document.querySelector('.info').innerText = boxtext[e[0]].innerText + " Won";                              //Then the text in inofo class will change by the item which are same in 2d arrays inner 3 item(checked by if).                     
//             isgameover = true;                                                                                         //game is finaly over.(If not then we say class info text continue showing which turn it is!)
//             music.pause();                                                                                             //If any one wine then the background music shoud off.
//             gameover.play();                                                                                           //after game over it will play music.
//             document.querySelector('.imgbox').getElementsByTagName('img')[0].style.width = "200px";                    //showing the gif by giving width
//             document.querySelector(".line").style.transform = `translate(${e[3]}vw, ${e[4]}vw) rotate(${e[5]}deg)`     //how the line will be
//             document.querySelector(".line").style.width = "20vw";                                                      //how much line will be width
//         }
//     })
// }




// // Game Logic
// music.play();
// let boxes = document.getElementsByClassName("box");       //Take all dive as an array into "boxes" variable
// Array.from(boxes).forEach(element =>{                     //we apply a for each loop on boxes variable, which is an array. thats why we use Array.from() -> for that function we will get this variable as array and we can apply for each loop.
    
//     //element means div one by one.
//     //boxtext means the text under the div which is come by foreach loop one by one.
    
//     let boxtext = element.querySelector('.boxtext');      //element is the array item of those divs by using querySelector on it we get it's span which we want to write.
//     element.addEventListener('click', ()=>{               //add eventListener on element, means when we click on the div means box. then
//         if(boxtext.innerText === ''){                     //if this span under the div is empty then we
//             boxtext.innerText = turn;                     //we set span the text of turn(which is now running)
//             turn = changeTurn();                          //now the turn become opposite. by using changeTurn function. which we discribe before.
//             audioTurn.play();                             //if any one click one the box means div we need a sound effect, and that happen in here.
//             checkWin();                                   //we check win after every click on oun div.
//             if (!isgameover){                             //check is game over or not is not then set which turn it is. By the way this function will define under the win checking.
//                 document.getElementsByClassName("info")[0].innerText  = "Turn for " + turn;
//             } 
//         }
//     })
// })




// // Add onclick listener to reset button
// reset.addEventListener('click', ()=>{                           //if any one click on reset button then
//     let boxtexts = document.querySelectorAll('.boxtext');       //get all span as array into the boxtexts.
//     Array.from(boxtexts).forEach(element => {                   //foreach loop on spans
//         element.innerText = ""                                  //set all span value null. beacuse we reset the game.
//     });
//     music.play();                                               //game background music is start playing after i reload the game. because i am playing.
//     turn = "X";                                                 //because we reset the game and our game logic say that the initial turn is for x.
//     isgameover = false                                          //game is not over.
//     document.querySelector(".line").style.width = "0vw";                                        //vanish the line.
//     document.getElementsByClassName("info")[0].innerText  = "Turn for " + turn;                 //show turn for x(initialy)
//     document.querySelector('.imgbox').getElementsByTagName('img')[0].style.width = "0px"        //vanish the image.
// })

