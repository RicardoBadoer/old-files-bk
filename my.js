// back-to-top-js Start

$(document).ready(function(){
				$("#back-top").hide();
				// fade in #back-top
				$(window).scroll(function () {
					if ($(window).scrollTop() > 100) {
						$('#back-top').fadeIn();
					} else {
						$('#back-top').fadeOut();
					}
				});
				// scroll body to 0px on click
				$('#back-top a').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			});
			
	// back-to-top-js End
	

// Updown Start

$(document).ready(function(){	        
    $('.show_hide').click(function(){
    	$(".slidingDiv").slideToggle();
					
    });
	
	$(".panel-heading .panel-title").click(function(){
		$('.panel-heading .panel-title').removeClass('bgactive');
		$(this).toggleClass('bgactive');
	});
	
	function toggleChevron(e) {
    $(e.target).prev('.panel-heading').find("i.indicator").toggleClass('glyphicon-minus glyphicon-plus');
	}
	$('#accordion').on('hidden.bs.collapse', toggleChevron);
	$('#accordion').on('shown.bs.collapse', toggleChevron);

	
});

// Updown End

// Slider Open

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');		  
        }
      });
    });
	
	function setbigimg(img, classname){
		$('.thumb-image').removeClass('active');
		$('.'+classname).addClass('active');
		$('#bigimg').attr("src", 'images/'+img);
	}

// Slider End





// add-animated Open

jQuery(document).ready(function() {
 jQuery('.post').viewportChecker({
  classToAdd: 'visible animated bounce', // Class to add to the elements when they are visible
  offset: 20    
 });  
});

jQuery(document).ready(function() {
 jQuery('.post-right').viewportChecker({
  classToAdd: 'visible animated slideInRight', // Class to add to the elements when they are visible
  offset: 20    
 });  
});

jQuery(document).ready(function() {
 jQuery('.post-left').viewportChecker({
  classToAdd: 'visible animated slideInLeft', // Class to add to the elements when they are visible
  offset: 20    
 });  
});

// add-animated End


// calendar Open

	$('#calendar').datepicker({
		inline: true,
		firstDay: 1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
	});
	
// calendar End

// profile Open
	        
    $('.user-box a').click(function(){
    	$(".user-link-box").slideToggle();
					
    });

// profile End