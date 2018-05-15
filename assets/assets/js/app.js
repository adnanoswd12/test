;(function ($, window, undefined) {
    'use strict';

    var $doc = $(document),
        Modernizr = window.Modernizr;

    $.fn.foundationAlerts           ? $doc.foundationAlerts()           : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion()        : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips()         : null;
    $('input, textarea').placeholder();
    $.fn.foundationButtons          ? $doc.foundationButtons()          : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation()       : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar()           : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms()      : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs()             : null;

    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

    // Hide address bar on mobile devices
    if (Modernizr.touch) {
        $(window).load(function () {
            setTimeout(function () {
                window.scrollTo(0, 1);
            }, 0);
        });
    }

    // search box expand
    $(".search .submit a").click( function() {
        $('#nav-search').submit();
    });

    $(".page-search").focus( function() {
        $(this).css({
            width: '270px'
        });
    });

    $(".page-search").blur( function() {
        $(this).css({
            width: '80px'
        });
    });

    // speaker twitter slides
    if( $("#tweet-slider").length >= 1 ) {
        $('#tweet-slider').liquidSlider({
            autoSlide: true,
            autoSlideInterval: 4000
        });
    }

    // testimonial slider
    if( $("#testimonial-slider").length >= 1 ) {
        $('#testimonial-slider').liquidSlider({
            autoSlide: true,
            autoSlideInterval: 4500
        });
    }

    // drop down menus
    if( $('.nav-bar').length != 0 ) {
        $(".nav-bar > li").hoverIntent({
            timeout: 150,
            over: function () {
                $(this).addClass("hover");
                $('ul:first',this).slideDown( 150, 'linear', function(){
                    $(this).css('overflow','visible');
                });
            },
            out: function() {
                $(this).removeClass("hover");
                $('ul:first',this).hide();
            }
        });
    }

    // url redirect
    $("div[data-link-location]").click( function() {
        window.location = $(this).attr('data-link-location');
    })


    // coming soon bar hovers
    $("div.coming-soon .event").mouseenter(function(){
        $(this).addClass("hover");
    }).mouseleave(function(){
        $(this).removeClass("hover");
    });

    // shift content out of columns on resize
    check_column_size();
    $(window).resize(function() {
        check_column_size();
        equal_height_articles();

        // fix auto-width of sticky column
        $('.sticky').css({ width: 'auto' });
    });

    // make article summary blocks equal height
    equal_height_articles();

    // magazine subscribe form
    $('#magazine-subscribe-start').click( function() {
        $('#magazine-subscribe-form').slideDown();
        $('#magazine-subscribe-start').fadeOut();
    });

    // start with the form open?
    if( ( window.location.hash == '#download' || window.location.hash == '#subscribe' ) && $('#magazine-subscribe-form').length >= 1 ) {
        $('#magazine-subscribe-start').hide();
        $('#magazine-subscribe-form').slideDown();
    }

    // magazine subscribe form - cancel
    $('#magazine-subscribe-cancel').click( function() {
        $('#magazine-subscribe-start').fadeIn();
        $('#magazine-subscribe-form').slideUp();
    });

    // magazine letter to the editor toggle
    $('#editor-letter-more').click( function() {
        $('#editor-remaining').slideDown();
        $('#editor-letter-more').fadeOut();
    });

    $('#editor-letter-less').click( function() {
        $('#editor-remaining').slideUp();
        $('#editor-letter-more').fadeIn();
    });

    // jquery validate forms
    if( $('#subscribe').length != 0 ) {
        $('#subscribe').validate({});
    }

    // download mediakit
    if( $('#download-mediakit').length != 0 ) {
        $("#download-mediakit").validate({});
        $('#download-mediakit-start').click( function() {
            $('#download-mediakit-form').slideDown();
            $('#download-mediakit-start').fadeOut();
        });
        $('#download-mediakit-cancel').click( function() {
            $('#download-mediakit-start').fadeIn();
            $('#download-mediakit-form').slideUp();
        });
    }

    // download sponsorship
    if( $('#download-sponsorship').length != 0 ) {
        $("#download-sponsorship").validate({});
        $('#download-sponsorship-start').click( function() {
            $('#download-sponsorship-form').slideDown();
            $('#download-sponsorship-start').fadeOut();
        });
        $('#download-sponsorship-cancel').click( function() {
            $('#download-sponsorship-start').fadeIn();
            $('#download-sponsorship-form').slideUp();
        });
    }

    // download brochure
    if( $('#download-brochure').length != 0 ) {
        $("#download-brochure").validate({});
        $('#download-brochure-start').click( function() {
            $('#download-brochure-form').slideDown();
            $('#download-brochure-start').fadeOut();
        });
        $('#download-brochure-cancel').click( function() {
            $('#download-brochure-start').fadeIn();
            $('#download-brochure-form').slideUp();
        });
    }

    // print buttons
    $('.print').click( function() {
        window.print();
    });

    // stick side bar
    if( !!$('.sticky').offset() ) {

        var stickyTop = $('.sticky').offset().top; // returns number

        $(window).scroll(function(){ // scroll event
            var windowTop = $(window).scrollTop(); // returns number
            if( stickyTop < windowTop ) {

                // lets set the "coming-soon" column size
                var width = $('.sticky').outerWidth();
                $('.sticky').css({
                    position: 'fixed',
                    marginTop: $('.sticky').attr( 'data-top-scroll' ),
                    top: 0,
                    width: width
                });

            } else {
                $('.sticky').css({
                    position: 'static',
                    marginTop: $('.sticky').attr( 'data-top-normal' ),
                    width: 'auto'
                });
            }
        });
    }

    //  Accordion Panels
    if( $('.accordion').length >= 1 ) {
        $(".accordion h4").click( function () {
            $(this).next(".pane").slideToggle("slow").siblings(".pane:visible").slideUp("slow");
            $(this).toggleClass("current");
            $(this).siblings("h4").removeClass("current");
        });
    }


})(jQuery, this);


