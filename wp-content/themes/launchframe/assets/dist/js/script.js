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
                $("#slack-subscribe-form").submit(function(e) {
                    e.preventDefault();
                    var slackTeam = "mof1podcast";
                    var token = 'xoxp-14518901873-14520596720-263849047252-4155032826ac8b428435842b07a92320';
                    var url = 'https://'+ slackTeam + '.slack.com/api/users.admin.invite';
                    var email = $("#slack-signup-email").val();
                    fetch(url, { 
                        method: 'POST',
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                        body: "token="+ token + "&email=" + email,
                    })
                    .then(function(res) {
                        return res.text();
                    })
                    .then(function(body) {
                        var output = {rawHTML: body};
                        console.log(output);
                    })
                    .catch(function(data) {
                        console.log(data);
                    });
                });
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
                    $('body').toggleClass('display-nav');
                });
            }
        },
        theMap : {
            test : function(){
                return true;
            },
            run : function() {

                var map = new google.maps.Map(document.getElementById('mof1-map'), {
                    zoom: 5,
                    center: new google.maps.LatLng(39.8333333, -98.585522),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#F2F2F2"},{"lightness":0}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                });

                var iconBase = 'http://mof1podcast.com/wp-content/themes/launchframe/assets/src/img/map/';
                var icons = {
                    event: {
                        icon: iconBase + 'marker_events.png'
                    },
                    meet: {
                        icon: iconBase + 'marker_meet.png'
                    },
                    street: {
                        icon: iconBase + 'marker_street.png'
                    },
                    luke: {
                        icon: iconBase + 'marker_luke.png'
                    }
                };

                var features = [
                    {
                        position: new google.maps.LatLng(30.447684, -91.189020),
                        type: 'event'
                    }, {
                        position: new google.maps.LatLng(30.307182, -97.755996),
                        type: 'event'
                    }, {
                        position: new google.maps.LatLng(32.465198, -84.991104),
                        type: 'event'
                    }, {
                        position: new google.maps.LatLng(33.678902, -117.875548),
                        type: 'event'
                    }, {
                        position: new google.maps.LatLng(30.258675, -97.744563),
                        type: 'event'
                    }, {
                        position: new google.maps.LatLng(40.798947, -81.378447),
                        type: 'street'
                    }, {
                        position: new google.maps.LatLng(35.048187, -85.308657),
                        type: 'street'
                    }, {
                        position: new google.maps.LatLng(29.424122, -98.493628),
                        type: 'street'
                    }, {
                        position: new google.maps.LatLng(34.052234, -118.243685),
                        type: 'meet'
                    }, {
                        position: new google.maps.LatLng(29.883275, -97.941394),
                        type: 'meet'
                    }
                ];

                // Create markers.
                features.forEach(function(feature) {
                    var marker = new google.maps.Marker({
                        position: feature.position,
                        icon: icons[feature.type].icon,
                        map: map
                    });
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
                    }, 2000);
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
