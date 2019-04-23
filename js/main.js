(function () {
    // your page initialization code here
    // the DOM will be available here
    // var scene = document.getElementById('scene');
    // var parallaxInstance = new Parallax(scene);

    var scenes = document.getElementsByClassName('escenas');
    var parallaxes= [];

    for (let index = 0; index < scenes.length; index++) {
        const element = scenes[index];
        var parallaxInst = new Parallax(element);
        parallaxes.push(parallaxInst);
    }
})();