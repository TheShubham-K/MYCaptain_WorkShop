$(document).ready(function() {
    $('#mycarousel').carousel({
        interval: 2000,
    });
    $('#carouselButton').click(function() {
        if ($('#carouselButton').children('span').hasClass('fa-pause')) {
            $('#mycarousel').carousel('pause');
            $('#carouselButton').children('span').removeClass('fa-pause');
            $('#carouselButton').children('span').addClass('fa-play');
        } else if ($('#carouselButton').children('span').hasClass('fa-play')) {
            $('#mycarousel').carousel('cycle');
            $('#carouselButton').children('span').removeClass('fa-play');
            $('#carouselButton').children('span').addClass('fa-pause');
        }
    });

    $('#myEduModalToggle').click(function() {
        $('#educationModal').modal('toggle');
    });

    $('#mydownload').click(function() {
        $('#mydownloadModal').modal('toggle');
    });

    $('#loginModalToggle').click(function() {
        $('#LoginModal').modal('toggle');
    });
});

// $(window).scroll(function() {
//     $(".top").css("opacity", 1 - $(window).scrollTop() / 250);
// });

// $(document).scroll(function() {
//     var scrollVar = $(document).scrollTop();
//     $('.top').css("opacity", (scrollVar / 300) - 1);
// })

$(document).on("wheel", function() {
    var pageTop = $(document).scrollTop()
    var pageBottom = pageTop + $(window).height()
    var tags = $("section")
    var tags1 = $("div")

    for (var i = 0; i < tags.length; i++) {
        var tag = tags[i]

        if ($(tag).position().top > pageBottom) {
            $(tag).removeClass("visible")
        } else {
            $(tag).addClass("visible")
        }
    }

    for (var i = 0; i < tags1.length; i++) {
        var tag = tags1[i]

        if ($(tag).position().top > pageBottom) {
            $(tag).removeClass("visible")
        } else {
            $(tag).addClass("visible")
        }
    }
})