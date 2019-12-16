var ele=document.getElementById("card");
ele.onclick=setTimeout(func,2000);

function func(){
    alert("Do you wish to continue?");
}

clearTimeout(ele);