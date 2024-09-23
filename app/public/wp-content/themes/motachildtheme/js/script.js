     // Modal handling
    var modal = document.getElementById("contactModal");
    var closeBtn = document.getElementsByClassName("close")[0];
    var contactLink = document.querySelector('a[href="#contactModal"]');

    contactLink.onclick = function() {
        modal.style.display = "block";
    }

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
