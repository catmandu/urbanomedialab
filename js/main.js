(function () {
    // your page initialization code here
    // the DOM will be available here
    // var cenar = document.getElementById('cenar');
    // var parallaxCena = new Parallax(cenar);

    var scenes = document.getElementsByClassName('escenas');
    var parallaxes = [];
    var hero = document.getElementById("her");
    var heroHei = hero.offsetHeight;

    for (let index = 0; index < scenes.length; index++) {
        const element = scenes[index];
        var parallaxInst = new Parallax(element);
        parallaxes.push(parallaxInst);
    }

    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {

        // var top = document.documentElement.scrollTop || document.body.scrollTop;

        // hero.style.height = (heroHei - top).toString().concat('px');

        // if (document.body.scrollTop > 76 || document.documentElement.scrollTop > 76) {
        //     document.getElementById("navbar").style.top = "0";
        // } else {
        //     document.getElementById("navbar").style.top = "-100px";
        // }


    }
})();

$(document).ready(function () {
    $('#papeleo').pagepiling({
        anchors: ['hero', 'ultimo', 'reels', 'nosotros', 'contacto'],
        menu: '#menu',
        scrollingSpeed: 300,
        navigation: false
    });
});