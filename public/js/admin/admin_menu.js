$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var trigger = $('.admin_menu');

    trigger.click(function() {
        var $this = $(this);
        var target = $this.data('target');

        $.ajax({
            success: function() {
                //window.location.href = '/addcategory';
                window.open("/" + target, "_self");
            }
        });
    });
});

