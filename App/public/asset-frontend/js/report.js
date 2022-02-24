var report = { table: "", id: "", reason: "" };

function SetReport(table) {
    report.table = table;
}

function ReportId(id) {
    report.id = id;
}

function ActiveReportButton() {
    $('.report-btn').click(function() {
        var target = $(this).attr('target');
        ReportId(target);

    })
    $('#send-report').click(function() {
        SendReport();
        console.log(report);

    })
    $('#drop-report').click(function() {
        $("#reportWarning").css('display', 'none');
        $('#reportSuccess').css('display', 'none');

    })
}

function SendReport() {
    var reason = $('#reasondata').val();
    if (reason) {
        report.reason = reason;
        console.log(report);
        $.ajax({
            url: 'http://localhost:8000/ajax/report',
            method: 'POST',
            data: {
                report
            },
            dataType: 'html',
            success: (res) => {
                $('#report-form').prepend(res);
                $('#reportSuccess').css('display', 'block');
            }
        })
    } else {
        $("#reportWarning").css('display', 'block');
    }
}