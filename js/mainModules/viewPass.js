const viewPass = (elem) => {
    const viewInput = elem.parentNode.parentNode.querySelector(".input__password");
    const closedEye = elem.parentNode.querySelector(".closed");
    if (viewInput) {
        viewInput.setAttribute("type", "text");
        elem.style.display = "none";
        closedEye.style.display = "block";
    }
}

const hidePass = (elem) => {
    const viewInput = elem.parentNode.parentNode.querySelector(".input__password");
    const openEye = elem.parentNode.querySelector(".open");
    if (viewInput){
        viewInput.setAttribute("type", "password");
        elem.style.display = "none";
        openEye.style.display = "block";
    }
}