let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () => {
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () => {
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () => {
   profile.classList.remove('active');
   navbar.classList.remove('active');
   closepopup();
}

let popup = document.getElementById("popup");

window.onload = (event) => {
   openpopup();
};

function openpopup() {
   popup.classList.add("popupdown");
};

function closepopup() {
   popup.classList.remove("popupdown");
}
