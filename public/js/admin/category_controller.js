$(document).ready(() =>{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#category_status').change(function(){
    //$('$category_status').change(function(){
        var category_id = $('#category_status').attr('data-id');
        var category_status = $('#category_status').prop('checked') == true ? 1:0;
        //var category_status = $(this).is(':checked');
        //var category_status = $("checkbox").is(":checked")
        $.ajax({
            method: "POST",
            url: "addcategory",
            data:{
                id : category_id,
                status : category_status
            },
            success:function(data){
                alert(data.success)}
        })
        .done(function()
        {
            arlet("Data saved")
        })
    });

    $('#update_category').addEventListener('click', function (event) {
        event.preventDefault();
        var category_id = $('#category_status').attr('data-id');
        //var category_status = $('#category_status').prop('checked') == true ? 1:0;
        //var category_status = $(this).is(':checked');
        var category_status = $("checkbox").is(":checked")
        $.ajax({
            method: "POST",
            url:  "{{ url('/addcategory') }}",
            data:{
                id : category_id,
                status : category_status
            },
            success:function(data){
                alert(data.success)}
        })
        .done(function()
        {
            arlet("Data saved")
        })
    });

    $(".update_category").click(function(e){

        e.preventDefault();
        var category_id = $('#category_status').attr('data-id');
        //var category_status = $('#category_status').prop('checked') == true ? 1:0;
        //var category_status = $(this).is(':checked');
        var category_status = $("checkbox").is(":checked")
        $.ajax({
            method: "POST",
            url: "addcategory",
            data:{
                id : category_id,
                status : category_status
            },
            success:function(data){
                alert(data.success)}
        })
        .done(function()
        {
            arlet("Data saved")
        })
    })

    $("#update_category").on('submit', function(e){

        e.preventDefault();
        var category_id = $('#category_status').attr('data-id');
        //var category_status = $('#category_status').prop('checked') == true ? 1:0;
        //var category_status = $(this).is(':checked');
        var category_status = $("checkbox").is(":checked")
        $.ajax({
            method: "POST",
            url: "addcategory",
            data:{
                id : category_id,
                status : category_status
            },
            success:function(data){
                alert(data.success)}
        })
        .done(function()
        {
            arlet("Data saved")
        })
    })
})


// function attachEventsFid2() {
//     var main=$('.main-wrapper');
//     var btn = document.getElementById("btn-iphone4");

//     btn.addEventListener('click', function(event) {
//         event.preventDefault();
//         $.ajax({
//             type:"post",
//             url:BASE_URL+'index/formfid2/',
//             data:{'iphone':iphone},
//             cache:false,
//             success:function(data){
//             main.parent().html(data);
//             }
//         });
//     });
// };
