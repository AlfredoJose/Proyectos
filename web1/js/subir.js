    $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scroll').fadeIn();
            } else {
                $('.scroll').fadeOut();
            }
        });
  
        $('.up-boton').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });
