// ScrollToTop //
(function ($){
    $.fn.scrollToTop = function (options){
        var config = { "speed": 800};
        if (options){$.extend(config, {"speed": options});}
        return this.each(function (){
            var $this = $(this);
            $(window).scroll(function (){if ($(this).scrollTop() > 100) {$this.fadeIn();} else{ $this.fadeOut();}});
            $this.click(function (e){e.preventDefault();$("body, html").animate({scrollTop: 0}, config.speed);});
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
        }
        else{
            $('#search').addClass('open');
        }
    });
    $('#search, #search button.close').on('click keyup', function (event) {
        if (event.target == this || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});
// Slide //
//function getOwlCarousel() {
//    var owl = $(".owl-carousel");
//    owl.owlCarousel({
//        lazyLoad: true,
//        autoplay: true,
//        autoplayTimeout: 5000,
//        autoplayHoverPause: true,
//        merge: true,
//        items: 5,
//        itemsDesktop: [1199, 5],
//        itemsDesktopSmall: [980, 4],
//        itemsTablet: [768, 3],
//        itemsTabletSmall: false,
//        itemsMobile: [479, 2],
//        nav: true,
//        loop: true,
//        margin: 5,
//        responsiveClass: true,
//        responsive: {0: {items: 2}, 600: {items: 4}, 1000: {items: 5}}
//    });
//}
// load page info //
function getPageInfo(){
    var loading = '<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div></div></div></div>';
    $('.getData').html(loading);
    $.ajax({
        type: 'GET',
        url: vo_theme_dir+'/inc/temp/data/info.php',
        data:'id='+vo_postID,
        success: function (data) {
            $('.getData').html(data);
        }
    });
}
//  get video //
 function getServer(id,video){
    var loading = '<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div></div></div></div>';
    var $this = $('.servers ul li');
    $this.removeClass('active');
    $("#"+id).addClass('active');
    $('.getCode').html(loading);
    $.ajax({
        type: 'GET',
        url: vo_theme_dir +'/inc/temp/data/video.php',
        data: "id=" + vo_postID + "&video=" + video,
        success: function (data) {
            $('.getCode').remove();
            $('.boxVideos').append('<div class="getCode">' + data + '</div>');
        }
    });
}
function getPageContent() {
    var $this = $('.navTab li a'),
        loading = '<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div></div></div></div>',
        $array = ["servers", "download", "series", "comment", "info"];
    $this.click(function (event) {
        event.preventDefault();
        var fileName = $(this).data("name");
        if ($.inArray(fileName, $array) != '-1') {
            $('.getData').html(loading);
            $.ajax({
                url: vo_theme_dir+'/inc/temp/data/' + fileName + '.php',
                type: 'GET',
                data: 'id=' + vo_postID,
                success: function (res) {
                    $('.getData').html(res);
                }
            });
        } 
        else {
            return false;
        }
    });
}
// get article //
function getItems() {
    var loading = '<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div></div></div></div>';
    $('.postBy ul li').on('click', function (event) { 
        event.preventDefault();
        $("body, html").animate({scrollTop: $(".postBy").offset().top }, 800);
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
                data: 'do='+fName,
                success: function (data) {
                    $('.getItems').html(data);
                 //   $('.navigation').show();
                }
            });
        }
        else {
           return false;
        }
    });
} 
function loadMore() {
    var loading = '<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div></div></div></div>';
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
                data: 'do='+fName+'&offset='+offset,
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
                $('#element_to_pop_up').bPopup({onOpen: function() {$('.popup-content').html($('.vTrailer').data('bpopup') || '');},speed: 650, transition: 'slideFade', transitionClose: 'slideFadeOut', autoClose: false, onClose:
                function () {
                    $('.example').empty();
                }
            });
        }
    });
}
function classTrailer(){
    var $this = $('.vTrailer'),
         attr = $this.attr('data-bpopup');
    if (typeof attr !== typeof undefined && attr !== false) {
        $('.vTrailer').addClass('trailer');
        $('.trailer').html('<i class="fa fa-play"></i>');
    }
}
// load function //
if (typeof vo_theme_dir !== 'undefined' && typeof vo_postID !== 'undefined')
{
    getPageInfo();
    getPageContent();
    popUp();
    classTrailer();
}
if (typeof slide !== 'undefined')
{
//    getOwlCarousel();
}
$("#toTop").scrollToTop();
_topNav() ;
getItems();
//loadMore();


$(window).load(function () {
    setTimeout(function () {
        $('.headerR').addClass('hR');
        $('.headerL').addClass('hL'); 
    }, 1500);
    setTimeout(function () {
        $('.top').addClass('htop');
    }, 1000);
    setTimeout(function () {
        $('.headerC').addClass('hC');
        $('.logoText').addClass('logoT');
    }, 2000);
     
});


$('.carousel').addClass('listCarousel');
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


$(function () {
    $('#genres').carouFredSel({
        width: '100%',
        height: '100',
        height: 'auto',
        prev: '#prev2',
        next: '#next2',
        auto: true,
        responsive: true,
        items: {width:126, visible: {min: 1, max: 10}},
        scroll: {items: 1, duration: 500, pauseOnHover: true, timeoutDuration: 3000, },
    });
});

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height =220;
var stars = [],
    FPS = 60,
    x = canvas.width;
for (var i = 0; i < x; i++) {
    stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random(),
        vx: Math.floor(Math.random() * 10) - 5,
        vy: Math.floor(Math.random() * 10) - 5
    });
}
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.globalCompositeOperation = "lighter";
    for (var i = 0, x = stars.length; i < x; i++) {
        var s = stars[i];
        ctx.fillStyle = "rgba(178, 92, 155,.9)";
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
        ctx.fill();
    }
}
function update() {
    for (var i = 0, x = stars.length; i < x; i++) {
        var s = stars[i];
        s.x += s.vx / FPS;
        s.y += s.vy / FPS;
        if (s.x < 0 || s.x > canvas.width)
            s.x = -s.x;
        if (s.y < 0 || s.y > canvas.height)
            s.y = -s.y;
    }
}
function tick() {
    draw();
    update();
    requestAnimationFrame(tick);
}
tick();