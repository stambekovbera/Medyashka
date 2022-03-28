const continueFunc = (elem) => {
    const regFirst = document.querySelector(".reg__first");
    const regSecond = document.querySelector(".reg__second");
    const inputPass = elem.parentNode.querySelector("#regPass");
    const inputEmail = elem.parentNode.querySelector("#regEmail");

    if (inputPass.value != "" && inputEmail.value != "") {
        regFirst.style.right = "-150%";
        regSecond.style.right = "50%";
    } else {
        if (inputPass.value == "" && inputEmail.value == "") {
            const messages = document.querySelectorAll(".regMessage");
            messages.forEach((item) => {
                item.style.opacity = "1";
            });
        } else if (inputEmail.value == "") {
            const emailMessage = inputEmail.parentNode.querySelector(".message__email");
            emailMessage.style.opacity = "1";
        } else if (inputPass.value == "") {
            const passMessage = inputPass.parentNode.querySelector(".message__pass");
            passMessage.style.opacity = "1";
        }
    }
}