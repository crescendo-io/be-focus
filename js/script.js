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
        var stageName = el.data('stage-name');

        event.preventDefault();
        
        // Ajouter le paramètre dans l'URL sans recharger la page
        if (stageId) {
            var url = new URL(window.location);
            url.searchParams.set('stage-id', stageId);
            window.history.pushState({}, '', url);
        }
        
        $('.modal-booking').fadeIn(300);
        $('.modal-booking .stage-type').text(stageName);
        $('.modal-booking .modal-stage-id').val(stageId);   

    });

    $('.cross-modal').click(function(event){
        event.preventDefault();
        
        // Supprimer le paramètre de l'URL
        var url = new URL(window.location);
        url.searchParams.delete('stage-id');
        window.history.pushState({}, '', url);
        
        $('.modal-booking').fadeOut(300);
        $('.modal-contact').fadeOut(300);
        $('.form-resa').fadeIn();
        $('form .success').fadeOut();

        $('form button').removeAttr('disabled');
    });

    $('a[href="#contact"]').on('click', function(e) {
        var el = $(this);

        e.preventDefault();
        $('.modal-contact').fadeIn(300);

    });
    
    // Vérifier si un paramètre stage-id est présent au chargement de la page
    var urlParams = new URLSearchParams(window.location.search);
    var stageIdFromUrl = urlParams.get('stage-id');
    
    if (stageIdFromUrl) {
        // Trouver le bouton correspondant pour récupérer le nom du stage
        var correspondingButton = $('.open-modal[data-stage-id="' + stageIdFromUrl + '"]');
        
        if (correspondingButton.length) {
            var stageName = correspondingButton.data('stage-name');
            
            // Ouvrir la modale avec les informations
            $('.modal-booking').fadeIn(300);
            $('.modal-booking .stage-type').text(stageName);
            $('.modal-booking .modal-stage-id').val(stageIdFromUrl);
        }
    }

});


$(window).scroll(function(){
    var scrollValue = $(window).scrollTop();
    if(scrollValue > 10){
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
    form.find('button').attr('disabled', true);
    $.ajax({
        url: my_ajax.url, // Cette variable doit être définie côté WordPress (voir plus bas)
        type: 'POST',
        data: {
            action: 'booking_form_submit', // Le nom de l'action côté PHP
            form_data: formData
        },
        success: function(response){
            // Traite la réponse ici (affichage d'un message, etc.)
            $('.form-resa').hide();
            $('#form-booking .success').fadeIn(0);
        },
        error: function(){
            alert('Erreur lors de l\'envoi.');
        }
    });
});

$('#form-contact').submit(function(e){
    e.preventDefault(); // Empêche le rechargement de la page

    var form = $(this);
    var formData = form.serialize();
    form.find('button').attr('disabled', true);
    $.ajax({
        url: my_ajax.url, // Cette variable doit être définie côté WordPress (voir plus bas)
        type: 'POST',
        data: {
            action: 'contact_form_submit', // Le nom de l'action côté PHP
            form_data: formData
        },
        success: function(response){
            // Traite la réponse ici (affichage d'un message, etc.)
            $('.form-resa').hide();
            $('#form-contact .success').fadeIn(0);
        },
        error: function(){
            alert('Erreur lors de l\'envoi.');
        }
    });
});


function showStrateElementsOnScroll() {
    $('.strate p, .strate h2, .strate h3, .strate h4, .strate h5, .strate .button').each(function() {
        var $el = $(this);
        var windowBottom = $(window).scrollTop() + $(window).height();
        var elTop = $el.offset().top;

        if (windowBottom > elTop + 30) {
            $el.addClass('visible');
        }
    });
}

// Au scroll et au chargement
$(window).on('scroll load', showStrateElementsOnScroll);