
$(document).ready(function() {
    $('.map').maphilight();
    $('img[usemap]').rwdImageMaps();
    $('#activearea').on('click', function() {
			$.scrollTo($("#luz"), 500);
			//$('html, body').animate({
        //scrollTop: $("#luz").offset().top
    //}, 2000);
    });
});

$(document).ready(function () {
    $('[data-mapid]').each( function(index, element){
	$(this).qtip({
	    content: {
		text: $(this).attr('qtip-content'),
		title: $(this).attr('qtip-title'),
		//attr: 'alt'
	    },
	    position: {
	       my: 'center',
	       at: 'center',
	       target: $("#"+$(this).attr('qtip-ref')),
	    },
	    style: {
		classes: $(this).attr('qtip-classes'),
		//width: 300
	    },
	    show: {
		effect: function() {
		    $(this).fadeTo(250, 1);
		}
	      },
	    hide: {
		effect: function() {
		    $(this).fadeOut(250);
		}
	    },
	});
    });
});
