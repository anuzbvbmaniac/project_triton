/*Animation On Hover Using Animate.css*/
$(document).ready(function() {
	animationHover('#science', 'rollIn');
	animationHover('#humanities', 'rollIn');
	animationHover('#management', 'rollIn');
	
	function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
	}
	
		/*dropdown*/
			$('ul.nav li.dropdown').click(function() {
  				$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
			}, function() {
  				/*$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);*/
			});


  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });

$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});

new WOW().init();

});
