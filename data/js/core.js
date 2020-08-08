// ScrollToTop //
(function ($) {
    $.fn.scrollToTop = function (options) {
        var config = {"speed": 800};
        if (options) {
            $.extend(config, {"speed": options});
        }
        return this.each(function () {
            var $this = $(this);
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $this.fadeIn();
                } else {
                    $this.fadeOut();
                }
            });
            $this.click(function (e) {
                e.preventDefault();
                $("body, html").animate({scrollTop: 0}, config.speed);
            });
        });
    };
})(jQuery);
// top Nav //
function _topNav() {
    var addActiveClass = false;
    jQuery("#topMain a.dropdown-toggle").bind("click", function (e) {
        if (jQuery(this).attr('href') == '#') {
            e.preventDefault();
        }
        addActiveClass = jQuery(this).parent().hasClass("resp-active");
        jQuery("#topMain").find(".resp-active").removeClass("resp-active");
        jQuery("#topMain").find(".arrow_box").removeClass("arrow_box");
        if (!addActiveClass) {
            jQuery(this).parents("li").addClass("resp-active");

        }
        return;
    });
    jQuery("#topMain li.dropdown, #topMain a.dropdown-toggle").bind("click", function (e) {
        e.stopPropagation();
    });
    if (jQuery("html").hasClass("ie") || jQuery("html").hasClass("ff3")) {
        jQuery("#topNav ul.nav > li.mega-menu div").addClass('block');
        jQuery("#topNav ul.nav > li.mega-menu div div").addClass('pull-left');
    }
}


