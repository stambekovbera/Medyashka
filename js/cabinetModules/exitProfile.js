import deleteCookie from "../cookieFunctions/deleteCookie.js";

window.addEventListener("DOMContentLoaded", () => {
    const exitBtn = document.querySelector(".exitBtn");
    exitBtn.addEventListener("click", () => {
        deleteCookie("position");
        deleteCookie("userID");
        deleteCookie("fullname");
        deleteCookie("percentProgress");
        deleteCookie("firstBookLastPage");
        deleteCookie("secondBookLastPage");
        deleteCookie("thirdBookLastPage");
        deleteCookie("fourthBookLastPage");
        location.href = '../../index.php';
    })
});