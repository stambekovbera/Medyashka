import getCookie from "../cookieFunctions/getCookie.js";
import overwriteCookie from "../cookieFunctions/overwriteCookie.js";

const postData = async (url) => {
    let res = await fetch(url, {
        method: "POST",
    });
    return await res.text();
}

const mathProgressPercent = () => {
    postData("../../php/mathProgressPercent/mathPercent.php")
        .then(res => {
            overwriteCookie("percentProgress", res);

            const setProgress = (percent) => {
                progressCircle.style.strokeDashoffset = String(circumference - (percent / 100) * circumference);
            }

            const userPercentProgress = getCookie("percentProgress");

            let progressCircle = document.querySelector(".main__inner-profile-info-progress");
            let radius = progressCircle.r.baseVal.value;
            let circumference = radius * 2 * Math.PI;
            progressCircle.style.strokeDasharray = String(circumference);

            setProgress(userPercentProgress);
        })
}


window.addEventListener("DOMContentLoaded", () => {
    mathProgressPercent();
})