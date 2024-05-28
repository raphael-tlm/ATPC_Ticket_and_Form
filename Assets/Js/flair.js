const flairList = document.getElementById("flairList")
const flairAdd = document.getElementById("addFlair")
const flairDisplay = document.getElementById("flairDisplay")

window.addEventListener("load", () => {
    hideNonUseFlair()
    hideDisplayFlair()
});

flairDisplay.childNodes.forEach((flair) => {
    addEventAdd(flair);
});

function hideNonUseFlair(){
    flairList.childNodes.forEach((flair) => {
        if(flair.className.includes("flair") && !flair.className.includes("active")){
            flair.style.display = "none"
        }
    });
}

function showUseFlair(){
    flairList.childNodes.forEach((flair) => {
        if(flair.className.includes("flair") && flair.className.includes("active")){
            flair.style.display = "block"
        }
    });
}

function hideDisplayFlair(){
    flairDisplay.childNodes.forEach((flair) => {
        flair.style.display = "none"
    });
}

function showNonUseDisplayFlair(){
    flairDisplay.childNodes.forEach((flair) => {
        if(flair.className.includes("flair") && !flair.className.includes("active")){
            addEventAdd(flair);
            flair.style.display = "block";
        }
    });
}

function addEventAdd(flair){
    
}

flairAdd.addEventListener("click", () => {
    showNonUseDisplayFlair();
});
