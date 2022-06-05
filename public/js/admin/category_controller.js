$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function edit(event) {
    var item = event.target;
    var category_id = $(item).attr("data-id");
    var category_status = $("input[id='category_status'][data-id=" + category_id + "]").prop('checked') == true ? 1 : 0;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: '/allcategory',
        data: {
            id: category_id,
            status: category_status
        },
        success: function () {
            //window.open('/editcategory', '_blank');
            //loadDoc();
        }
    })
}




function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "editcategory");
    xhttp.send();
  }
// $(document).ready(() => {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });


    // $('#category_status').change(function(){
    // //$('$category_status').change(function(){
    //     var category_id = $('#category_status').attr('data-id');
    //     var category_status = $('#category_status').prop('checked') == true ? 1:0;
    //     //var category_status = $(this).is(':checked');
    //     //var category_status = $("checkbox").is(":checked")
    //     $.ajax({
    //         method: "POST",
    //         url: "addcategory",
    //         data:{
    //             id : category_id,
    //             status : category_status
    //         },
    //         success:function(data){
    //             alert(data.success)}
    //     })
    //     .done(function()
    //     {
    //         arlet("Data saved")
    //     })
    // });

    // $('#edit_category').click(function (event) {
    //     var item = event.target;
    //     var idc = $(item).parent("svg").attr("data-id");

    //     var category_status = $("input[id='category_status'][data-id=" + idc + "]").prop('checked') == true ? 1 : 0;
    //     $.ajax({
    //         method: "POST",
    //         url: '/allcategory',
    //         data: {
    //             id: idc,
    //             status: category_status,
    //             name: category_name
    //         },
    //         success: function (data) {
    //             alert(data.success)
    //         }
    //     })
    //         .done(function () {
    //             arlet("Data saved")
    //         })
    // });

    // $(".update_category").click(function(e){

    //     e.preventDefault();
    //     var category_id = $('#category_status').attr('data-id');
    //     //var category_status = $('#category_status').prop('checked') == true ? 1:0;
    //     //var category_status = $(this).is(':checked');
    //     var category_status = $("checkbox").is(":checked")
    //     $.ajax({
    //         method: "POST",
    //         url: "addcategory",
    //         data:{
    //             id : category_id,
    //             status : category_status
    //         },
    //         success:function(data){
    //             alert(data.success)}
    //     })
    //     .done(function()
    //     {
    //         arlet("Data saved")
    //     })
    // })

    // $("#update_category").on('submit', function(e){

    //     e.preventDefault();
    //     var category_id = $('#category_status').attr('data-id');
    //     //var category_status = $('#category_status').prop('checked') == true ? 1:0;
    //     //var category_status = $(this).is(':checked');
    //     var category_status = $("checkbox").is(":checked")
    //     $.ajax({
    //         method: "POST",
    //         url: "addcategory",
    //         data:{
    //             id : category_id,
    //             status : category_status
    //         },
    //         success:function(data){
    //             alert(data.success)}
    //     })
    //     .done(function()
    //     {
    //         arlet("Data saved")
    //     })
    // })
//})


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
