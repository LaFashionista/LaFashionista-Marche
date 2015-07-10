var pContainerHeight = $('.viewWindow').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.logo').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    $('.backImage').css({
      'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });

    $('.foreImage').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });

  }


  // Landing Elements
  if(wScroll > $('.rotateImg').offset().top - ($(window).height() / 1.2)) {

    $('.rotateImg fig').each(function(i){

      setTimeout(function(){
        $('.rotateImg fig').eq(i).addClass('visible');
      }, (700 * (Math.exp(i * 0.14))) );
    });
   /* 
    $('.clothes-pics figure').each(function(i){

      setTimeout(function(){
        $('.clothes-pics figure').eq(i).addClass('is-showing');
      }, (700 * (Math.exp(i * 0.14))) );
    });
    */
  }


  // Peek Window
  if(wScroll > $('.peekWindow').offset().top - $(window).height()){

    $('.peekWindow').css({'background-position':'center '+ (wScroll - $('.peekWindow').offset().top) +'px'});

    var opacity = (wScroll - $('.peekWindow').offset().top + 400) / (wScroll / 5);

    $('.shade').css({'opacity': opacity});

  }
 


  // Blog Elements movement

  if(wScroll > $('.blogPosts').offset().top - $(window).height()){

    var offset = (Math.min(0, wScroll - $('.blogPosts').offset().top +$(window).height() - 350)).toFixed();

    $('.post1').css({'transform': 'translate('+ offset +'px, '+ Math.abs(offset * 0.2) +'px)'});

    $('.post3').css({'transform': 'translate('+ Math.abs(offset) +'px, '+ Math.abs(offset * 0.2) +'px)'});

  }
});

$(".home").click(function(){
    
    //var target = $(".home").offset().top
    //window.scrollBy(0, target);
});

// Posts function 
$(".posts").click(function(){
   $(".blog").show();
   $(".viewWindow").hide();
   $(".rotateImg").hide();
   $(".content").hide();
   $(".contactPage").hide();
   $(".content").hide();
   
   $(".blog").css("margin-bottom","300px");
    
});

// Contact function
$(".contact").click(function(){
   $(".contactPage").show();
   $(".viewWindow").hide();
   $(".rotateImg").hide();
   $(".content").hide();
   $(".content").hide();
   $(".blog").hide();
   
   $(".contactPage").css("margin-bottom","300px");
   
});

// Posts button function
$(".button").click(function(){
   $(".blog").show();
   $(".viewWindow").hide();
   $(".rotateImg").hide();
   $(".content").hide();
   $(".contactPage").hide();
   $(".content").hide();
   
   $(".blog").css("margin-bottom","300px");
    
});



function smoothScroll (duration) {
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );

	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top
	        }, duration);
	    }
	});
}




