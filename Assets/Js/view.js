const chatting = document.querySelector('.chatting');
const ui = document.querySelector('#ui');

onload =() => {
    chatting.style.display = 'flex';
    chatting.scrollTop += chatting.scrollHeight;

}

chatting.addEventListener('wheel', function(event) {
    chatting.scrollTop += event.deltaY;
});

