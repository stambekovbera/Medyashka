function tabsFunction(elem) {
    const previousElem = elem.previousElementSibling;
    const nextElem = elem.nextElementSibling;
    const tabElem = elem.querySelector('.infoPers');
    if (previousElem) {
        previousElem.style.left = "25%"
        const tabPreviousElem = previousElem.querySelector(".infoPers")
        tabPreviousElem.style.left = "-1000%";
        const secondPreviousElem = previousElem.previousElementSibling;
        if (secondPreviousElem) {
            secondPreviousElem.style.left = "25%"
            const tabSecondPreviousElem = secondPreviousElem.querySelector('.infoPers')
            tabSecondPreviousElem.style.left = "-1000%";
        }
    }
    if (nextElem) {
        nextElem.style.left = "50%"
        const tabNextElem = nextElem.querySelector('.infoPers');
        tabNextElem.style.left = "-1000%";
        const secondNextElem = nextElem.nextElementSibling;
        if (secondNextElem) {
            secondNextElem.style.left = "50%"
            const tabSecondNextElem = secondNextElem.querySelector('.infoPers')
            tabSecondNextElem.style.left = "-1000%";
        }
    }
    elem.style.left = "50%";
    tabElem.style.left = "-190%";
}
document.addEventListener("DOMContentLoaded", () => {
    const clickElem = document.querySelector('.main__inner-content-zolotinka');
    clickElem.click();
});