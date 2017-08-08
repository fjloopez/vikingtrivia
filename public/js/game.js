window.onload = function(){
    var btn = document.querySelector(".play_a_laravel");


    btn.onclick = function(e){
        e.preventDefault();
        if (btn.value === 0){
            this.id = "wrong";
        }else{
            this.id = "correct";
        }


        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.querySelector(".play_a_laravel").innerHTML = JSON.parse(this.responseText);
            }
        };
        xmlhttp.open("GET","game-status?q="+this.id,true);
        xmlhttp.send();
    }
}