var filter = {
    status: "",
    find: "",
    role: "",
    orderBy: "",
    rule: "",
    page: 1,
    itemper: 10,
    except: 'me',
    exceptCol: 'id',
    dumpTo: 'admin-user'
}


$('#search_val').change(function() {
    filter.find = $(this).val();
})

$("#role-select").change(function() {
    var val = $(this).val();
    filter.role = val;
})
$("#status-select").change(function() {
    var val = $(this).val();
    filter.status = val;
})
$("#orderBy").change(function() {
    var val = $(this).val();
    filter.orderBy = val;
})
$("#rule").change(function() {
    var val = $(this).val();
    filter.rule = val;
})


$('#search-submit').click(function() {

    filter.orderBy = $('#orderBy').val();
    AjaxStart();
    console.log(filter);

})

function PageSelect() {

    $('.page-select').click(function() {
        var page = $(this).attr('page');
        filter.page = page;
        console.log(filter);
        AjaxStart();
    })
}

function AjaxStart() {
    $.ajax({
        url: 'http://localhost:8000/ajax/filter',
        method: 'POST',
        data: {
            filter,
            table: 'users'
        },
        dataType: 'html',
        success: (res) => {
            $('#data-dump').html(res);
            mercuryJs.PrefixImageByScale('.prefix_img');
            PageSelect();
            ApplyChange();
        }
    })
}


function SetOnly(id) {
    filter.only = id;
}

function ApplyChange() {
    $('.apply-change').click(function() {
        var id = $(this).attr('id');
        var status = $(`.user-status[id="${id}"]`).val();
        var role = $(`.user-role[id="${id}"]`).val();
        $.ajax({
            url: 'http://localhost:8000/admin/user',
            method: 'POST',
            data: {
                id,
                status,
                role
            },
            dataType: 'html',
            success: (res) => {

            }
        })
    })
}