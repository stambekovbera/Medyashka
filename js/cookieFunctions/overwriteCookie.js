import getCookie from "./getCookie.js";
import deleteCookie from "./deleteCookie.js";
import setCookie from "./setCookie.js";

const overwriteCookie = (cookieName, cookieValue) => {
    const userID = getCookie('userID');
    const fullname = getCookie('fullname');
    const position = getCookie('position');
    const percentProgress = getCookie('percentProgress');
    const firstBookLastPage = getCookie('firstBookLastPage');
    const secondBookLastPage = getCookie('secondBookLastPage');
    const thirdBookLastPage = getCookie('thirdBookLastPage');
    const fourthBookLastPage = getCookie('fourthBookLastPage');

    deleteCookie('userID');
    deleteCookie('fullname');
    deleteCookie('position');
    deleteCookie('percentProgress');
    deleteCookie('firstBookLastPage');
    deleteCookie('secondBookLastPage');
    deleteCookie('thirdBookLastPage');
    deleteCookie('fourthBookLastPage');

    setCookie('userID', userID, 1);
    setCookie('fullname', fullname, 1);
    setCookie('position', position, 1);
    setCookie('percentProgress', percentProgress, 1);
    setCookie('firstBookLastPage', firstBookLastPage, 1);
    setCookie('secondBookLastPage', secondBookLastPage, 1);
    setCookie('thirdBookLastPage', thirdBookLastPage, 1);
    setCookie('fourthBookLastPage', fourthBookLastPage, 1);

    deleteCookie(cookieName);
    setCookie(cookieName, cookieValue, 1);
}

export default overwriteCookie;