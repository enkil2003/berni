/* ========================
Studio Hit => [Alejandro pacheco],
Version => 2.0,
Creado => 4/01/15
======================== */
$(document).ready(function(){

    $('.right-bttn-video').click(function(e){
        e.preventDefault();
            var id_video = $(this).parents('.video-box').attr('data-id'),
                this_bttn = $(this);

        
        $.ajax({
            url: "ajax/ajax_delete_video.php",
            type: "POST",             
            data:{ id_video:id_video }, 
            cache: false,         
            success: function(data){
                this_bttn.parents('.video-box').fadeOut(); }
        });
    });

    $('#guardar-video').click(function(e){
        e.preventDefault();
        var school = $(this).attr('data-school'),
            id_video = $('#video_upload').val();

        $.ajax({
            url: "ajax/ajax_add_video.php",
            type: "POST",             
            data:{ school:school, id_video:id_video }, 
            cache: false,         
            success: function(data){
                location.reload(); }
        });
    });

    $('#video_upload').keyup(function(){
        var text = $(this).val();
        if(text){
            $('#guardar-video').removeClass('inactive');
        } else {
            $('#guardar-video').addClass('inactive');
        }
    });

    $('.add-more-videos').click(function(){
        $('#lighbox-admin').fadeIn();
        var school = $(this).attr('data-school');
        $('#text-video').text(school);
        $('#guardar-video').attr('data-school',school);
        setTimeout(function(){
            $('#inner-lightbox-videos').addClass('open-lightBox');
        },200);
    });

    $('#background-lighbox-videos, #close-light-box-videos').click(function(){
        $('#lighbox-admin').fadeOut();
        $('#inner-lightbox-videos').removeClass('open-lightBox');
    });

    $('#guardar-album').click(function(e){
        e.preventDefault();

        var id_album = $(this).attr('data-album');

        if($('.newForm').is(':visible')&&!$(this).hasClass('inactive')){
            $(this).addClass('inactive');

            $('.newForm').each(function(){
                $('.id_album').val(id_album);
                $.ajax({
                    url: "ajax/ajax_edit.php",
                    type: "POST",             
                    data: new FormData(this), 
                    contentType: false, 
                    cache: false,    
                    processData:false,       
                    success: function(data){
                        location.reload(); }
                });
            });


        }
    });

    function edit(id){
        if(id){
            $.ajax({
                url: "ajax/ajax_get_to_edit.php",
                type: "POST",             
                data:{ id:id },  
                cache: false,
                success: function(data){
                    $('#inner-contenido-lightbox-albums').html(data);

                    var id_album = id;

                    $('.delete_photo').click(function(e){
                        e.preventDefault();

                        var id_photo = $(this).parent('.uploadimage').attr('data-id'),
                            thisButton = $(this);

                        $.ajax({
                            url: "ajax/ajax_delete_photo.php",
                            type: "POST",             
                            data:{ id_photo:id_photo, album_id:id_album  }, 
                            cache: false,   
                            dataType:'json',
                            success: function(data){
                                if(data.delete_album==true){
                                    location.reload(); }
                                if(data.delete_photo==true){
                                    thisButton.parents('.uploadimage').fadeOut(); }
                            }
                        });

                    });

                }
            });
        }
    }

    $('.right-bttn-album').click(function(e){
        e.preventDefault();
        var identificador = $(this).parents('.box-parent-albums').attr('data-album'),
            thisButton = $(this);

        $.ajax({
            url: "ajax/ajax_delete.php",
            type: "POST",             
            data:{ id:identificador }, 
            cache: false,        
            success: function(data){
                if(data=='successfully'){ 
                    thisButton.parents('.box-parent-albums').fadeOut(); }; }
        });

    });

    function successAjax(){
        location.reload(); }

    $('#publicar-album').click(function(e){

        if(!$(this).hasClass('inactive')){
            var escuela_identificador = $(this).attr('data-identificador'),
                total = $('.uploadimage').length;

            $(this).addClass('inactive');

            // Creo el album
            $.ajax({
                url: "ajax/ajax_album.php",
                type: "POST",             
                data:{ total:total, escuela:escuela_identificador },  
                cache: false,   
                dataType:'json',
                success: function(data){
                    var escuela  = data.school,
                        id_album = data.new_id_album;

                    $('.id_album').val(id_album);

                    switch(escuela){
                        case 'fabulinus':
                            $('.uploadimage').each(function(){
                                $.ajax({
                                    url: "ajax/ajax_fabulinus.php",
                                    type: "POST",             
                                    data: new FormData(this), 
                                    contentType: false, 
                                    cache: false,    
                                    processData:false,       
                                    success: function(data){
                                        successAjax(); }
                                });
                            });
                            break;
                        case 'primaria':
                            $('.uploadimage').each(function(){
                                $.ajax({
                                    url: "ajax/ajax_primaria.php",
                                    type: "POST",             
                                    data: new FormData(this), 
                                    contentType: false, 
                                    cache: false,    
                                    processData:false,       
                                    success: function(data){
                                        successAjax(); }
                                });
                            });
                            break;
                        case 'secundaria':
                            $('.uploadimage').each(function(){
                                $.ajax({
                                    url: "ajax/ajax_secundaria.php",
                                    type: "POST",             
                                    data: new FormData(this), 
                                    contentType: false, 
                                    cache: false,    
                                    processData:false,       
                                    success: function(data){
                                        successAjax(); }
                                });
                            });
                            break;
                    }

                }
            });
        }

        e.preventDefault();
    });

    $('.delete-form').click(function(){
        $(this).parent('.uploadimage').remove();
        if(!$('.uploadimage').is(':visible')){
            $('#publicar-album').addClass('inactive'); }

        if(!$('.newForm').is(':visible')){
            $('#guardar-album').addClass('inactive'); }
        return false;
    });

    function html_form(){
        var f1 = $('<form class="uploadimage cfix newForm" action="" method="post" enctype="multipart/form-data"></form>'),
            f2 = $('<input type="file" name="file" class="file" />'),
            f3 = $('<div class="box-form"><label>Titulo</label><input type="text" name="title" /></div>'),
            f4 = $('<div class="box-form"><label>Descripcion</label><input type="text" name="descripcion" /></div>'),
            f5 = $('<div class="box-form"><label>Foto</label><div class="figure-content cfix"><div class="figure-box-form"></div><a class="button-select" href="#">Seleccionar imagen</a></div></div>'),
            f6 = $('<a class="delete-form" href="#"><i class="fa fa-times"></i></a>'),
            f7 = $('<input class="id_album" type="hidden" name="id_album">');

        f1.append(f6,f7,f2,f3,f4,f5);
        $('#inner-contenido-lightbox-albums').append(f1);
    }

    $('#bttn-more-photos').click(function(e){
        e.preventDefault();
        html_form();

        $('#publicar-album').removeClass('inactive'); 
        $('#guardar-album').removeClass('inactive');

        $('.delete-form').each(function(){
            $(this).off('click').click(function(){
                $(this).parent('.uploadimage').remove();
                if(!$('.uploadimage').is(':visible')){
                    $('#publicar-album').addClass('inactive'); }
                if(!$('.newForm').is(':visible')){
                    $('#guardar-album').addClass('inactive'); }
                return false;
            });
        });

        $('.button-select').each(function(){
            $(this).off('click').click(function(e){
                e.preventDefault();
                $(this).parents('.uploadimage').children('.file').trigger('click');
            });
        });

        change_file();

    });

    $('.button-select').click(function(e){
        e.preventDefault();
        $(this).parents('.uploadimage').children('.file').trigger('click');
    });

    function change_file(){
        $(".file").change(function() {
            var this_file = $(this),
                file = this.files[0],
                imagefile = file.type,
                match = ["image/jpeg","image/png","image/jpg"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))) {

                return false;
            } else {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(this_file).parent('.uploadimage').children().children().children('.figure-box-form').css({
                        'background-image':'url('+reader.result+')',
                        'background-color':'#333'
                    });
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    } change_file();

    function lighboxContentHeight() {
        var heightLightBox = $('#inner-lightbox-albums').outerHeight(),
            heightLightBoxTop = $('#top-lightbox-albums').outerHeight();

        $('#contenido-lightbox-albums').height(heightLightBox-heightLightBoxTop);
    }


    $('.add-more').click(function(){
        var identificador = $(this).attr('data-identificador');
        $('#text-header-lightbox').text('Agregar fotos a un nuevo album en');
        $('#text-lightBox').text(identificador);
        $('#publicar-album').attr('data-identificador',identificador);
        $('#guardar-album').hide();
        $('#publicar-album').show();
        $('#inner-contenido-lightbox-albums').html('');
        $('#publicar-album').addClass('inactive');
        $('#lighbox-admin').fadeIn();
        setTimeout(function(){
            $('#inner-lightbox-albums').addClass('open-lightBox');
            lighboxContentHeight();
        },200);
    });

    $('.left-bttn-album').click(function(e){
        e.preventDefault();
        var identificador = $(this).parents('.box-parent-albums').attr('data-album');
        $('#text-header-lightbox').text('Editar album.');
        $('#inner-contenido-lightbox-albums').html('');
        $('#guardar-album').show();
        $('#guardar-album').attr('data-album',identificador);
        $('#text-lightBox').text('');
        $('#publicar-album').hide();
        $('#lighbox-admin').fadeIn();
        $('#publicar-album').addClass('inactive');
        edit(identificador);
        setTimeout(function(){
            $('#inner-lightbox-albums').addClass('open-lightBox');
            lighboxContentHeight();
        },200);
    });

    $('#background-lighbox-albums, #close-light-box').click(function(e){
        $('#lighbox-admin').fadeOut();
        $('#inner-lightbox-albums').removeClass('open-lightBox');
        e.preventDefault();
    });

    function maquetacion(){
        var anchoWindow   = $(window).width(),
            altoWindow    = $(window).height(),
            sideBarWidth  = $('#barra-lateral').outerWidth(),
            headerHeight = $('#header-page').outerHeight();

        $('#inner-lightbox-albums').height(altoWindow-headerHeight-60);

        $('#contenido').css({
            'width':anchoWindow-sideBarWidth
        });

        $('#lighbox-admin').css({
            'width':anchoWindow-sideBarWidth
        });

    } 

    // Function resize
    var resizeTimer;
    $('#bttn-barra').click(function(e){
        if($('#barra-lateral').hasClass('small')){
            $('#barra-lateral').removeClass('small');
        } else {
            $('#barra-lateral').addClass('small');
        }
        if (resizeTimer) { 
            clearTimeout(resizeTimer); } 
        resizeTimer = setTimeout(function() { 
            resizeTimer = null; maquetacion(); 
        }, 500); 
        e.preventDefault();
    });

    $('#user').click(function(){
        $('#box-user').fadeToggle();
        return false;
    });

    maquetacion();

    $(window).resize(function(){

        maquetacion();

        lighboxContentHeight();

    });

});