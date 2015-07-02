var pContainerHeight = $('.viewWindow').height();

$(window).scroll(function(){

  var windowScroll = $(this).scrollTop();

  if (windowScroll <= pContainerHeight) {

    $('.logo').css({
      'transform' : 'translate(0px, '+ windowScroll /2 +'%)'
    });

    $('.backImage').css({
      'transform' : 'translate(0px, '+ windowScroll /4 +'%)'
    });

    $('.foreImage').css({
      'transform' : 'translate(0px, -'+ windowScroll /40 +'%)'
    });

  }


  // Landing Elements
  if(windowScroll > $('.rotateImg').offset().top - ($(window).height() / 1.2)) {

    $('.rotateImg fig').each(function(i){

      setTimeout(function(){
        $('.rotateImg fig').eq(i).addClass('visible');
      }, (700 * (Math.exp(i * 0.14))) );
    });
   
  }


  // Peek Window
  if(windowScroll > $('.peekWindow').offset().top - $(window).height()){

    $('.peekWindow').css({'background-position':'center '+ (wScroll - $('.peekWindow').offset().top) +'px'});

    var opacity = (wScroll - $('.peekWindow').offset().top + 400) / (wScroll / 5);

    $('.shade').css({'opacity': opacity});

  }
 


  // Blog Elements

  if(windowScroll > $('.blogPosts').offset().top - $(window).height()){

    var offset = (Math.min(0, wScroll - $('.blogPosts').offset().top +$(window).height() - 350)).toFixed();

    $('.post1').css({'transform': 'translate('+ offset +'px, '+ Math.abs(offset * 0.2) +'px)'});

    $('.post3').css({'transform': 'translate('+ Math.abs(offset) +'px, '+ Math.abs(offset * 0.2) +'px)'});

  }
});
