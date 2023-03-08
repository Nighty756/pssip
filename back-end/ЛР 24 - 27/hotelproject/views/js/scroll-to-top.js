const scrollBtn=document.querySelector(".scroll-to-top");
const refreshButtonVisibility=()=>{
    if (document.documentElement.scrollTop<=800){
        scrollBtn.style.display="none";
    } else {
        scrollBtn.style.display="block";
    }
};
refreshButtonVisibility();
scrollBtn.addEventListener("click", ()=>{


window.scrollTo({
    top: 0,
    behavior: "smooth"
});
});

document.addEventListener("scroll", (e)=> {
    refreshButtonVisibility();
});