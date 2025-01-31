
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
    
    let touchMoved = false;

    $(".hoverable-slider")
        .on("touchstart", function (e) {
            touchMoved = false; // Reset touch move detection

            // Use setTimeout to delay execution slightly to check if it's a swipe or tap
            setTimeout(() => {
                if (!touchMoved) {
                    var index = $(this).data("index");

                    // Hide all thumbnails
                    $(".hoverable-slider-thum").hide();

                    // Show the related thumbnail
                    $(".hoverable-slider-thum[data-index='" + index + "']").show();
                }
            }, 100);
        })
        .on("touchmove", function () {
            touchMoved = true; // User is scrolling, not tapping
        });

    // Restore default thumbnail when the touch ends outside the slider
    $(".slider-wrap").on("mouseleave", function () {
        $(".hoverable-slider-thum").hide();
        $(".hoverable-slider-thum[data-index='0']").show(); // Show the first thumbnail
    });


	

})(jQuery)

