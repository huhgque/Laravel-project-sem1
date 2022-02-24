(function($) {
    "use strict";
    var $window = $(window);
    $window.on('scroll', function() { var scroll = $window.scrollTop(); if (scroll < 300) { $(".sticker").removeClass("sticky"); } else { $(".sticker").addClass("sticky"); } });
    var headerActionToggle = $('.drop-toggle');
    var headerActionDropdown = $('.drop-dropdown');
    headerActionToggle.on("click", function() {
        var $this = $(this);
        headerActionDropdown.slideUp();
        if ($this.siblings('.drop-dropdown').is(':hidden')) { $this.siblings('.drop-dropdown').slideDown(); } else { $this.siblings('.drop-dropdown').slideUp(); }
    });
    $('.drop-dropdown').on('click', function(e) { e.stopPropagation(); });
    $('.select-option').niceSelect()
    $(".category-toggle").click(function() { $(".category-dropdown").slideToggle(); });
    $(".category-item-parent.hidden").hide();
    $(".more-btn").on('click', function(e) {
        e.preventDefault();
        $(".category-item-parent.hidden").toggle(500);
        var htmlAfter = "Hide categoryes";
        var htmlBefore = "More categoryes";
        $(this).html($(this).text() == htmlAfter ? htmlBefore : htmlAfter);
        $(this).toggleClass("minus");
    });
    $('.slider-one').slick({ dots: true, arrows: false, });
    $('.slider-two').slick({ dots: true, arrows: false, });
    $('.product-offer-slider').slick({ dots: false, arrows: false, });
    $('.product-thing').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', slidesToShow: 5, infinite: true, responsive: [{ breakpoint: 0, settings: { slidesToShow: 1 } }, { breakpoint: 575, settings: { slidesToShow: 1 } }, { breakpoint: 767, settings: { slidesToShow: 2 } }, { breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 1200, settings: { slidesToShow: 4 } }] });
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) { $('.product-thing').slick('setPosition'); })
    $('.product-thing-tab').slick({ dots: false, arrows: false, slidesToShow: 5, infinite: true, responsive: [{ breakpoint: 0, settings: { slidesToShow: 1 } }, { breakpoint: 575, settings: { slidesToShow: 1 } }, { breakpoint: 767, settings: { slidesToShow: 2 } }, { breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 1200, settings: { slidesToShow: 4 } }] });
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) { $('.product-thing-tab').slick('setPosition'); })
    $('.feature-carousel').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', });
    $('.blog-slider').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', });
    $('.brand-logo').slick({ dots: false, arrows: false, slidesToShow: 6, responsive: [{ breakpoint: 0, settings: { slidesToShow: 1 } }, { breakpoint: 575, settings: { slidesToShow: 2 } }, { breakpoint: 767, settings: { slidesToShow: 3 } }, { breakpoint: 992, settings: { slidesToShow: 4 } }, { breakpoint: 1200, settings: { slidesToShow: 5 } }] });
    $('.blog-post-carousel').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', });
    $('.testimonial-carousel').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', });
    $('.product-carousel-home2').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', slidesToShow: 4, infinite: true, responsive: [{ breakpoint: 0, settings: { slidesToShow: 1 } }, { breakpoint: 575, settings: { slidesToShow: 1 } }, { breakpoint: 767, settings: { slidesToShow: 2 } }, { breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 1200, settings: { slidesToShow: 3 } }] });
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) { $('.product-carousel-home2').slick('setPosition'); })
    $('.product-slider-container').slick({ slidesToShow: 1, slidesToScroll: 1, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', fade: true, accessibility: false, asNavFor: '.product-details-thumbnail, .product-thumbnail-vertical', });
    $('.product-details-thumbnail').slick({ slidesToShow: 4, slidesToScroll: 1, asNavFor: '.product-slider-container', nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', dots: false, centerMode: false, focusOnSelect: true, responsive: [{ breakpoint: 340, settings: { slidesToShow: 2 } }, { breakpoint: 480, settings: { slidesToShow: 3 } }, { breakpoint: 575, settings: { slidesToShow: 4 } }, { breakpoint: 768, settings: { slidesToShow: 4 } }, { breakpoint: 992, settings: { slidesToShow: 6 } }, { breakpoint: 1200, settings: { slidesToShow: 3 } }] });
    $('.product-thumbnail-vertical').slick({ slidesToShow: 4, slidesToScroll: 1, asNavFor: '.product-slider-container', dots: false, vertical: true, verticalScrolling: true, centerMode: false, focusOnSelect: true, arrows: false, responsive: [{ breakpoint: 340, settings: { slidesToShow: 2 } }, { breakpoint: 480, settings: { slidesToShow: 2 } }, { breakpoint: 575, settings: { slidesToShow: 3 } }] });
    $('.product-sliderbox').slick({ dots: false, nextArrow: '<i class="fa fa-angle-right arrow-right arrow-button"></i>', prevArrow: '<i class="fa fa-angle-left arrow-left arrow-button"></i>', slidesToShow: 3, responsive: [{ breakpoint: 480, settings: { slidesToShow: 1 } }, { breakpoint: 767, settings: { slidesToShow: 2 } }, { breakpoint: 992, settings: { slidesToShow: 3 } }] });
    $('.product-slider-container,.product-popup-container').magnificPopup({ delegate: 'a', type: 'image', gallery: { enabled: true } });
    $('.sidebar-active').stickySidebar({ topSpacing: 100, bottomSpacing: 0, minWidth: 767, });
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) { $this.html(event.strftime('<div class="single-countdown"><span class="single-countdown_time">%D</span><span class="single-countdown_text">Days</span></div><div class="single-countdown"><span class="single-countdown_time">%H</span><span class="single-countdown_text">Hours</span></div><div class="single-countdown"><span class="single-countdown_time">%M</span><span class="single-countdown_text">Min</span></div><div class="single-countdown"><span class="single-countdown_time">%S</span><span class="single-countdown_text">Sec</span></div>')); });
    });
    $('.canvas_open').on('click', function() { $('.offcanvas_menu_wrapper,.offcanvas_overlay').addClass('active') });
    $('.canvas_close,.offcanvas_overlay').on('click', function() { $('.offcanvas_menu_wrapper,.offcanvas_overlay').removeClass('active') });
    var $offcanvasNav = $('.offcanvas_main_menu, .sidebar-category-expand, .categories-expand'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');
    $offcanvasNavSubMenu.slideUp();
    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) { $this.siblings('ul').slideUp('slow'); } else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) { $this.parent().toggleClass('menu-open'); } else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) { $this.toggleClass('menu-open'); }
    });
    $('.shop_toolbar_btn > button').on('click', function(e) {
        e.preventDefault();
        $('.shop_toolbar_btn > button').removeClass('active');
        $(this).addClass('active');
        var parentsDiv = $('.shop-wrapper');
        var viewMode = $(this).data('role');
        parentsDiv.removeClass('grid_3 grid_4 grid_list').addClass(viewMode);
        if (viewMode == 'grid_3') { parentsDiv.children().addClass('col-lg-3 col-md-4 col-sm-6').removeClass('col-lg-3 col-cust-5 col-12'); }
        if (viewMode == 'grid_4') { parentsDiv.children().addClass('col-lg-3 col-md-4 col-sm-6').removeClass('col-lg-4 col-cust-5 col-12'); }
        if (viewMode == 'grid_list') { parentsDiv.children().addClass('col-12').removeClass('col-lg-3 col-lg-4 col-md-4 col-sm-6 col-cust-5'); }
    });

    $('.qty-btn').on('click', function() {
        var $this = $(this);
        var oldValue = $this.siblings('input').val();
        if ($this.hasClass('plus')) { var newVal = parseFloat(oldValue) + 1; } else { if (oldValue > 1) { var newVal = parseFloat(oldValue) - 1; } else { newVal = 1; } }
        $this.siblings('input').val(newVal);
    });

    function scrollToTop() {
        var $scrollUp = $('.scroll-to-top'),
            $lastScrollTop = 0,
            $window = $(window);
        $window.on('scroll', function() {
            var topPos = $(this).scrollTop();
            if (topPos > $lastScrollTop) { $scrollUp.removeClass('show'); } else { if ($window.scrollTop() > 200) { $scrollUp.addClass('show'); } else { $scrollUp.removeClass('show'); } }
            $lastScrollTop = topPos;
        });
        $scrollUp.on('click', function(evt) {
            $('html, body').animate({ scrollTop: 0 }, 600);
            evt.preventDefault();
        });
    }
    scrollToTop();
    $('.modal').on('shown.bs.modal', function(e) { $('.product_navactive').resize(); })
    $('#mc-form').ajaxChimp({ language: 'en', callback: mailChimpResponse, url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef' });

    function mailChimpResponse(resp) {
        if (resp.result === 'success') {
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);
        } else if (resp.result === 'error') { $('.mailchimp-error').html('' + resp.msg).fadeIn(900); }
    }
    $(function() {
        var form = $('#contact-form');
        var formMessages = $('.form-message');
        $(form).submit(function(e) {
            e.preventDefault();
            var formData = $(form).serialize();
            $.ajax({ type: 'POST', url: $(form).attr('action'), data: formData }).done(function(response) {
                formMessages.removeClass('error text-danger').addClass('success text-success learts-mt-10').text(response);
                form.find('input:not([type="submit"]), textarea').val('');
            }).fail(function(data) { formMessages.removeClass('success text-success').addClass('error text-danger mt-3'); if (data.responseText !== '') { formMessages.text(data.responseText); } else { formMessages.text('Oops! An error occured and your message could not be sent.'); } });
        });
    });
})(jQuery);