(function () {

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