document.querySelectorAll(".menu_link").forEach((el) => {
    if (window.location.pathname.indexOf(el.getAttribute("href")) > -1) {
        el.classList.add("active");
    }
});

// Бургер меню
const iconMenu =  document.querySelector('.menu_icon');
const menuBody = document.querySelector('.menu_body');
const menuLinks = document.querySelectorAll('.menu_link');
if (iconMenu) {
    iconMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active'); 
        menuBody.classList.toggle('_active');
    });
}

if (menuLinks) {
for (const menuLink of menuLinks){
    menuLink.addEventListener("click", function(e){
        document.body.classList.remove('_lock');
        iconMenu.classList.toggle('_active'); 
        menuBody.classList.toggle('_active');
});
}
}