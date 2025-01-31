
(function($){
	$(function(){


		  $('#phone-nav').click(function(){
            $('body').toggleClass('nav-expand');
            $('body').toggleClass('navexpand');
            $(this).toggleClass('active');
        });


        // Phone nav click function
      /*  $('.menu-icon-wrap').click(function () {
            $("body").toggleClass("navShown");
            $(".nav-wrap").fadeIn()
        });*/



        window.onscroll = function () {
            var header = document.querySelector("header");
            if (window.pageYOffset > 0) {
              header.classList.add("sticky");
            } else {
              header.classList.remove("sticky");
            }
          };
          



    
    });
    // End the solutin card carousel
    
    

	

})(jQuery)

