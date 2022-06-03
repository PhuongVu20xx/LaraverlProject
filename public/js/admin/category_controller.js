$(document).ready(() =>{
    $.ajaxSetup({
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }),
    $('#category_status').change(()=>{
        var category_id = $('#category_status').attr('data-id');
        var category_status = $('#category_status').prop('checked') == true ? 1:0;
        $.ajax({
            method: "POST",
            url: "/addcategory",
            data:{
                id : category_id,
                status : category_status
            }
        })
        .done(function(msg) {
                  alert("Data saved");
               })
    })
})