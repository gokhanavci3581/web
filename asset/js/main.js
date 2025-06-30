(function($) {
    'use strict';

    // Mobile menu toggle
    $('.mobile-menu-icon').on('click', function() {
        $('.menu').toggleClass('active');
        
        if ($('.menu').hasClass('active')) {
            $(this).find('span:nth-child(1)').css({'transform': 'rotate(45deg)', 'top': '10px'});
            $(this).find('span:nth-child(2)').css('opacity', '0');
            $(this).find('span:nth-child(3)').css({'transform': 'rotate(-45deg)', 'top': '10px'});
        } else {
            $(this).find('span').css({'transform': 'rotate(0deg)', 'opacity': '1'});
            $(this).find('span:nth-child(1)').css('top', '0px');
            $(this).find('span:nth-child(2)').css('top', '10px');
            $(this).find('span:nth-child(3)').css('top', '20px');
        }
    });

    // Close mobile menu when clicking outside
    $(document).on('click', function(event) {
        const $target = $(event.target);
        if(!$target.closest('.mobile-menu-icon').length && !$target.closest('.menu').length) {
            $('.menu').removeClass('active');
            $('.mobile-menu-icon').find('span').css({'transform': 'rotate(0deg)', 'opacity': '1'});
            $('.mobile-menu-icon').find('span:nth-child(1)').css('top', '0px');
            $('.mobile-menu-icon').find('span:nth-child(2)').css('top', '10px');
            $('.mobile-menu-icon').find('span:nth-child(3)').css('top', '20px');
        }
    });

    // Smooth scrolling for anchor links
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
                return false;
            }
        }
    });

    // Add active class to menu items when scrolling
    $(window).scroll(function() {
        const scrollDistance = $(window).scrollTop();
        
        $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance + 100) {
                $('.menu a.active').removeClass('active');
                $('.menu a').eq(i).addClass('active');
            }
        });
    });

})(jQuery);
