/* ========================
sillyhats.tv,
Version => 2.2.0,
Creado => 19/01/15
======================== */

// Global object
var global = {
    windowHeight:$(window).height(),
    windowWidth:$(window).width(),
    galleryView:false,
    infinityGalleryNavigation:false
}

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
$(document).ready(function(){

    // Click en el boton para scrollear hasta arriba
    $('#button-top-page').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 350);
    });

    // Click en los botones del submenu principal
    $(".navigation-submenu a").click(function(e) {
        e.preventDefault();
        var this_id = $(this).attr('href'),
            page    = $(this).parents('.submenu').parent('li').children('a').attr('href');
        if($(this).parents('.submenu').parent('li').hasClass('active')){
            $('html, body').animate({
                scrollTop: $(this_id).offset().top
            }, 650);
        } else {
            window.location.href = page+this_id;
        }
    });


    // Creo el html del PopUp
    function htmlPopup(){
        var p01 = $('<div id="popup-image"><div class="table"><div class="table-cell"><div id="inner-popup"><a id="close-poup" href="#"><i class="fa fa-times"></i></a><img id="img-popup" src="" /></div></div></div></div>');
        $(p01).appendTo('#wrapper').hide().fadeIn(650);
    }

    // Click en el boton con la clase "popup"
    $('.popup').click(function(e){
        e.preventDefault();
        var altoWindow = $(window).height(),
            imageShow  = $(this).children('img').attr('src');

        // Si no esta visible la galeria creo el html
        if(!$('#popup-image').is(':visible')){
            htmlPopup(); }

        $('#img-popup').attr('src',imageShow);

        $('#close-poup').off('click').click(function(e){
            e.preventDefault();
            $('#popup-image').fadeOut(650,function(){ $(this).remove(); });
        });

        $('#inner-popup img').css('max-height',90*altoWindow/100);

    });

    $('#lost-button-toggle').click(function(e){
        $('#lost-form').stop(true,true).fadeToggle();
        e.preventDefault();
    });

    // Submenu 
    function navigationButtons(){
        $('.submenu').each(function(){
            $(this).attr('style','');
            $(this).parents('li').children('a').children('i').addClass('fa-rotate-180');
        });
        global.windowWidth = $(window).width();
        if(global.windowWidth<=930){
            $('.submenu').parents('li').children('a').children('i').off('click').click(function(){
                if($(this).parents('li').find('.submenu').is(':visible')){
                    $(this).parents('li').find('.submenu').slideUp();
                    $(this).addClass('fa-rotate-180');
                } 
                else {
                    $(this).parents('li').find('.submenu').slideDown();
                    $(this).removeClass('fa-rotate-180');
                }
                return false;
            }); 
        } else if(global.windowWidth>930){
            $('.submenu').off('click');
        }
    }navigationButtons();

    // Gallery calibration
    function galleryCalibration(){
        global.galleryView=true;
        // Obtengo las medidas 
        global.windowHeight = $(window).height();
        var calibracionAlto = 90*global.windowHeight/100;
        calibracionAlto = Math.floor(calibracionAlto);
        var altoFooterGallery = $('#bottom-gallery').outerHeight();
        // Coloco las medidas ha los contenedores de la galeria
        $('#stage').css({
            'max-height':calibracionAlto,
            'padding-bottom':altoFooterGallery });
        $('#stage img').css('max-height',calibracionAlto-70);
        // Al final muestro la galeria
        $('#gallery').css('left',0);
    }

    // Funcion que muestra la imagen correspondiente
    function stageGallery(imagenActual,total,imgArreglo){

        // Convierto a numeros
        total = parseInt(total);
        imagenActual = parseInt(imagenActual);

        // Controles de navegacion en la galeria
        $('#left-gallery').off('click').click(function(){
            var imagenActual = $('#image-stage').attr('data-actual'),
                total = $('#image-stage').attr('data-total');
            imagenActual=parseInt(imagenActual)-1;
            if(imagenActual<0){
                if(global.infinityGalleryNavigation){
                    imagenActual=total; } 
                else {
                    imagenActual=0; }
            }
            stageGallery(imagenActual,total,imgArreglo);
            return false;
        });

        $('#right-gallery').off('click').click(function(){
            var imagenActual = $('#image-stage').attr('data-actual'),
                total = $('#image-stage').attr('data-total');
            imagenActual=parseInt(imagenActual)+1;
            if(imagenActual>total){
                if(global.infinityGalleryNavigation){
                    imagenActual=0; } 
                else {
                    imagenActual=total; }
            }
            stageGallery(imagenActual,total,imgArreglo);
            return false;
        });

        // Cerrar ventana en el boton
        $('#close-gallery').off('click').click(function(e){
            $('#gallery').css('left','-100%');
            global.galleryView=false;
            $("body").off('keydown');
            e.preventDefault();
        });

        $('#overlay-gallery').off('click').click(function(e){
            $('#close-gallery').trigger('click');
            e.preventDefault();
        });

        // Muestro el preloader
        $('#stage').css({
            'background-image': 'url(../img/icons/gallery-preloader.GIF)'
        });

        // Muestro la imagen correspondiente y le agrego sus propiedades
        $('#image-stage').attr({
            'src':imgArreglo[imagenActual].attr('src'),
            'data-actual':imagenActual,
            'data-total':total
        });

        // Muestro el titulo
        $('#title-galeria').text(imgArreglo[imagenActual].attr('title'));

        // Muestro la descripcion en caso de existir
        if(imgArreglo[imagenActual].attr('data-descripcion')){
            $('#description_gallery').text(imgArreglo[imagenActual].attr('data-descripcion')); }

        // Muestro la imagen cuando cargue y oculto el preloader
        $('#image-stage').load(function(){
            $(this).show();
            $('#stage').css({
                'background-image': 'none'
            });
        });

        // Funcion para probar la carga de la imagen
        function testImage(URL) {
            var tester=new Image();
            tester.onerror=imageNotFound;
            tester.src=URL;
        }

        // Funcion para cambiar la imagen si no se pudo cargar
        function imageNotFound() {
            $('#image-stage').attr('src','../interfaz/img/plataforma/image404.jpg');
        }

        testImage($('#image-stage').attr('src'));

        // Funciones con el teclado
        $("body").off('keydown').keydown(function(e){
            if(e.key=='Right'){
                $('#right-gallery').trigger('click'); }
            else if(e.key=='Left'){
                $('#left-gallery').trigger('click'); }
            else if(e.key=='Esc'){
                $('#close-gallery').trigger('click'); }
        });

        // Condiciono la navegacion de la galeria
        if(global.infinityGalleryNavigation!=true){
            // Condiciono la visibilidad de las flechas
            if(imagenActual==0 && total>=1){
                $('#left-gallery').hide();
                $('#right-gallery').show(); }
            else if(imagenActual==total && total>=1){
                $('#left-gallery').show();
                $('#right-gallery').hide(); }
            else if(imagenActual!=0 && imagenActual!=total && total>=1){
                $('#left-gallery').show();
                $('#right-gallery').show(); }
            else if(total==0){
                $('#left-gallery').hide();
                $('#right-gallery').hide(); } 
        }

        // Paso a calibrar la galeria y al final a mostrarla
        galleryCalibration();

    }

    // Creo el html si no existe la galeria
    function galleryHtml(imgArreglo){
        var contenedorPadre = $('#wrapper');
        // Html de la galeria
        var GC1 = $('<div id="gallery" class="transition"></div>'),
            GC2 = $('<div id="overlay-gallery"></div>'),
            GC3 = $('<div id="inner-gallery" class="table"></div>'),
            GC4 = $('<div class="table-cell text-center"></div>'),
            GC5 = $('<div id="stage"></div>'),
            img = $('<img id="image-stage" data-actual="null" data-total="null" src="" alt="" title="">'),
            GC6 = $('<div id="left-gallery"><a id="button-left" href="#"><i class="fa fa-angle-left"></i></a></div>'),
            GC7 = $('<div id="right-gallery"><a id="button-right" href="#"><i class="fa fa-angle-right"></i></a></div>'),
            GC8 = $('<div id="bottom-gallery"><div id="left-bottom-gallery" class="text-center"><p id="title-galeria"></p><p id="description_gallery"></p></div><div id="right-bottom-gallery"><a id="close-gallery" href="#"><i class="fa fa-times-circle"></i></a></div></div>');

        // Agrego los contenedores
        GC1.append(GC3,GC2);
        GC3.append(GC4);
        GC4.append(GC5);
        GC5.append(GC6,GC7,GC8,img); 

        // Agrego la galeria y sus contenedores al #wrapper
        contenedorPadre.append(GC1);

    }

    // Click para mostrar la galeria
    $('.gallery-parent a').click(function(){

        // Agrego un identificador a cada imagen
        var conteo=0,
            imgArreglo = [];
        $(this).parents('.gallery-parent').find("img").each(function(){
            var img = $(this);
            imgArreglo.push(img);
            img.attr('data-id',conteo++);
        });

        // Selecciono la imagen clickeada
        var imagenActual = $(this).children('img').attr('data-id');

        // Guardo el total de imagenes
        var total = conteo-1; 

        // Si no existe la galeria creo el html
        if($('#gallery').is(':visible')!=true){ 
            galleryHtml(imgArreglo); }

        // Creo los eventos en los botones y agrego la imagen
        stageGallery(imagenActual,total,imgArreglo);

        return false;
    });

    // Click para mostrar la galeria en la seccion 'fotos'
    $('.box-slider-parent').click(function(){

        var this_album = $(this).attr('data-album'),
            imagenActual = 0,
            imgArreglo = [];

        if(this_album){

            $.ajax({
                data:{this_album:this_album},
                dataType:'json',
                async:false,
                cache:false,
                type:'POST',
                url: "../interfaz/fotos_ajax.php", 
                success: function(result){

                    // Convierto el contenido del array en objetos html
                    for(var i=0; i<result.imgArreglo.length; i++){
                        var array = result.imgArreglo;
                        var string = $(array[i]);
                        imgArreglo.push(string);
                    }

                    // Si no existe la galeria creo el html
                    if($('#gallery').is(':visible')!=true){ 
                        galleryHtml(imgArreglo); }

                    // Creo los eventos en los botones y agrego la imagen
                    stageGallery(imagenActual,result.total,imgArreglo);

                }
            });

        }
        return false;
    });


    $('.box-slider-parent-video').click(function(){

        var this_video = $(this).attr('data-id');

        // Si no existe el html, lo creo
        if($('#video-player').not(':visible')){
            var c1 = $('<div id="video-player" class="transition"></div>'),
                c2 = $('<div id="background-video"></div>'),
                c3 = $('<div class="table"></div>'),
                c4 = $('<div class="table-cell"></div>'),
                c5 = $('<div id="inner-video-player"></div>');

            c1.append(c2,c3);
            c3.append(c4);
            c4.append(c5);

            $('#wrapper').append(c1);
        }

        if($('#video-player').not(':visible')){
            var iframe = $('<iframe id="video-iframe" src="" frameborder="0"></iframe>');
            $('#inner-video-player').append(iframe);
            $('#video-iframe').attr('src','//player.vimeo.com/video/'+this_video+'?&amp;autoplay=0');
        }

        $('#background-video').off('click').click(function(){
            $('#video-iframe').remove();
            $('#video-player').css('top','-100%');
            return false;
        });

        $('#video-player').css('top',0);

        return false;
    });

    // Muestro y oculto los botones de navegacion, en movil
    $('#button-mobile').click(function(e){
        $('#list-navigation').slideToggle();
        e.preventDefault();
    });

    // En esta funcion calibro los contenedores
    function maquetacion(){
        global.windowHeight = $('#inner-content').outerHeight();
        altoAside = Math.ceil(global.windowHeight);
        // Cuando cargue la imagen separo el footer
        if($('#footer-image').is(":visible")){
            var height = $('#footer-image').height();
            $('#inner-content').css('padding-bottom',height);
            $('aside').css({'min-height':altoAside,'padding-bottom':height});
        }
        else {
            $('#footer-image').show().css('opacity',0);
            var height = $('#footer-image').height();
            $('#inner-content').css('padding-bottom',height);
            $('aside').css({'min-height':altoAside+height,'padding-bottom':height});
            $('#footer-image').show().css('opacity',1);
        }
    } 

    // En esta funcion condiciono el tamanio de la resolucion en x, para ejecutar la funcion correspondiente
    function responsive(){
        global.windowWidth = $(window).width();
        if(global.windowWidth <=800){
            $('#footer-image').show();
            var height = $('#footer-image').outerHeight();
            $('#wrapp-content').css('padding-bottom',height);
        }
        else {
            maquetacion();
        }
    } 

    $(window).resize(function(){

        // Esta funcion recalibra los contenedores
        responsive();

        // Si esta visible la galeria, recalibro las medidas
        if(global.galleryView){
            galleryCalibration(); }

        global.windowWidth = $(window).width();
        if(global.windowWidth<=930){}
        else {
            // Reseteo el nav
            $('#list-navigation').attr('style','');
            navigationButtons(); }

    });

    // Cloud animations
    function cloud(){
        $('#nube1').animate ({
            left: '-=10',
            top: '-=10'
        }, 10000, 'easeInOutCubic', function() {
            $('#nube1').animate ({
                top: '+=10',
                left: '+=10'
            }, 10000, 'easeInOutCubic', function() {
                cloud();
            });
        });
    } cloud();

    function cloud2(){
        $('#nube2').animate ({
            left: '-=15',
            top: '-=5'
        }, 10000, 'easeInOutCubic', function() {
            $('#nube2').animate ({
                top: '+=5',
                left: '+=15'
            }, 10000, 'easeInOutCubic', function() {
                cloud2();
            });
        });
    } cloud2();

    function cloud3(){   
        $('#nube3').animate ({
            left: '-=20',
            top: '-=7'
        }, 10000, 'easeInOutCubic', function() {
            $('#nube3').animate ({
                top: '+=7',
                left: '+=20'
            }, 10000, 'easeInOutCubic', function() {
                cloud3();
            });
        });
    } cloud3();

    // Window load
    $(window).load(function(){

        responsive();

    });

    // Window scroll
    $(window).scroll(function(){

        var scrollTopWindow = $(window).scrollTop();
        if(scrollTopWindow>=300){ 
            $('#button-top-page').css('bottom',0); } 
        else { $('#button-top-page').css('bottom','-100%'); }


    });

});// END: document ready