import setCookie from "../cookieFunctions/setCookie.js";
import deleteCookie from "../cookieFunctions/deleteCookie.js";

const postData = async (url, data) => {
    let res = await fetch(url, {
        method: "POST", body: data,
    });
    return await res.text();
}

const recoverySecondStep = () => {
    const recoveryFirstStep = document.querySelector('.firstStep');
    const recoverySecondStep = document.querySelector('.secondStep');
    const input = document.getElementById('emailRec');

    if (input.value === "") {
        const emailMessage = input.parentNode.querySelector(".message__email");
        emailMessage.style.opacity = "1";
    } else {
        let params = new FormData();
        params.set("email", input.value);

        let messageField = document.createElement("p");

        const loginForm = document.querySelector(".login__inner");
        messageField.setAttribute("class", "login__inner-registration-message");

        postData("../../php/mainModules/verifyEmail.php", params)
            .then(res => {
                res = JSON.parse(res);
                if (!res['status']) {
                    const backBtn = document.querySelector(".login__inner-back");
                    backBtn.click();
                    setTimeout(() => {
                        loginForm.appendChild(messageField);
                        messageField.textContent = res['message'];
                    }, 200)
                } else {
                    if (recoveryFirstStep) {
                        recoveryFirstStep.style.right = "-150%";
                        recoverySecondStep.style.right = "50%";
                    }
                    setCookie("recoveryPassEmail", input.value, 1);
                }
            })
    }
}
const recoveryThirdStep = () => {
    const recoverySecondStep = document.querySelector('.secondStep');
    const recoveryThirdStep = document.querySelector('.thirdStep');
    const input = document.getElementById('passRec');

    if (input.value === "") {
        const emailMessage = input.parentNode.querySelector(".codeMessage");
        emailMessage.style.opacity = "1";
    } else {
        let params = new FormData();
        params.set("code", input.value);

        let messageField = document.createElement("p");

        const loginForm = document.querySelector(".login__inner");
        messageField.setAttribute("class", "login__inner-registration-message");

        postData("../../php/mainModules/verifyCode.php", params)
            .then(res => {
                res = JSON.parse(res);
                if (!res['status']) {
                    const backBtn = document.querySelector(".login__inner-back");
                    backBtn.click();
                    deleteCookie('recoveryPassEmail');
                    setTimeout(() => {
                        loginForm.appendChild(messageField);
                        messageField.textContent = res['message'];
                    }, 200)
                } else {
                    if (recoverySecondStep) {
                        recoverySecondStep.style.right = "-150%";
                        recoveryThirdStep.style.right = "50%";
                    }
                }
            })
    }
}
const recoveryLastStep = () => {
    const input = document.getElementById('newPass');

    if (input.value === "") {
        alert("Введите новый пароль!")
    } else {
        let params = new FormData();
        params.set("newPass", input.value);

        let messageField = document.createElement("p");

        const loginForm = document.querySelector(".login__inner");
        messageField.setAttribute("class", "login__inner-registration-message");

        postData("../../php/mainModules/newPassword.php", params)
            .then(res => {
                res = JSON.parse(res);
                if (res['status']) {
                    const backBtn = document.querySelector(".login__inner-back");
                    backBtn.click();
                    deleteCookie('recoveryPassEmail');
                    setTimeout(() => {
                        loginForm.appendChild(messageField);
                        messageField.textContent = res['message'];
                    }, 200)
                }
            })
    }
}

const firstStepBtn = document.querySelector('.firstStepBtn');
const secondStepBtn = document.querySelector('.secondStepBtn');
const thirdStepBtn = document.querySelector('.thirdStepBtn');

firstStepBtn.addEventListener('click', recoverySecondStep);
secondStepBtn.addEventListener('click', recoveryThirdStep);
thirdStepBtn.addEventListener('click', recoveryLastStep);