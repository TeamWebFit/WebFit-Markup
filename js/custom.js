$( document ).ready(function() {
    //animation
    $(function(){
      //pulse
      $('.animate-clickPulse').click(function(){
        animate(this, 'pulse');

        return false;
      });
      $('.animate-hoverPulse').hover(function(){
        animate(this, 'pulse');

        return false;
      });

      //shake
      $('.animate-clickShake').click(function(){
        animate(this, 'shake');

        return false;
      });
      $('.animate-hoverShake').hover(function(){
        animate(this, 'shake');

        return false;
      });

      //animate
      function animate(elem, anim){
        $(elem).addClass('animated '+ anim);
        var wait = setTimeout(function(){
          $(elem).removeClass('animated '+ anim);
        }, 1000);
      }
    })//end animation 

    //FAB-Button
    $(".fab").click(function(){
      $(".overlay").fadeIn();
      $(".overlay-fab").show();
      $(".overlay-fab").animate({ opacity: 1 }, { duration: 100, queue: false });
      $(".overlay-fab").animate({ "margin-top": "0px" }, { duration: 500, queue: false });
    });

    $(".overlay").click(function(){
      $(".overlay").fadeOut();
      $(".overlay-fab").animate({ opacity: 0 }, { duration: 100, queue: false });
      $(".overlay-fab").animate({ "margin-top": "300px" }, { duration: 500, queue: false });
      $(".overlay-fab").hide();
    })
    
});//End document ready