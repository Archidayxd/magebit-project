let form = document.getElementById("form")
let errorElement = document.getElementById("error")
form.classList.add("valid")

window.onload = function() {
    document.getElementById('email').value = "";
    document.getElementById("checkBox").checked = false;
    }

function checkEmail(){

let emailCheck = document.getElementById("email").value;

let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


if(emailCheck.match(pattern)){
    form.classList.add("valid")
    form.classList.remove("invalid")
    document.getElementById("subButton").disabled = false
    document.getElementById("error").textContent = ""
    if(/.co\s*$/.test(emailCheck)){
        form.classList.add("invalid")
        form.classList.remove("valid")
        document.getElementById("subButton").disabled = true;
        document.getElementById("error").textContent = "We are not accepting subscriptions from Colombia emails"
    }
} else{
    form.classList.add("invalid")
    form.classList.remove("valid")
    document.getElementById("subButton").disabled = true;
    document.getElementById("error").textContent = "Please provide a valid e-mail address"
}
}

// function termsChanged(){
//     if(document.getElementById("checkBox").checked){
//         document.getElementById("subButton").disabled = false;
//     } else{
//         document.getElementById("subButton").disabled = true;
//     }
// }

form.addEventListener("submit" , (e) =>{
    let errorMessages=[]
    if(document.getElementById("email").value == "" || document.getElementById("email").value==null){
        errorMessages.push("Please provide a valid e-mail address")
        // console.log(errorMessages)
    }

    if(!document.getElementById("checkBox").checked){
        errorMessages.push("You must accept the terms and conditions")
    }

    if(errorMessages.length>0){
        e.preventDefault()
        errorElement.innerText = errorMessages.join("\r\n")
        form.classList.add("invalid")
        form.classList.remove("valid")
    }
})

// function subButtonTest(event){
//     if(document.getElementById("email").value == "" || document.getElementById("email").value==null){
//     document.getElementById("error").textContent = "Please provide a valid e-mail address"
//     console.log("yes")
    
//     }
// }