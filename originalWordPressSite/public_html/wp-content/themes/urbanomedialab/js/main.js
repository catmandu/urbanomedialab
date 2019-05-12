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
})();

$(document).ready(function () {
    $('#papeleo').pagepiling({
        anchors: ['hero', 'ultimo', 'reels', 'contacto'],
        menu: '#menu',
        scrollingSpeed: 300,
        navigation: false,
        keyboardScrolling: false
    });

    $(".work-grid .item").click(function () {
        $("#work-info").addClass("active back-faded");
        setTimeout(() => {
            $(".card-modal .content").addClass("active");
        }, 100);
        $(".pp-scrollable").css({ 'overflow-y': 'hidden' });
    });

    $(".close-modal").click(function () {
        $(".card-modal .content").removeClass("active");
        $("#work-info").removeClass("back-faded");
        setTimeout(() => {
            $("#work-info").removeClass("active");
        }, 600);
        $(".pp-scrollable").css({ 'overflow-y': 'scroll' });
    })

    var animation = lottie.loadAnimation({
        container: document.getElementById("logo-animation"), // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: 'wp-content/themes/urbanomedialab/assets/icons/UM_logo.json' // the path to the animation json
    });
    
    animation.addEventListener('complete', function () {
        $(".leng").css({ 'opacity': '1' });        
        $.fn.pagepiling.moveTo('hero');
        $("#eng, #esp").click(function (e) {
            
            applyLanguage(e.target.id);
           
            $(".overlay").css({ 'transform': 'translateY(-100vh)' });
        })
    })

    $("#to-ultimo").click(function () {
        $.fn.pagepiling.moveTo('ultimo');
    })

    $("#to-reels").click(function () {
        $.fn.pagepiling.moveTo('reels');
    })

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

    $(".reel-type").click(function() {
        $("#reel-info").addClass("active back-faded");
        setTimeout(() => {
            $(".card-modal-reel .content").addClass("active");
        }, 100);
    })

    $(".close-video-reel").click(function() {
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

    function applyLanguage(selectedLanguage){
        $.getJSON('wp-content/themes/urbanomedialab/js/languages.json')
        .done(function(languages){
            var elements = $('body').find('*');
            var mandatorySpan = '<span>*</span>';

            $(elements).each(function(index, element){
                var translationKey = $(element).data('lng');
                if(translationKey){
    
                    var hasSpan = $(element).html().indexOf(mandatorySpan) >= 0;
                    $(element).text(
                        languages[selectedLanguage][translationKey]
                    ).append(hasSpan ? mandatorySpan : '');
                }
            });
        });
    }

    $("#btn-toggle-menu").click(function() {
        $("#menu").toggleClass("menu-active");
    })
});