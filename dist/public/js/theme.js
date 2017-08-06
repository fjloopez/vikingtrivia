"use strict";

window.onload = function () {
    var estilos = document.querySelector(".estilos");
    var btn = document.querySelector(".themeButton");

    var isClicked = false;
    btn.onclick = function (e) {
        e.preventDefault();
        isClicked = !isClicked;
        isClicked == true ? estilos.href = "../css/stylesOutside.css" : estilos.href = "../css/stylesInside.css";
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if (this.id === "inside") {
            this.id = "outside";
        } else {
            this.id = "inside";
        }
        console.log(this.id);
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".themeButton").innerHTML = JSON.parse(this.responseText);
            }
        };
        xmlhttp.open("GET", "controllers/theme.controller.php?q=" + this.id, true);
        xmlhttp.send();
    };
};
//# sourceMappingURL=theme.js.map