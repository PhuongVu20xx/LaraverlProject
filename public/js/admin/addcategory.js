$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#btn_submit").click(function (event) {
        var formData = {
          categody_name: $("#category_name").val(),
          categody_root: $("#category_root").val(),
          category_status: $("#flexSwitchCheckChecked").val(),
        };

        $.ajax({
          type: "POST",
          url: "/addcategory",
          data: formData,
        })
      });

});
