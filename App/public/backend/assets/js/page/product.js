var filter = {
    status: "",
    cate: [],
    catemini: [],
    brand: [],
    find: "",
    orderBy: "",
    rule: "",
    page: 1,
    itemper: 10,
    only: '',
    dumpTo: 'admin-product'
}


$('.catemini').change(function() {
    var id = $(this).attr('catemini_id');
    var status = $(this).is(':checked');
    var pos = filter.catemini.indexOf(id);
    if (status) {
        if (pos == -1) {
            filter.catemini.push(id);
        }
    } else {
        filter.catemini.splice(pos, 1);
    }
})

$('.brand').change(function() {
    var id = $(this).attr('brand_id');
    var status = $(this).is(':checked');
    var pos = filter.brand.indexOf(id);
    if (status) {
        if (pos == -1) {

            filter.brand.push(id);
        }
    } else {
        filter.brand.splice(pos, 1);
    }
})

$('.cate').change(function() {
    var id = $(this).attr('cate_id');
    var status = $(this).is(':checked');
    var pos = filter.cate.indexOf(id);
    if (status) {
        if (pos == -1) {
            filter.cate.push(id);
        }
    } else {
        filter.cate.splice(pos, 1);
    }
})

$('#search_val').change(function() {
    filter.find = $(this).val();
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
        AjaxStart();
    })
}

function AjaxStart() {
    $.ajax({
        url: 'http://localhost:8000/ajax/filter',
        method: 'POST',
        data: {
            filter,
            table: 'products'
        },
        dataType: 'html',
        success: (res) => {
            $('#data-dump').html(res);
            mercuryJs.PrefixImageByScale('.prefix_img');
            PageSelect();
        }
    })
}


function SetOnly(id) {
    filter.only = id;
}