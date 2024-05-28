const flairList = document.getElementById("flairList")
const flairAdd = document.getElementById("addFlair")
const flairDisplay = document.getElementById("flairDisplay")
const hiddenItems = document.getElementById("hiddenItems")

function addFlair(flair){
    flair.style.display = "block";
    flairList.appendChild(flair);
    C_hiddenFlair(flair);
    hideDisplay();
    flair.removeEventListener("click", function(){
        addFlair(flair);
    });
    flair.addEventListener("click", function(){
        removeFlair(flair);
    });
}

function removeFlair(flair){
    flairDisplay.appendChild(flair);
    R_hiddenFlair(flair);
    flair.removeEventListener("click", function(){
        removeFlair(flair);
    });
    flair.addEventListener("click", function(){
        addFlair(flair);
    });
}

function C_hiddenFlair(flair){
    let hiddenFlair = document.createElement("input");
    hiddenFlair.type = "hidden";
    hiddenFlair.name = "Flair[]";
    hiddenFlair.value = flair.dataset.id;
    hiddenItems.appendChild(hiddenFlair);
}

function R_hiddenFlair(flair) {
    Array.from(hiddenItems.children).forEach(hiddenFlair => {
        if(hiddenFlair.value === flair.dataset.id){
            hiddenItems.removeChild(hiddenFlair);
        }
    });
}

function showDisplay(){ 
    flairDisplay.style.display = "flex";
}

function hideDisplay(){
    flairDisplay.style.display = "none";
}

flairAdd.addEventListener("click", function(){
    showDisplay();
})

flairDisplay.childNodes.forEach(flair => {
    flair.addEventListener("click", function(){
        addFlair(flair);
    })
});

onload = function(){
    flairDisplay.style.display = "none";
}
    
