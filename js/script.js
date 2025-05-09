$(window).on('load',function(){
    $('.burger-menu').click(function(){
       $('.main-menu').slideToggle(100);
    });

    $('.arrow-sub').click(function(){
        var el = $(this);

        el.parent().find('.submenu').slideToggle(100);
    })

    $('.filter-buttons-toggle').click(function(){
       $('.filters-form').slideToggle();
    });

    $('.filters-form').on('change', function(){
        $('.filters-form').submit();
    });

    $('.loader svg').addClass('active');
    setTimeout(function(){
        $('.loader').fadeOut();
    },1200);


    $('.open-modal').click(function(event){
        var el = $(this);
        var stageId = el.data('stage-id');
        var stageDate = el.data('stage-date');
        var stageName = el.data('stage-name');

        event.preventDefault();
        $('.modal-booking').fadeIn(300);
        $('.modal-booking .stage-type').text(stageName);
        $('.modal-booking .date').text(stageDate);
        $('.modal-booking .modal-stage-id').val(stageId);   

    });

    $('.cross-modal').click(function(event){
        event.preventDefault();
        $('.modal-booking').fadeOut(300);
    });
    

});



$(window).scroll(function(){
    var scrollValue = $(window).scrollTop();
    if(scrollValue > 200){
        $('.header').addClass('scroll');
    }else{
        $('.header').removeClass('scroll');
    }

    if($('.fixed-bar').length){
        var scrollHeight = $('.container-single').innerHeight();
        var heightScreen = $(window).height();
        var scrollPercent = (scrollValue / (scrollHeight - heightScreen)) * 100;

        $('.progress-bar-posttype').css('width', scrollPercent + '%');

        if(scrollValue > 200){
            $('.fixed-bar').addClass('scroll');
        }else{
            $('.fixed-bar').removeClass('scroll');
        }
    }
});

$('#form-booking').submit(function(e){
    e.preventDefault(); // Empêche le rechargement de la page

    var form = $(this);
    var formData = form.serialize();

    $.ajax({
        url: my_ajax.url, // Cette variable doit être définie côté WordPress (voir plus bas)
        type: 'POST',
        data: {
            action: 'booking_form_submit', // Le nom de l'action côté PHP
            form_data: formData
        },
        success: function(response){
            // Traite la réponse ici (affichage d'un message, etc.)
            alert('Réservation envoyée !');
        },
        error: function(){
            alert('Erreur lors de l\'envoi.');
        }
    });
});
