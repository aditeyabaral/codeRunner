//javascript functionality for DOM manipulation
{
var head=document.getElementById("head");


function randomColor(){
    var letters = '0123456789ABCDEF';
    var color="#";
    for(var i=0;i<6;i++)
    {
        color+=letters[Math.floor(Math.random()*16)];
    }
    return color;
}

function change()
{
    head.textContent.style.color=randomColor();
}

setInterval(change,2000);
}




/*const side=document.querySelector("section");
const para=document.createElement('p');
para.textContent='We believe that we can instill a different learning experience.';

side.appendChild(para);

const text=document.createTextNode('-through which we aim to mirror a practical version of learning.');
const linkPara=document.querySelector("p");
linkPara.appendChild(text);*/
