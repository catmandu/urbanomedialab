(function () {

    var scenes = document.getElementsByClassName('escenas');
    var parallaxes = [];
    var hero = document.getElementById("her");
    var heroHei = hero.offsetHeight;

    for (let index = 0; index < scenes.length; index++) {
        const element = scenes[index];
        var parallaxInst = new Parallax(element);
        parallaxes.push(parallaxInst);
    }

    var rellax = new Rellax('.rellax');

    window.addEventListener("scroll", () => { scrollFunction() })

    // ScrollReveal().reveal('.item', {
    //     reset: true
    // });
    
})();

function scrollFunction() {
    if (document.body.scrollTop > (window.innerHeight / 2) || document.documentElement.scrollTop > (window.innerHeight / 2)) {
        document.getElementById("navbar").style.backgroundColor = "#000";
    } else {
        document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0)";
    }
}

$(document).ready(function () {
    // $('#papeleo').pagepiling({
    //     anchors: ['hero', 'ultimo', 'reels', 'contacto'],
    //     menu: '#menu',
    //     scrollingSpeed: 300,
    //     navigation: false,
    //     keyboardScrolling: false
    // });

    $(".work-grid .item").click(function () {
        $("#work-info").addClass("active back-faded");
        setTimeout(() => {
            $(".card-modal .content").removeClass("hidden");
        }, 100);
        $(".pp-scrollable").css({ 'overflow-y': 'hidden' });
    });

    $(".close-modal").click(function () {
        $(".card-modal .content").addClass("leaving");
        $(".pp-scrollable").css({ 'overflow-x': 'hidden' });
        setTimeout(() => {
            $("#work-info").removeClass("back-faded");
            $("#work-info").removeClass("active");
            $(".card-modal .content").removeClass("leaving");
            $(".card-modal .content").addClass("hidden");
            $(".pp-scrollable").css({ 'overflow-x': 'auto' });
        }, 600);
        $(".pp-scrollable").css({ 'overflow-y': 'scroll' });
    })

    var animation = lottie.loadAnimation({
        container: document.getElementById("logo-animation"), // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: 'assets/icons/UM_logo.json' // the path to the animation json
    });

    animation.addEventListener('complete', function () {
        $(".leng").css({ 'opacity': '1' });
        // $.fn.pagepiling.moveTo('ultimo');
        // $.fn.pagepiling.moveTo('hero');
        $("#eng, #esp").click(function (e) {

            applyLanguage(e.target.id);

            $(".overlay").css({ 'transform': 'translateY(-100vh)' });
        })
    })

    // $("#homeLogo").click(function () {
    //     $.fn.pagepiling.moveTo('hero');
    // });

    // $("#to-ultimo").click(function () {
    //     $.fn.pagepiling.moveTo('ultimo');
    // });

    $(".btn-video").click(function () {
        var pa = $(this).closest(".content");
        $(pa).addClass("mod-video");
    })

    $(".close-video").click(function () {
        var pa = $(this).closest(".content");
        var cont = $(this).closest(".sec-video");
        $(cont).addClass("down");
        setTimeout(() => {
            $(pa).removeClass("mod-video");
            $(cont).removeClass("down");
        }, 600);

    })

    $(".reel-video").click(function () {
        $("#reel-info").addClass("active back-faded");
        setTimeout(() => {
            $(".card-modal-reel .content").addClass("active");
        }, 100);
    })

    $("#edition-off").click(function () {
        var reel = $("#reel-persona");
        $(reel).addClass("active back-faded");
        setTimeout(() => {
            $(reel).find(".content").first().addClass("active");
        }, 600);
    })

    $(".exit-persona").click(function () {
        var reel = $("#reel-persona");

        $(reel).find(".content").first().removeClass("active");
        // $(reel).removeClass("back-faded");
        $(reel).find(".sec-persona").first().addClass("down");
        setTimeout(() => {
            $(reel).find(".sec-persona").first().removeClass("down");
            $(reel).removeClass("active");
        }, 500);
    });

    $(".close-video-reel").click(function () {
        $(".card-modal-reel .content").removeClass("active");
        $("#reel-info").removeClass("back-faded");
        setTimeout(() => {
            $("#reel-info").removeClass("active");
        }, 600);

        var pa = $(this).closest(".content");
        var cont = $(this).closest(".sec-video");
        $(cont).addClass("down");
        setTimeout(() => {
            $(cont).removeClass("down");
        }, 600);
    })

    $(".btn-carousel").click(function () {
        var pa = $(this).closest(".content");
        $(pa).addClass("mod-video");
    })

    $(".exit-carrousel").click(function () {
        var pa = $(this).closest(".content");
        var cont = $(this).closest(".sec-video");
        $(cont).addClass("down");
        setTimeout(() => {
            $(pa).removeClass("mod-video");
            $(cont).removeClass("down");
        }, 600);
    })

    function applyLanguage(selectedLanguage) {
        $.getJSON('js/languages.json')
            .done(function (languages) {
                var elements = $('body').find('*');
                var mandatorySpan = '<span>*</span>';

                $(elements).each(function (index, element) {
                    var translationKey = $(element).data('lng');
                    if (translationKey) {

                        var hasSpan = $(element).html().indexOf(mandatorySpan) >= 0;
                        $(element).text(
                            languages[selectedLanguage][translationKey]
                        ).append(hasSpan ? mandatorySpan : '');
                    }
                });
            });
    }

    $("#btn-toggle-menu").click(function () {
        $("#menu").toggleClass("menu-active");
    })

    $('.carrousel-personas').slick();

    $('.carrousel-personas').on('afterChange', function (event, slick, currentSlide, nextSlide) {

    });
});