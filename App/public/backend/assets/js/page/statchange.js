var table;
$('#statuschange').change(function() {
    var target = $(this).attr('target');
    var val = $(this).val();
    $.ajax({
        url: 'http://localhost:8000/admin/report',
        method: 'POST',
        data: {
            table,
            id: target,
            status: val
        },
        dataType: 'html',
        success: (res) => {}
    })
});

function SetTable(select) {
    table = select;
}