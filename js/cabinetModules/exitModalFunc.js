const showModal = () => {
    const modalBox = document.querySelector(".exit__modal");
    const body = document.body;
    if (modalBox) {
        modalBox.style.top = "0%";
        body.style.overflowY = "hidden";
    }
}

const closeModal = () => {
    const modalBox = document.querySelector(".exit__modal");
    const body = document.body;
    if (modalBox) {
        modalBox.style.top = "-150%";
        body.style.overflowY = "scroll";
    }
}