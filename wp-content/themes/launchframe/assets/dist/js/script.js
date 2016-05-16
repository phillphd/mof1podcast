(function($, window){

	var $w = $(window);
    var $body = $('body');
    var clickevt = (Modernizr.touch ? "touchstart" : "click");
	var wb = {
		setup : {
			test : function() {
				return true;
			},
			run : function() {

			}
		},
		navClick : {
            test : function(){
                return true;
            },
            run : function() {
                $('.call-to-action').on(clickevt, function(e){
                    $('.service-slide').toggleClass('slide-open');
                });
            }
        },
		mobileNavClick : {
            test : function(){
                return true;
            },
            run : function() {
                $('.mobile-nav-toggle').on(clickevt, function(e){
                    $('#site-navigation ul').toggleClass('display-nav');
                });
            }
        },
        theModal : {
            test : function(){
                return true;
            },
            run : function() {
                $(document).ready(function() {
                    setTimeout(function() {
                      $('body').addClass('open-modal');
                    }, 2000); // milliseconds
                });
                $('.modal-close').on(clickevt, function(e){
                    $('body').removeClass('open-modal');
                });
            }
        }
	};

	for (var key in wb){
		if (wb[key].test()){
			wb[key].run();
		}
	}

}(jQuery, window));
