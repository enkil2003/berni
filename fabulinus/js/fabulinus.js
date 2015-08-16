/* ========================
Version => 2.0,
Creado => 19/01/15
======================== */
$(document).ready(function(){

    // Mapa de google
    if($("#google-map").is(':visible')){
        $("#google-map").gmap3({
            marker:{
                values:[
                    {address:"Buenos Aires 550, 1617 General Pacheco", data:"Colegio", options:{icon: "//fabulinusberni.com/2015/interfaz/img/icons/marker.png"}}
                ]
            },
            map:{
                options:{
                    mapTypeControl: false,
                    zoom: 16, // zoom del mapa
                    mapTypeId: "sillyhats.tv",
                    navigationControl: false,
                    scrollwheel: true,
                    streetViewControl: false
                }
            },
            styledmaptype:{
                id: "sillyhats.tv",
                options:{
                    name: "sillyhats.tv"
                },
                styles: [
                    {
                        elementType: "all",
                        stylers: [
                            { hue: "#83BAC7" },
                            { saturation: 10 },
                            { lightness: 0 },
                            {gamma: 1}
                        ]
                    }
                ]
            }
        });
    }

    // Sliders de fotos y video
    if($('.slider-parent').is(':visible')){
        $('.slider-parent').bxSlider({
            mode:'horizontal',
            pager: false,
            nextText:'',
            prevText:'',
            infiniteLoop: false
        });
    }

});

