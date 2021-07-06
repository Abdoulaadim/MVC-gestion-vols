document.addEventListener("DOMContentLoaded", function(event) {




    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        //Si un seul argument est présent : change la présence d'une classe dans la liste.
        //Si la classe existe, alors la supprime et renvoie false, dans le cas inverse, ajoute cette classe et retourne true.
        //Si le second argument est présent : Si l'argument force est à true,
        // ajoute cette classe, si l'argument est à false, la supprime.




        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                    // change icon
                toggle.classList.toggle('bx-x')
                    // add padding to body
                bodypd.classList.toggle('body-pd')
                    // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active')) //Supprime les classes spécifiées.
            this.classList.add('active') //Ajoute les classes spécifiées. Si une classe est déjà assignée en attribut de cet élément, elle est ignorée.
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
});