if(typeof(document.getElementById("login")) != 'undefined' && document.getElementById("login") != null){
    document.getElementById("login").addEventListener("click", function(){
        window.location.href = "login.php";
    });
}
if(typeof(document.getElementById("register")) != 'undefined' && document.getElementById("register") != null){
    document.getElementById("register").addEventListener("click", function(){
        window.location.href = "register.php";
    });
}