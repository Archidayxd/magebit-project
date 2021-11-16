function sendData(){
    let email = document.getElementById("email").value
    let httpr = new XMLHttpRequest();
    httpr.open("POST", "getdata.php", true)
    httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    httpr.onreadystatechange=function(){
        if(httpr.readyState==4 && httpr.status==200){
            document.getElementById("status").innerText=httpr.responseText
        }
    }
    httpr.send("email="+email)
}