function equal_height_articles() {

    var currentTallest = 0,
        currentRowStart = -1,
        rowDivs = new Array(),
        $el,
        topPosition = 0;

    $('article div.summary').each(function() {

        $el = $(this);
        topPostion = $el.position().top;

        // first column in the row
        if( currentRowStart != topPostion ) {

            // set the variables for the new row
            rowDivs.length  = 0;
            currentRowStart = topPostion;

            if( $el.children('blockquote' ).length >= 1 ) {
                currentTallest = ( $el.children('blockquote').children('div.image').width() * .547 ) + $el.children('blockquote').children('h2').outerHeight() + $el.children('p').outerHeight() + 140;
            } else {
                currentTallest = ( $el.children('div.image').width() * .547 ) + $el.children('h2').outerHeight() + $el.children('p').outerHeight() + 120;
            }
            rowDivs.push( $el );
        } else {
            // another div on the current row.  Add it to the list and check if it's taller
            rowDivs.push($el);

            height = ( $el.children('div.image').width() * .547 ) + $el.children('h2').outerHeight() + $el.children('p').outerHeight() + 120;
            currentTallest = (currentTallest < height) ? (height) : (currentTallest);
        }

        // do the last row
        for( currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++ ) {
            if( !rowDivs[currentDiv].hasClass( 'single-row' ) ) {
                rowDivs[currentDiv].css( 'height', currentTallest );
            }
        }
    });
}


function check_column_size() {
    if( $(window).width() >= 768 && $(window).width() <= 924 ) {
        $('section#main').removeClass( 'eight' ).addClass( 'eleven' );
        $('div#right-side-extras').addClass( 'hide' );
    } else {
        $('section#main').removeClass( 'eleven' ).addClass( 'eight' );
        $('div#right-side-extras').removeClass( 'hide' );
    }
}


