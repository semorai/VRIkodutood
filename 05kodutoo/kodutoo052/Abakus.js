
window.onload = function() {
    var list = document.querySelectorAll('div.bead');
    var i;
    for (i = 0; i < list.length; i = i + 1) {
        list[i].onclick = function() {
            "use strict";
            var asend = window.getComputedStyle(this).cssFloat;

            console.log(asend);

            if (asend === "right") {
                this.style.cssFloat = "left";
            } else {
                this.style.cssFloat = "right";
            }
        }
    }
};