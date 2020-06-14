//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parents('fieldset');
    next_fs = $(this).parents('fieldset').next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50) + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale(' + scale + ')',
                'position': 'absolute'
            });
            next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1 - now) * 50) + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

var mainNav = $('.main-nav').height();
var bannerMenu;
var bannerMenuHeight;
setTimeout(function() {
    bannerMenu = $('.bannerCategory').offset().top;
    bannerMenuHeight = $('.bannerCategory').height();
}, 2000);

$(window).scroll(function() {
    if ($(window).scrollTop() > mainNav) {
        $('.mainHeader').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() > (bannerMenu + bannerMenuHeight)) {
        $(".menuCatDrop").addClass('active')
    }
    if ($(window).scrollTop() < (mainNav + 1)) {
        $('.mainHeader').removeClass('navbar-fixed');
    }
    if ($(window).scrollTop() < (bannerMenu + bannerMenuHeight + 5)) {
        $(".menuCatDrop").removeClass('active')
    }
});
if ($('.bannerCategory').length == 0) {
    $(".menuCatDrop").addClass('active')
}

$('.burgerContainer').on('click', function() {
    $(this).toggleClass('active');
    $('body').toggleClass('show-menu');
    $('.mobileMenu').toggleClass('active')
})
if ($('.bottomMenu').length > 0) {
    $('body').addClass('hasBottomMenu')
}
$('.showCats').on('click', function() {
    $('.categoryMenu').addClass('active');
    $('body').addClass('catsOpen')
});
$('.catClose').on('click', function() {
    $('.categoryMenu').removeClass('active');
    $('body').removeClass('catsOpen')
})
var $subMenu = $('.has_submenu');
$subMenu.click(function() {
    var $this = $(this);
    if ($this.hasClass('showSubMenu')) {
        $this.removeClass('showSubMenu');
    } else {
        $subMenu.removeClass('showSubMenu');
        $this.addClass('showSubMenu');
    }
});