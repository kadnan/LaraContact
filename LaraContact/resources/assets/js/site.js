$(function() {
    $('#delete').click(function (e) {
        e.preventDefault();
        if(confirm('Are you sure want to delete')) {
            document.location.href = $(this).attr('href');
        }
    });
});