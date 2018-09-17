(function($) {
    $('#contact-form #success').fadeOut();
    $('#contact-form #error').fadeOut();
    $.fn.scrollingTo = function(opts) {
        var defaults = {
            animationTime: 1000,
            easing: '',
            callbackBeforeTransition: function() {},
            callbackAfterTransition: function() {}
        };
        var config = $.extend({}, defaults, opts);
        $(this).click(function(e) {
            var eventVal = e;
            e.preventDefault();
            var $section = $(document).find($(this).data('section'));
            if ($section.length < 1) {
                return !1
            };
            if ($('html, body').is(':animated')) {
                $('html, body').stop(!0, !0)
            };
            var scrollPos = $section.offset().top;
            if ($(window).scrollTop() == scrollPos) {
                return !1
            };
            config.callbackBeforeTransition(eventVal, $section);
            $('html, body').animate({
                'scrollTop': (scrollPos + 'px')
            }, config.animationTime, config.easing, function() {
                config.callbackAfterTransition(eventVal, $section)
            })
        })
    };
    $('#contact-form').validate({
        rules: {
            name: {
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            subject: {
                required: !0,
            },
            message: {
                required: !0,
            },
          	contact_number: {
                required: !0,
                number: !0,
                minlength: 10,
                maxlength: 10
            },
        },
        messages: {
            name: {
                required: "Come on, you have a name don't you?",
            },
            email: {
                required: "Please put your email address",
            },
			contact_number: {
                required: "Please put your contact number",
            },
            message: {
                required: "Please put your messages here?",
            },
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: {
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'subject': $('#subject').val(),
                    'message': $('#message').val(),
					'contact_number': $('#contact_number').val(),
                    '_token': $('input:hidden[name=_token]').val()
                },
                url: "sendinquiry",
                success: function() {
                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('#message').val('');
					$('#contact_number').val('');
                    $('#contact-form #success').fadeIn()
                },
                error: function() {
                    $('#contact-form #error').fadeIn()
                }
            })
        }
    });
    $("#btn_apply_now").click(function() {
        $('#form_apply_now').submit()
    });
    $('#form_apply_now').validate({
        rules: {
            name: {
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            contact_number: {
                required: !0,
                number: !0,
                minlength: 10,
                maxlength: 10
            },
            location: {
                required: !0,
            },
            resume: {
                required: !0,
                extension: "docx|doc|pdf"
            },
            messages: {
                resume: {
                    extension: "Please select pdf, doc or docx file format."
                }
            }
        },
    })
}(jQuery));
jQuery(document).ready(function() {
    "use strict";
    new WOW().init();
    (function() {
        jQuery('.smooth-scroll').scrollingTo()
    }())
});
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $(".navbar-brand a").css("color", "#fff");
            $("#top-bar").removeClass("animated-header")
        } else {
            $(".navbar-brand a").css("color", "inherit");
            $("#top-bar").addClass("animated-header")
        }
    })
});
var clientowl = jQuery('#clients-logo');
clientowl.owlCarousel({
    loop: !0,
    margin: 10,
    autoplay: !0,
    autoplayTimeout: 2000,
    responsiveClass: !0,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
var owl = jQuery('#technologyList');
owl.owlCarousel({
    loop: !0,
    margin: 15,
    autoplay: !0,
    autoplayTimeout: 2000,
    responsiveClass: !0,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 7
        }
    }
});
$(".fancybox").fancybox({
    padding: 0,
    openEffect: 'elastic',
    openSpeed: 450,
    closeEffect: 'elastic',
    closeSpeed: 350,
    closeClick: !0,
    helpers: {
        title: {
            type: 'inside'
        },
        overlay: {
            css: {
                'background': 'rgba(0,0,0,0.8)'
            }
        }
    }
})