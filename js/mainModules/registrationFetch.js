import setCookie from "../cookieFunctions/setCookie.js";

const continueConfirm = () => {
    const regSecond = document.querySelector(".reg__second");
    const confirmBox = document.querySelector('.login__inner-confirm');
    const backBtn = document.querySelector(".login__inner-back");

    regSecond.style.right = "-150%";
    confirmBox.style.right = "50%";
    backBtn.style.right = "-100%";
}

const registrationFetch = () => {
    const form = document.querySelector(".login__inner-registration");
    const inputs = document.querySelectorAll(".login__inner-registration-input");

    const message = {
        incorrectData: "Что-то пошло не так, проверьте ваш интернет...",
    }

    const clearInputs = () => {
        inputs.forEach((item) => {
            item.value = "";
        })
    }

    const postData = async (url, data) => {
        let res = await fetch(url, {
            method: "POST", body: data,
        });
        return await res.text();
    }
    form.addEventListener("submit", (item) => {
        item.preventDefault();

        let messageField = document.createElement("p");

        const loginForm = document.querySelector(".login__inner");
        messageField.setAttribute("class", "login__inner-registration-message");

        const regPassword = document.getElementById('regPass');
        const regEmail = document.getElementById('regEmail');

        let params = new FormData();
        params.set('email', regEmail.value);
        params.set('pass', regPassword.value);

        const formData = new FormData(form);

        postData("../../php/mainModules/registration.php", formData)
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
                    postData("../../php/mainModules/autorization.php", params)
                        .then(res => {
                            res = JSON.parse(res);
                            setCookie("userID", res['userID'], 1);
                            setCookie("fullname", res['fullname'], 1);
                            setCookie("position", res['position'], 1);
                            setCookie("percentProgress", res['percentProgress'], 1);
                            setCookie("firstBookLastPage", res['firstBookLastPage'], 1);
                            setCookie("secondBookLastPage", res['secondBookLastPage'], 1);
                            setCookie("thirdBookLastPage", res['thirdBookLastPage'], 1);
                            setCookie("fourthBookLastPage", res['fourthBookLastPage'], 1);
                            const userNameBox = document.querySelector('.fullname__user');
                            userNameBox.textContent = res['fullname'];
                        })
                        .catch(e => {
                            console.log(e)
                        });
                    continueConfirm();
                }
            })
            .catch(() => {
                messageField.textContent = message.incorrectData;
            })
            .finally(() => {
                clearInputs();
                setTimeout(() => {
                    messageField.remove();
                }, 5000);
            });
    });
}

window.addEventListener("DOMContentLoaded", () => {
    registrationFetch();
});