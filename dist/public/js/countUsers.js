"use strict";

countUsers();
var users = setInterval(function () {
    countUsers();
}, 30000);

function countUsers() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        var xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("userCount").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "/count-users", true);
    xmlhttp.send();
}
//# sourceMappingURL=countUsers.js.map