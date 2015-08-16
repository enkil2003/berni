/* ========================
Studio Hit => [Alejandro pacheco],
Version => 2.0,
Creado => 4/01/15
======================== */

    // [ Funciones fundamentales ] ====================================================== =>

    // Esta funcion devuelve el array de forma random
    function shuffle(array) {
        var currentIndex = array.length, temporaryValue, randomIndex ;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    // Esta funcion devuelve un valor de un objeto al azar
    function pickRandomProperty(obj) {
        var result;
        var count = 0;
        for (var prop in obj)
            if (Math.random() < 1/++count)
                result = prop;
        return result;
    }

    // Funcion para crear cookies
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    } 

    // Funcion para checar la existencia de la cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
        }
        return "";
    } 

    // <= ====================================================== End: [ funciones fundamentales ]

    // [DOM: 1.1] =================== => 
    $(document).ready(function() {
        
        $( "#login-form" ).draggable();
        
        // Load window
        $(window).load(function(){

        });// Fin load window

        // Resize window
        function resizeWindow() {

        }// Fin resize window

        // Function resize
        var resizeTimer; 
        $(window).resize(function () { 
            if (resizeTimer) { 
                clearTimeout(resizeTimer); } 
            resizeTimer = setTimeout(function() { 
                resizeTimer = null; resizeWindow(); }, 500); 
        });// Fin function resize


    }); // <= =================== End: [DOM]  
    