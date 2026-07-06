let apple=document.getElementById("apple");
let banana=document.getElementById("banana");

let appleScore=0;
let bananaScore=0;
let timeLeft=30;

function randomPosition(fruit){

let x=Math.random()*(window.innerWidth-150);
let y=Math.random()*(window.innerHeight-200);

fruit.style.left=x+"px";
fruit.style.top=y+"px";

}

randomPosition(apple);
randomPosition(banana);

apple.onclick=function(){

appleScore++;

document.getElementById("appleScore").innerHTML=appleScore;

apple.classList.add("blink");

setTimeout(function(){

apple.classList.remove("blink");
randomPosition(apple);

},500);

}

banana.onclick=function(){

bananaScore++;

document.getElementById("bananaScore").innerHTML=bananaScore;

banana.classList.add("blink");

setTimeout(function(){

banana.classList.remove("blink");
randomPosition(banana);

},500);

}

let timer=setInterval(function(){

timeLeft--;

document.getElementById("timer").innerHTML=timeLeft;

if(timeLeft==0){

clearInterval(timer);

apple.style.pointerEvents="none";
banana.style.pointerEvents="none";

let winner=document.getElementById("winner");

if(appleScore>bananaScore){

winner.innerHTML="🏆 Apple Wins!";

}
else if(bananaScore>appleScore){

winner.innerHTML="🏆 Banana Wins!";

}
else{

winner.innerHTML="🤝 Match Draw!";

}

document.getElementById("playAgain").style.display="block";

}

},1000);

function restartGame(){

location.reload();

}

