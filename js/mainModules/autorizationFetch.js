import setCookie from "../cookieFunctions/setCookie.js";

const autorizationFetch = () => {
    const form = document.querySelector(".login__inner-autorization");
    const inputs = document.querySelectorAll(".login__inner-autorization-input");

    const message = {
        incorrectData: "Неправильный email или пароль!"
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

        let incorrectMessage = document.createElement("p");
        incorrectMessage.setAttribute("class", "login__inner-autorization-message");
        form.appendChild(incorrectMessage);

        const formData = new FormData(form);

        postData("../../php/mainModules/autorization.php", formData)
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
                location.href = "../../cabinet.php";
            })
            .catch(() => {
                incorrectMessage.textContent = message.incorrectData;
            })
            .finally(() => {
                clearInputs();
                setTimeout(() => {
                    incorrectMessage.remove();
                }, 2000);
            });
    });
}

window.addEventListener("DOMContentLoaded", () => {
    autorizationFetch();
});