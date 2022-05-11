$(document).ready(function()
{
    $('#myTable').DataTable({
        order: [[3,'desc']],
        pagingType : 'full_bumbers',
    });
});