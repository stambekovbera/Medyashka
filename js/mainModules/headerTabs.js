const bodyElem = document.body;
const menuBtn = document.querySelector(".main__header-menu");
const menu = document.querySelector(".header");
const backBtn = document.querySelector(".header__inner-nav-logo");

const autMessage = document.querySelector(".login__inner-autorization-message");
const regMessage = document.querySelector(".login__inner-registration-message");
if (menuBtn) {
    menuBtn.addEventListener("click", () => {
        menu.style.left = "0";
        bodyElem.style.overflowY = "hidden";
        menuBtn.style.transform = 'scale(0)';
        if (regMessage){
            regMessage.remove();
        }
        if (autMessage){
            autMessage.remove();
        }
    })
}
if (backBtn) {
    backBtn.addEventListener("click", () => {
        menu.style.left = "-100%";
        bodyElem.style.overflowY = "auto";
        menuBtn.style.transform = 'scale(1)';
        if (regMessage){
            regMessage.remove();
        }
        if (autMessage){
            autMessage.remove();
        }
    })
}