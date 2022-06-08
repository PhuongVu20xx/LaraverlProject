$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#btn_submit").click(function () {
        $.ajax({
            type: "POST",
            url: "/addcategory",
            data: {
                category_name: $("#category_name").val(),
                category_root: $("#category_root").val(),
                category_status: $("#flexSwitchCheckChecked").val()
            }, success: function () {
                alert("Success");
            }
        })
    });
})

