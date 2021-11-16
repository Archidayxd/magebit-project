let form = document.getElementById("form");
let errorElement = document.getElementById("error")
form.classList.add("valid");
let emailCheck = document.getElementById("email");
let checkBox = document.getElementById("checkBox");
let subButton = document.getElementById("subButton");


window.onload = function() {
    emailCheck.value = "";
    checkBox.checked = false;
    }

function checkEmail(){


let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


if(emailCheck.value.match(pattern)){
    form.classList.add("valid")
    form.classList.remove("invalid")
    subButton.disabled = false
    errorElement.textContent = ""
    if(/.co\s*$/.test(emailCheck.value)){
        form.classList.add("invalid")
        form.classList.remove("valid")
        subButton.disabled = true;
        errorElement.textContent = "We are not accepting subscriptions from Colombia emails"
    }
} else{
    form.classList.add("invalid")
    form.classList.remove("valid")
    subButton.disabled = true;
    errorElement.textContent = "Please provide a valid e-mail address"
}
}

form.addEventListener("submit" , (e) =>{
    let errorMessages=[]
    if(emailCheck.value == "" || emailCheck.value==null){
        errorMessages.push("Please provide a valid e-mail address")
        // console.log(errorMessages)
    }

    if(!checkBox.checked){
        errorMessages.push("You must accept the terms and conditions")
    }

    if(errorMessages.length>0){
        e.preventDefault()
        errorElement.innerText = errorMessages.join("\r\n")
        form.classList.add("invalid")
        form.classList.remove("valid")
    } else{
        e.preventDefault()
        document.getElementById("title").innerText = "Thanks for subscribing!" 
        document.getElementById("subtitle").innerText = "You have successfully subscribed to our email listing. Check your email for the discount code." 
        document.getElementById("form").style.display = "none"
        document.getElementById("checkBox").style.display = "none"
        document.getElementById("checkboxLabel").style.display = "none"
        document.getElementById("checkboxFake").style.display = "none"
        document.getElementById("succesImage").style.display = "block"
        document.getElementById("socialIcons").classList.add("upper")
    }
})