import getCookie from "../cookieFunctions/getCookie.js";
import overwriteCookie from "../cookieFunctions/overwriteCookie.js";

window.addEventListener("DOMContentLoaded", () => {

    if (getCookie('userID')) {
        const nextPageFirstBook = document.querySelector('.nextFirstBook');
        if (nextPageFirstBook) {
            nextPageFirstBook.addEventListener('click', () => {
                const page = Number(document.querySelector('.page').textContent) + 1;
                if (page > getCookie('firstBookLastPage')) {
                    overwriteCookie("firstBookLastPage", page);
                }
            })
        }

        const nextPageSecondBook = document.querySelector('.nextSecondBook');
        if (nextPageSecondBook) {
            nextPageSecondBook.addEventListener('click', () => {
                const page = Number(document.querySelector('.page').textContent) + 1;
                if (page > getCookie('secondBookLastPage')) {
                    overwriteCookie("secondBookLastPage", page);
                }
            })
        }

        const nextPageThirdBook = document.querySelector('.nextThirdBook');
        if (nextPageThirdBook) {
            nextPageThirdBook.addEventListener('click', () => {
                const page = Number(document.querySelector('.page').textContent) + 1;
                if (page > getCookie('thirdBookLastPage')) {
                    overwriteCookie("thirdBookLastPage", page);
                }
            })
        }

        const nextPageFourthBook = document.querySelector('.nextFourthBook');
        if (nextPageFourthBook) {
            nextPageFourthBook.addEventListener('click', () => {
                const page = Number(document.querySelector('.page').textContent) + 1;
                if (page > getCookie('fourthBookLastPage')) {
                    overwriteCookie("fourthBookLastPage", page);
                }
            })
        }
    }
})
