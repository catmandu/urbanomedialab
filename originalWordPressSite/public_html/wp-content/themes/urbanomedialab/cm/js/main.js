(function () {
    
  $('#language').change(function(){
      var selLan = $(this).val();
      assignValues(selLan);
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

function assignValues(lanKey){
  var selLan = languages[lanKey];
  var keys = [];
  for(var k in selLan) keys.push(k);
  
  $.each(keys, function(index, key){
    $('input[name="' + key + '"]').val(selLan[key]);
  });
}
