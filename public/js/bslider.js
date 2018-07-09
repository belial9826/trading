var winW = $(window).width();
var winH = $(window).height();
var hashtags_info = [];
var $fullscreen_wrapper = $(".fullscreen-wrapper");
var $slider = $("#slider");
var $scroll_pane = $(".scroll-pane");
var $scroll_content = $(".scroll-content");
var numInView = 3;
var extraNum = 4;
var side_padding = 100;
var itemW = winW / numInView;
var win_center_left = .33 * winW;
var win_center_right = .66 * winW;
var scroll_items = [];
var art_items = [];
var center_item = [];

loadAll = function(){
    
    loadItems();
    resizeItems();
    initSlider();  
    if($('.scroll-content .scroll-content-item:visible').size() > 0){
        $('.scroll-content .scroll-content-item:visible').first()[0].scrollIntoView();
        $('#slider span').css({left:'0%'});
    }
}

loadItems = function(){
    scroll_items = $(".scroll-content-item:visible");
    art_items = $(".scroll-content-item.art-piece:visible");
    center_item = $(".scroll-content-item.intro:visible");
}

showSliderTip = function() {
}

initSlider = function() {
    if ($slider.size() > 0){
        $slider.slider({
            start: function() {
                closeItem()
            },
            slide: function(e, t) {
                var i = Math.round(t.value / 100 * ($scroll_content.width() - winW));
                $scroll_pane.scrollLeft(i)
            },
            stop: function() {
                
            }
        })
    }
}

openItem = function() {
    console.log(center_item);
    if(center_item.is(":last-child")){
        var moved_to = center_item[0].offsetLeft - 2*side_padding - 4;
    }else{
        var moved_to = center_item[0].offsetLeft - side_padding - 4;
        
    }
    center_item.animate({ "background-size": "100%!important" })
    if (center_item.hasClass("in-view")&& (center_item.addClass("open"), center_item.width(winW - 2 * side_padding), center_item.find(".content-wrapper").width(winW - 2 * side_padding + 16), $scroll_pane.animate({
            scrollLeft: moved_to
        }), $scroll_content.width(2 * (scroll_items.length - 1) * itemW + itemW * extraNum + winW - 2 * side_padding ), $(".slider-wrapper.slider-handle").fadeOut(function() {
            $(".slider").addClass("grey")
        }), $(".s-diamond").addClass("grey"), $(".slider-steps").fadeOut(function() {
            $(".slider-steps").addClass("grey")
        })) 
    ){

    }
}

showContent = function(e, t) {
    var i = e;
    setTimeout(function() {
        t.find(".detail-wrapper").fadeIn()
    }, 300)
}

closeItem = function() {

    if(winW >= 768){
        center_item.width(itemW);
        if(center_item.is(":last-child")){
            var moved_to = (scroll_items.length - 3) * itemW;
            $scroll_pane.animate({scrollLeft: moved_to});
        };
        center_item.removeClass("open");
        center_item.animate({ "background-size": "cover" })
        center_item.find(".detail-wrapper").fadeOut(100);
        center_item.find(".content-wrapper").removeAttr("style");
        resizeItems();
        $(".slider-wrapper.slider-handle").fadeIn();
        $(".slider-steps").fadeIn();
        $(".s-diamond").removeClass("grey");
        $(".slider").removeClass("grey").removeClass("disabled");
        $(".slider-steps").removeClass("grey");
    }else{
      $("html,body").animate({  scrollTop: center_item.offset().top});
        center_item.removeClass("open");
        center_item.removeClass("in-view");
        center_item.find(".info-title").removeAttr("style");
        center_item.find(".detail-wrapper").fadeOut(100);
    } 
}

setHashtags = function() {
}

resizeItems = function() {
    itemW = winW / numInView;
    if(winW >= 768){
        $scroll_content.width((scroll_items.length - 1) * itemW + itemW * extraNum + winW - 2 * side_padding);
        $(scroll_items).width(itemW);
        $(scroll_items).find(".content-wrapper").removeAttr("style");
        $scroll_content.animate({'width':scroll_items.length  * itemW});
        
    }else{
        $scroll_content.removeAttr("style");
        $(scroll_items).css({width: "100%","margin-left": 0});
        $(scroll_items).find(".content-wrapper").removeAttr("style");
    }
}

resized = function() {
    winW = $(window).width(), winH = $(window).height(), winW >= 1024 ? (numInView = 3, extraNum = 4, win_center_left = .33 * winW, win_center_right = .66 * winW) : winW >= 768 && 1024 > winW ? (numInView = 2, extraNum = 2, win_center_left = .5 * winW, win_center_right = .95 * winW) : (numInView = 1, extraNum = 0, win_center_left = .05 * winW, win_center_right = .95 * winW), $(".scroll-content-item.open").length > 0 && winW >= 768 && closeItem();
    resizeItems();
    setTimeout(function() {
        var e = $(".scroll-pane").scrollLeft() / ($scroll_content.width() - winW) * 100;
        if($slider.size() > 0){
            $slider.slider("value", e);
        }
    }, 100);
    $fullscreen_wrapper.find(".media-wrapper").height(winH);
    $fullscreen_wrapper.fadeOut(function() {
        $fullscreen_wrapper.find(".media-wrapper").empty()
    })
};

