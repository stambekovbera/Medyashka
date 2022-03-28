function showAutorization() {
    const autorizForm = document.querySelector(".login__inner-autorization");
    const backBtn = document.querySelector(".login__inner-back");
    const navBar = document.querySelector(".login__inner-nav");
    const messages = document.querySelectorAll(".regMessage");
    const autMessage = document.querySelector(".login__inner-autorization-message");
    const regMessage = document.querySelector(".login__inner-registration-message");
    const loginImg = document.querySelector('.login__img');
    if (autorizForm) {
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        autorizForm.style.right = "50%";
        navBar.style.left = "-150%";
        backBtn.style.right = "80%";
        loginImg.src = "img/loginMedyashka2.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }
}

const showRegistration = () => {
    const regForm = document.querySelector(".login__inner-registration-step");
    const backBtn = document.querySelector(".login__inner-back");
    const navBar = document.querySelector(".login__inner-nav");
    const messages = document.querySelectorAll(".regMessage");
    const autMessage = document.querySelector(".login__inner-autorization-message");
    const regMessage = document.querySelector(".login__inner-registration-message");
    const loginImg = document.querySelector('.login__img');
    if (regForm) {
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        regForm.style.right = "50%";
        navBar.style.left = "-150%";
        backBtn.style.right = "80%";
        loginImg.src = "img/loginMedyashka3.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }
}

const showRecoveryPassword = () => {
    const autorizForm = document.querySelector(".login__inner-autorization");
    const recoveryFirstStep = document.querySelector('.firstStep');
    const backBtn = document.querySelector(".login__inner-back");
    const loginImg = document.querySelector('.login__img');
    if (recoveryFirstStep) {
        autorizForm.style.right = "-150%";
        recoveryFirstStep.style.right = "50%";
        backBtn.style.right = "-100%";
        loginImg.src = "img/recoveryPassImg.png";
    }
}

function backNav(elem) {
    const autorizForm = document.querySelector(".login__inner-autorization");
    const regForms = document.querySelectorAll(".login__inner-registration-step");
    const recoveryPassFirstStep = document.querySelector('.firstStep');
    const recoveryPassSecondStep = document.querySelector('.secondStep');
    const recoveryPassThirdStep = document.querySelector('.thirdStep');
    const navBar = document.querySelector(".login__inner-nav");
    const inputs = document.querySelectorAll(".input__field");
    const messages = document.querySelectorAll(".regMessage");
    const autMessage = document.querySelector(".login__inner-autorization-message");
    const regMessage = document.querySelector(".login__inner-registration-message");
    const loginImg = document.querySelector('.login__img');
    if (autorizForm.style.right === "50%") {
        inputs.forEach((item) => {
            item.value = "";
        });
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        autorizForm.style.right = "-150%"
        navBar.style.left = "0%";
        elem.style.right = "-100%";
        loginImg.src = "img/loginMedyashka1.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }
    regForms.forEach((item) => {
        if (item.style.right === "50%") {
            inputs.forEach((item) => {
                item.value = "";
            });
            messages.forEach((item) => {
                item.style.opacity = "0";
            });
            item.style.right = "-150%"
            navBar.style.left = "0%";
            loginImg.src = "img/loginMedyashka1.png";
            elem.style.right = "-100%";
            if (autMessage) {
                autMessage.remove();
            }
        }
    });

    if (recoveryPassFirstStep.style.right === "50%") {
        inputs.forEach((item) => {
            item.value = "";
        });
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        recoveryPassFirstStep.style.right = "-150%"
        navBar.style.left = "0%";
        elem.style.right = "-100%";
        loginImg.src = "img/loginMedyashka1.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }
    if (recoveryPassSecondStep.style.right === "50%") {
        inputs.forEach((item) => {
            item.value = "";
        });
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        recoveryPassSecondStep.style.right = "-150%"
        navBar.style.left = "0%";
        elem.style.right = "-100%";
        loginImg.src = "img/loginMedyashka1.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }

    if (recoveryPassThirdStep.style.right === "50%") {
        inputs.forEach((item) => {
            item.value = "";
        });
        messages.forEach((item) => {
            item.style.opacity = "0";
        });
        recoveryPassThirdStep.style.right = "-150%"
        navBar.style.left = "0%";
        elem.style.right = "-100%";
        loginImg.src = "img/loginMedyashka1.png";
        if (regMessage) {
            regMessage.remove();
        }
        if (autMessage) {
            autMessage.remove();
        }
    }
}