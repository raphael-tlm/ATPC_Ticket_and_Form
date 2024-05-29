const chatting = document.querySelector('.chatting');
const ui = document.querySelector('#ui');

const list = document.querySelector('.list');

onload =() => {
    chatting.style.display = 'flex';
    chatting.scrollTop += chatting.scrollHeight;

}

chatting.addEventListener('wheel', function(event) {
    this.scrollTop += event.deltaY;
});



list.addEventListener("wheel", function(event){
    this.scrollLeft += event.deltaY;
});
