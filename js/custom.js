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

});//End document ready
