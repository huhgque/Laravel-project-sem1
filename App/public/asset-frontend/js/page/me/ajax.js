$('.status-change').change(function() {
    var id = $(this).attr('id');
    var status = $(this).val();
    $.ajax({
        url: 'http://localhost:8000/me/order',
        method: 'POST',
        data: {
            id,
            status
        },
        dataType: 'html',
        success: (res) => {
            console.log(res);
        }
    })
})