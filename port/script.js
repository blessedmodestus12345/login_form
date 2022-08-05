let showTime=document.getElementById("time");
function getTime(){
    let hr=new Date().getHours();
let min=new Date().getMinutes();
let sec=new Date().getSeconds();
let mili=new Date().getMilliseconds();

    if(mili<10){
        mili="0"+mili;
    }
    if(sec<10){
    sec="0"+sec;
    }
    if(min<10){
        min="0"+min;
    }
    if(hr<10){
        hr="0"+hr;
    }
    // let period="";
    if(hr>=12){
        period="PM";
    }else{
        period="AM";
    }
    showTime.textContent=hr +":" +min+ ":" +sec+ ":"+mili+":"+period;
setTimeout("getTime()",100)
};

// let username= document.getElementById("user");
// let password= document.getElementById("pass");
//  password.value= "blessed";
//  username.value="modestus";

// const loginBtn=document.getElementById("login_btn");
// loginBtn.addEventListener("click", function(){
// if(username==true && password==true){
//     return ""

// }
// else{
//     alert("invalid input!!!")
// }
// })

