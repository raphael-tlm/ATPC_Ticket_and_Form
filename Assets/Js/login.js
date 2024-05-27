if(typeof document.getElementById("popup") != undefined){
    const popup = document.getElementById("popup");
    
    window.onload = function(){
        popup.style.display = "flex";
    }

    document.getElementById("close").addEventListener("click", function(){
        popup.style.display = "none";
    });
}