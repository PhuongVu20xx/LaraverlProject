$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#category').click(function() {

        $('#container').load('addcategory.blade.php');
        return false;
        // $.ajax({
        //     type: "GET",
        //     url: "/addcategory",
        //     success: function() {
        //         //window.location.href = '/addcategory';
        //         window.open("/addcategory", "_self");
        //         //$(location).attr('href', '/addcategory');
        //         //alert("Success");
        //     }
        // });
        // $.get("/addcategory", function() {
        //     window.open("/addcategory", "_self");
        //     alert("Success");
        // });
        //$("bodycontent").load("/addcategory");
    });
});
