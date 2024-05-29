const flairs = document.querySelector('#flair');
const chat = document.querySelector('#chat');
const MC = document.querySelector('#MC');

flairs.addEventListener('wheel', (e) => {
    e.preventDefault();
    flairs.scrollLeft += e.deltaY;
});

chat.addEventListener('wheel', (e) => { 
    e.preventDefault();
    chat.scrollTop += e.deltaY;
});

onload = () => {
    MC.style.display = 'flex';
    chat.scrollTop = chat.scrollHeight;
}