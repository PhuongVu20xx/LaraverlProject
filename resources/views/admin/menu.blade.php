<div class="m-3 ps-5  border border-danger border-start-0 border-top-0 border-bottom-0">
    <div class="m-1">
        <a class="text-decoration-none" href="/home">Home</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" id="category" href="#">Category</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/addproduct">Product</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/addoffer">Promotion</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/adminpayment">Payment</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/customer">Customer</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/feedback">Feedback</a>
    </div>
    <div class="m-1">
        <a class="text-decoration-none" href="/lastestorder">Lastest Order</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#category').click(function() {
            $.ajax({
                type: "GET",
                url: "/addcategory",
                success: function() {
                    window.location.href = '/addcategory';
                    //window.open("/addcategory", "_self");
                    //$(location).attr('href', '/addcategory');
                    //alert("Success");
                }
            });
            // $.get("/addcategory", function() {
            //     window.open("/addcategory", "_self");
            //     alert("Success");
            // });
            //$("bodycontent").load("/addcategory");
        });
    });
</script>
