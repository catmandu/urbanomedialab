(function () {
    
  $('#language').change(function(){
      var languageName = $('#language option:selected').text();
      $('input[name="languageName"]').val(languageName);

      var selLan = $(this).val();
      navegacion(selLan);
      contacto(selLan);
      reels(selLan);
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });


      $(".menu-item").click((e) => {
        var targ = $(e.currentTarget).data("target");
        var ele = $("#"+targ);

        $(".area.active").removeClass("active");
        $(".menu-item").removeClass("active");

        $(e.currentTarget).addClass("active");
        $(ele).addClass("active");
      })
})();

function navegacion(lanKey){
  var selLan = languages[lanKey];

  $('input[name="home"]').val(selLan['home']);
  $('input[name="latest"]').val(selLan['latest']);
  $('input[name="reels"]').val(selLan['reels']);
  $('input[name="contact"]').val(selLan['contact']);
}

function contacto(lanKey){
  var selLan = languages[lanKey];

  $('input[name="name"]').val(selLan['name']);
  $('input[name="email"]').val(selLan['email']);
  $('input[name="phone"]').val(selLan['phone']);
  $('input[name="message"]').val(selLan['message']);
  $('input[name="sendEmail"]').val(selLan['sendEmail']);
}

function reels(lanKey){
  var selLan = languages[lanKey];

  $('input[name="onlineEditing1"]').val(selLan['onlineEditing1']);
  $('input[name="onlineEditing2"]').val(selLan['onlineEditing2']);
  $('input[name="offlineEditing1"]').val(selLan['offlineEditing1']);
  $('input[name="offlineEditing2"]').val(selLan['offlineEditing2']);
  $('input[name="colorCorrection1"]').val(selLan['colorCorrection1']);
  $('input[name="colorCorrection2"]').val(selLan['colorCorrection2']);
  $('input[name="motionGraphics1"]').val(selLan['motionGraphics1']);
  $('input[name="motionGraphics2"]').val(selLan['motionGraphics2']);
  $('input[name="3DAnimation1"]').val(selLan['3DAnimation1']);
  $('input[name="3DAnimation2"]').val(selLan['3DAnimation2']);
  $('input[name="vfx1"]').val(selLan['vfx1']);
  $('input[name="vfx2"]').val(selLan['vfx2']);
}