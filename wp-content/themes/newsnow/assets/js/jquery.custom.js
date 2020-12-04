(function($){ //create closure so we can safely use $ as alias for jQuery

    $(document).ready(function(){

        "use strict";
        /*-----------------------------------------------------------------------------------*/
        /*  Superfish Menu
        /*-----------------------------------------------------------------------------------*/
        // initialise plugin
        var example = $('.sf-menu').superfish({
            //add options here if required
            delay:       100,
            speed:       'fast',
            autoArrows:  false  
        }); 
        
        /*-----------------------------------------------------------------------------------*/
        /*  bxSlider
        /*-----------------------------------------------------------------------------------*/
        $('#featured-content .featured-slide .entry-header').fadeIn("100");
        $('#featured-content .featured-slide .gradient').fadeIn("100");                                        

        /*-----------------------------------------------------------------------------------*/
        /*  Mobile Menu & Search
        /*-----------------------------------------------------------------------------------*/

        /* Mobile Menu */
        $('.menu-icon-open').click(function(){

            $('.mobile-menu').slideDown('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');  

            $('.header-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').removeClass('active');
            $('.search-icon > .genericon-close').removeClass('active');

        });

        $('.menu-icon-close').click(function(){

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');

            $('.header-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').removeClass('active');
            $('.search-icon > .genericon-close').removeClass('active');            

        });

        /* Mobile Search */
        $('.search-icon > .genericon-search').click(function(){

            $('.header-search').slideDown('fast', function() {});
            $('.search-icon > .genericon-search').toggleClass('active');
            $('.search-icon > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');

        });

        $('.search-icon > .genericon-close').click(function(){

            $('.header-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').toggleClass('active');
            $('.search-icon > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');            

        });          

        $('.covid-icon-open').click(function(){
            $('.covid-collapse').slideDown('fast', function() {});
            $('.covid-icon-close').show();
            $(this).hide();
        });
        $('.covid-icon-close').click(function(){
            $('.covid-collapse').slideUp('fast', function() {});
            $('.covid-icon-open').show();
            $(this).hide();
        });
        // Jump to top button
        if ($('.btn-jump-to-top').length > 0){
            $(window).scroll(function() {
                if ($(window).scrollTop() > 300) {
                    $('.btn-jump-to-top').addClass('show');
                } else {
                    $('.btn-jump-to-top').removeClass('show');
                }
            });
            $('.btn-jump-to-top').click(function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop:0}, '300');
            })
        }
    });


})(jQuery);