// Search //
$(function () {
    $('a[href="#search"]').on('click', function (event) {
        event.preventDefault();
        if ($('#search').hasClass("open")) {
            $('#search').removeClass('open');
        } else {
            $('#search').addClass('open');
        }
    });
    $('#search, #search button.close').on('click keyup', function (event) {
        if (event.target == this || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});
 
//  get video //
function getServer(id, video) {
    var loading = '<div class="loading"> <div class="block"></div> <div class="block"></div> <div class="block"></div> <div class="block"></div> </div>';
    var $this = $('.servers ul li');
    $this.removeClass('active');
    $("#" + id).addClass('active');
    $('.getCode').html(loading);
    $.ajax({
        type: 'GET',
        url: vo_theme_dir + '/inc/temp/data/video.php',
        data: "id=" + vo_postID + "&video=" + video,
        success: function (data) {
            $('.getCode').remove();
            $('.boxVideos').append('<div class="getCode">' + data + '</div>');
        }
    });
}
function getPageContent() {
    var $this = $('.navTab li a'),
            loading = '<div class="loading"> <div class="block"></div> <div class="block"></div> <div class="block"></div> <div class="block"></div> </div>',
            $array = ["servers", "download", "assemblies", "comment", "info"];
    $this.click(function (event) {
        event.preventDefault();
        var fileName = $(this).data("name");
        if ($.inArray(fileName, $array) != '-1') {
            $('.getData').html(loading);
            $.ajax({
                url: vo_theme_dir + '/inc/temp/data/' + fileName + '.php',
                type: 'GET',
                data: 'id=' + vo_postID,
                success: function (res) {
                    $('.getData').html(res);
                }
            });
        } else {
            return false;
        }
    });
}
// get article //
function getItems() {
    var loading = '<div class="loading"> <div class="block"></div> <div class="block"></div> <div class="block"></div> <div class="block"></div> </div>';
    $('.postBy ul li').on('click', function (event) {
        event.preventDefault();
        $("body, html").animate({scrollTop: $(".postBy").offset().top}, 800);
        $('.navigation').hide();
        var fName = $(this).data("name"),
                arr = ["lastRecent", "pin", "views"];
        $("#postBy").find(".active").removeClass("active");
        $(this).addClass("active");
        if ($.inArray(fName, arr) != '-1') {
            $('.getItems').html(loading);
            $('.navigation').hide();
            $.ajax({
                type: 'GET',
                url: vo_theme_dir + '/inc/temp/data/articles.php',
                data: 'do=' + fName,
                success: function (data) {
                    $('.getItems').html(data);
                }
            });
        } else {
            return false;
        }
    });
}
function loadMore() {
    var loading = '<div class="loading"> <div class="block"></div> <div class="block"></div> <div class="block"></div> <div class="block"></div> </div>';
    $('.loadMore').on('click', function (event) {
        event.preventDefault();
        var fName = $(this).data("name"),
                arr = ["lastRecent", "pin", "views"],
                offset = 30;
        if ($.inArray(fName, arr) != '-1') {
            $('.getItems').html(loading);
            $.ajax({
                type: 'GET',
                url: vo_theme_dir + '/inc/temp/data/loadMore.php',
                data: 'do=' + fName + '&offset=' + offset,
                success: function (data) {
                    $('.getItems').append(data);
                    offset = offset + offset;
                }
            });
        }
    });
}
function popUp()
{
    $('.vTrailer').on('click', function () {
        var attr = $(this).attr('data-bpopup');
        if (typeof attr !== typeof undefined && attr !== false) {
            $('#trailerPopUp').bPopup({onOpen: function () {
                    $('.popupContentVideo').html($('.vTrailer').data('bpopup') || '');
                }, speed: 650, transition: 'slideFade', transitionClose: 'slideFadeOut', autoClose: false, onClose:
                        function () {
                            $('.vt').empty();
                        }
            });
        }
    });
}
function classTrailer() {
    var $this = $('.vTrailer'),
            attr = $this.attr('data-bpopup');
    if (typeof attr !== typeof undefined && attr !== false) {
        $('.vTrailer').addClass('trailer');
        $('.trailer').html('<i class="fa fa-play-circle-o"></i>');
    }
}
// load function //
if (typeof vo_theme_dir !== 'undefined' && typeof vo_postID !== 'undefined')
{
    getPageContent();
    popUp();
    classTrailer();
}
if (typeof slide !== 'undefined')
{
    $(function () {
        $('#slidePin').carouFredSel({
            width: '100%',
            height: 'auto',
            prev: '#prev1',
            next: '#next1',
            auto: true,
            responsive: true,
            items: {width: 300, visible: {min: 1, max: 5}},
            scroll: {items: 1, duration: 500, pauseOnHover: true, timeoutDuration: 3000, },
        });
    });
}
$("#toTop").scrollToTop();
_topNav();
getItems();

$(window).load(function () {
    setTimeout(function () { 
        $('.top').addClass('Atop');
    }, 500);
    setTimeout(function () {
        if (typeof header !== 'undefined'){
            $('header').addClass('LT');
            $('header').addClass('HLR');
        }
    }, 1500);
    setTimeout(function () {
        $('.logo').addClass('hC');
        $('.logoText').addClass('logoT');
    }, 2000);
    setTimeout(function () {
        if (typeof header !== 'undefined'){
            canvas();
        }
    }, 6000);
    $('.carousel').addClass('listCarousel');
});

    function canvas() {
    "use strict";
    var canvas = document.getElementById('canvas'),
            ctx = canvas.getContext('2d'),
            w = canvas.width = window.innerWidth,
            h = canvas.height = '260',
            hue = 217,
            stars = [],
            count = 0,
            maxStars = 1400;
    var canvas2 = document.createElement('canvas'),
            ctx2 = canvas2.getContext('2d');
    canvas2.width = 100;
    canvas2.height = 100;
    var half = canvas2.width / 2,
        gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
    gradient2.addColorStop(0.1, '#fff');
    gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
    gradient2.addColorStop(0.1, 'hsl(' + hue + ', 64%, 6%)');
    gradient2.addColorStop(1, 'transparent');
    ctx2.fillStyle = gradient2;
    ctx2.beginPath();
    ctx2.arc(half, half, half, 0, Math.PI * 2);
    ctx2.fill();
    function random(min, max) {
        if (arguments.length < 2) {
            max = min;
            min = 0;
        }
        if (min > max) {
            var hold = max;
            max = min;
            min = hold;
        }
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    function maxOrbit(x, y) {
        var max = Math.max(x, y),
            diameter = Math.round(Math.sqrt(max * max + max * max));
        return diameter / 2;
    }
    var Star = function () {
        this.orbitRadius = random(maxOrbit(w, h));
        this.radius = random(60, this.orbitRadius) / 12;
        this.orbitX = w / 2;
        this.orbitY = h / 2;
        this.timePassed = random(0, maxStars);
        this.speed = random(this.orbitRadius) / 50000;
        this.alpha = random(2, 10) / 10;
        count++;
        stars[count] = this;
    }
    Star.prototype.draw = function () {
        var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
                y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
                twinkle = random(10);
        if (twinkle === 1 && this.alpha > 0) {
            this.alpha -= 0.05;
        } else if (twinkle === 2 && this.alpha < 1) {
            this.alpha += 0.05;
        }
        ctx.globalAlpha = this.alpha;
        ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
        this.timePassed += this.speed;
    }
    for (var i = 0; i < maxStars; i++) {
        new Star();
    }
    function animation() {
        ctx.globalCompositeOperation = 'source-over';
        ctx.globalAlpha = 0.8;
        ctx.fillStyle = '#065E4A';
        ctx.fillRect(0, 0, w, h)
        ctx.globalCompositeOperation = 'lighter';
        for (var i = 1, l = stars.length; i < l; i++) {
            stars[i].draw();
        };
        window.requestAnimationFrame(animation);
    }
    animation();
}
 