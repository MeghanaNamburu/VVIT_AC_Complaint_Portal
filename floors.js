let navbar = document.querySelector('.navbar');

window.onscroll = () =>{
    navbar.classList.remove('active');
}

document.querySelector('#menu-btn').onclick = ()=>{
    navbar.classList.toggle('active');
}