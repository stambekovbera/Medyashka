function showLogin() {
    const loginBox = document.querySelector(".login");
    const inputs = document.querySelectorAll(".input__field");
    const autMessage = document.querySelector(".login__inner-autorization-message");
    const regMessage = document.querySelector(".login__inner-registration-message");
    if (loginBox) {
        inputs.forEach((item) => {
            item.value = "";
        });
        loginBox.style.left = "0%";
        if (regMessage){
            regMessage.remove();
        }
        if (autMessage){
            autMessage.remove();
        }
    }
}

function closeLogin() {
    const loginBox = document.querySelector(".login");
    const inputs = document.querySelectorAll(".input__field");
    const backBtn = document.querySelector(".login__inner-back");
    const autMessage = document.querySelector(".login__inner-autorization-message");
    const regMessage = document.querySelector(".login__inner-registration-message");
    if (loginBox) {
        inputs.forEach((item) => {
            item.value = "";
        });
        loginBox.style.left = "-100%";
        backBtn.click();
        if (regMessage){
            regMessage.remove();
        }
        if (autMessage){
            autMessage.remove();
        }
    }
}