//const RainbowColors = ["Red","Green", "Yellow", "indigo","violet","blue","orange"];

//use HEX color codes to make it work
const RainbowColors = ["#FF0000","#00FF00","#ffff00","#4b0082","#9400d3", "#0000ff","#ff7f00"]; 
let counter = 0;
var Button = document.getElementById("disco1");

function Color_Change(){
   Button.style.backgroundColor = RainbowColors[counter];
    counter++;
    console.log(counter);
    if (counter === RainbowColors.length)
    {
        counter = 0;
        return;
    }
}


Button.addEventListener("click",Color_Change());