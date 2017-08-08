"use strict";

window.onload = function () {
    var estilos = document.querySelector(".estilos");
    var btn = document.querySelector(".themeButton");

    btn.onclick = function (e) {
        e.preventDefault();

        //si el estilo actual es inside, cambio el css a outside
        if (this.id === "inside") {
            this.id = "outside";
            estilos.href = "../css/stylesOutside.css";
        } else {
            //si el estilo actual es outside, cambio el css a inside
            this.id = "inside";
            estilos.href = "../css/stylesInside.css";
        }

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.querySelector(".themeButton").innerHTML = JSON.parse(this.responseText);
            }
        };
        xmlhttp.open("GET", "set-theme?q=" + this.id, true);
        xmlhttp.send();
    };
};
//# sourceMappingURL=theme.js.map