$(document).scroll(function(){

    if( $('#social-links').length != 0 ) {
        var docheight    = $('div[role="main"]').outerHeight();
        var scrollTop    = $(window).scrollTop();
        var scrollBottom = docheight - scrollTop;
        var mainoffset   = $("#content").offset();
        var footerheight = $("footer").outerHeight();

        // social bar
        var socialheight        = $("#social-links").outerHeight();
        var socialScrollStop    = footerheight + socialheight + 30;

        if( ( scrollBottom >= socialScrollStop ) ) {
            var offset = $(window).scrollTop() - mainoffset.top;
            var width  = $("#social-links").width();
            if( $(window).scrollTop() >= mainoffset.top ) {
                $("#social-links").css( 'position', 'fixed' );
                $("#social-links").css( 'width', width + 'px' );
                $("#social-links").css( "top", '20px' );
                $("#social-links").css( "bottom", 'auto' );
            } else {
                $("#social-links").css( "top", '0px' );
                $("#social-links").css( "bottom", 'auto' );
                $("#social-links").css( 'position', 'absolute' );
                $("#social-links").width( '85%' );
            }

        } else {
            var social_offset = $(window).scrollTop() - ( mainoffset.top );

            if( $("#social-links").css( 'position' ) != 'absolute' ) {
                $("#social-links").css( 'position', 'absolute' );
                $("#social-links").css( "top", social_offset + 'px' );
            }
        }
    }


    // trending bar
    if( $('#sidebar-scroll-wrapper').length != 0 ) {
        var trendoffset         = $("#sidebar-scroll-wrapper").offset();
        var trendingheight      = $("#sidebar-trending").outerHeight();
        var trendingScrollStop  = footerheight + trendingheight + 30;

        if( ( scrollBottom >= trendingScrollStop ) ) {
            var offset = $(window).scrollTop() - ( trendoffset.top - 20 );
            var width  = $("#sidebar-scroll-wrapper").width();
            if( $(window).scrollTop() >= ( trendoffset.top - 20 ) ) {
                $("#sidebar-trending").css( 'position', 'fixed' );
                $("#sidebar-trending").width( width );
                $("#sidebar-trending").css( "top", '20px' );
                $("#sidebar-trending").css( "bottom", 'auto' );
            } else {
                $("#sidebar-trending").css( "top", '0px' );
                $("#sidebar-trending").css( "bottom", 'auto' );
                $("#sidebar-trending").css( 'position', 'absolute' );
                $("#sidebar-trending").width( 'auto' );
            }
        } else {
            var offset = $(window).scrollTop() - ( trendoffset.top - 50 );

            if( $("#sidebar-trending").css( 'position' ) != 'absolute' ) {
                $("#sidebar-trending").css( 'position', 'absolute' );
                $("#sidebar-trending").css( "top", offset + 'px' );
            }
        }
    }

});

// track disqus comments
function disqus_config() {
    this.callbacks.onNewComment = [function() { track_disqus_comment(); }];
}

function track_disqus_comment() {

    // track sharing
    $.ajax({
        type: "POST",
        url: '/statistics/track',
        data: { 'url' : window.location.pathname.replace(/\/$/, ""), 'action' : 'comment' },
        success: function(msg){
            //console.log( msg );
        }
    });
}

// track addthis sharing
function shareEventHandler( evt ) {

    // if it's an addthis share
    if( evt.type == 'addthis.menu.share' ) {

        // track sharing
        $.ajax({
            type: "POST",
            url: '/statistics/track',
            data: { 'url' : window.location.pathname.replace(/\/$/, ""), 'action' : 'share', 'subaction' : evt.data.service },
            success: function(msg){
                console.log( msg );
            }
        });
    }
}

// listen for the share event
if (typeof addthis != 'undefined') {
    addthis.addEventListener('addthis.menu.share', shareEventHandler);
}


function getDocHeight() {
    var D = document;
    return Math.max(
        D.body.scrollHeight, D.documentElement.scrollHeight,
        D.body.offsetHeight, D.documentElement.offsetHeight,
        D.body.clientHeight, D.documentElement.clientHeight
    );
}

$.fn.setAllToMaxHeight = function(){
    return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
}