$(".s-diamond").on("click", function() {
    if ($(".scroll-content-item.open").length > 0 && !$(this).hasClass("disabled")) {
        var e = $(".scroll-content-item.open").attr("data-art-index");
        if ($(this).hasClass("next")) var t = parseInt(e) + 1;
        else if ($(this).hasClass("prev")) var t = parseInt(e) - 1;
        closeItem(), setTimeout(function() {
            center_item = $('.scroll-content-item[data-art-index="' + t + '"]'), center_item.addClass("open in-view"), openItem()
        }, 360), 0 === t ? ($(".s-diamond.prev").addClass("disabled"), $(".s-diamond.next").removeClass("disabled")) : t === art_items.length - 1 ? ($(".s-diamond.next").addClass("disabled"), $(".s-diamond.prev").removeClass("disabled")) : $(".s-diamond").hasClass("disabled") && $(".s-diamond").removeClass("disabled")
    }
});




$(".social-share").on("click", ".social", function(e) {
    e.preventDefault();
    var t = $(this).attr("href"),
        i = $(this).attr("data-share-title"),
        n = 600,
        s = 500,
        a = window.open(t, i, "width=" + n + ",height=" + s);
    a.focus()
});

$(".scroll-content-item").on("click", ".view-fullscreen", function() {
    var e;
    $(".scroll-content-item.open").find(".art img").length > 0 ? e = $(".scroll-content-item.open").find(".art img").clone() : $(".scroll-content-item.open").find(".art .video-wrapper").length > 0 && (e = $(".scroll-content-item.open").find(".art .video-wrapper").clone()), $fullscreen_wrapper.find(".media-wrapper").append(e), $fullscreen_wrapper.find(".media-wrapper").height(winH), $fullscreen_wrapper.fadeIn()
});

$(".scroll-content-item").click(function() {
    var $this = $(this);
    if($(".scroll-content-item.open").length > 0) {
        $this.addClass('open');
        $('.scroll-content-item').removeClass('open');
        var scrollLeft = $(".scroll-pane").scrollLeft();
        scrollLeft -= 2 * -1;
        var i = ($('.scroll-content-item').width() + scrollLeft) / ($scroll_content.width() - winW) * 100;
        $slider.slider("value", i);
    }
})

$fullscreen_wrapper.on("click", ".close-btn", function() {
    $fullscreen_wrapper.fadeOut(function() {
        $fullscreen_wrapper.find(".media-wrapper").empty()
    })
});

$(window).on("resize", resized), $(window).load(function() {
    $(".site-loader").addClass("loaded").fadeOut()
});

$(document).ready(function() {
    winW >= 1024 ? (numInView = 3, extraNum = 4, win_center_left = .33 * winW, win_center_right = .66 * winW) : winW >= 768 && 1024 > winW ? (numInView = 2, extraNum = 2, win_center_left = .25 * winW, win_center_right = .75 * winW) : (numInView = 1, extraNum = 0, win_center_left = .05 * winW, win_center_right = .95 * winW);
    var itemW = winW / numInView;
    loadAll();
    $(scroll_items).on("click", function(e) {
        if($(this).hasClass('closed')) return;
        if (0 === $(".scroll-content-item.open").length && !($(this).hasClass("open") || $(this).hasClass("intro") || $(this).hasClass("endtro") || $(e.target).hasClass("close-item"))) {
            if (center_item = $(this), $(this).addClass("open in-view"), winW >= 768) {
                openItem();
                var t = parseInt($(this).attr("data-art-index"));
                0 === t ? ($(".s-diamond.prev").addClass("disabled"), $(".s-diamond.next").removeClass("disabled")) : t === art_items.length - 1 ? ($(".s-diamond.next").addClass("disabled"), $(".s-diamond.prev").removeClass("disabled")) : $(".s-diamond").hasClass("disabled") && $(".s-diamond").removeClass("disabled")
            } else showContent($(this).attr("data-art-index"), $(this)), $("html,body").animate({
                scrollTop: $(this).offset().top
            });
        }
    });

    $(scroll_items).on("click", ".close-item", closeItem);
    if($(".scroll-pane").size() > 0){
        $(".scroll-pane").mousewheel(function(e, t) {
            if (showSliderTip(), winW >= 768 && 0 === $(".scroll-content-item.open").length) {
                if(!navigator.platform.indexOf('Mac') > -1) {
                    t = t * 10;
                }
                this.scrollLeft -= 2 * t;
                var i = this.scrollLeft / ($scroll_content.width() - winW) * 100;
                $slider.slider("value", i), e.preventDefault()
            }
        });        
    }

    $('.slider-wrapper .arrow-right').click(function() {
        if (showSliderTip(), winW >= 768 && 0 === $(".scroll-content-item.open").length) {
            var scrollLeft = $(".scroll-pane").scrollLeft();
            scrollLeft -= 2 * -1;
            var i = ($('.scroll-content-item').width() + scrollLeft) / ($scroll_content.width() - winW) * 100;
            $(".scroll-pane").animate({scrollLeft: $('.scroll-content-item').width() + scrollLeft}, 500);
            $slider.slider("value", i);
        }
    })

    $('.slider-wrapper .arrow-left').click(function() {
        if (showSliderTip(), winW >= 768 && 0 === $(".scroll-content-item.open").length && $(".scroll-pane").scrollLeft() > $('.scroll-content-item').width()) {
            var scrollLeft = $(".scroll-pane").scrollLeft();
            scrollLeft -= 2 * -1;
            var i = (scrollLeft - $('.scroll-content-item').width()) / ($scroll_content.width() - winW) * 100;
            $(".scroll-pane").animate({scrollLeft: scrollLeft - $('.scroll-content-item').width()}, 500);
            $slider.slider("value", i);
        }
    })

});



