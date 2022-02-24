mercuryJs.PrefixImageByScale('.prefix_img');

var maxPrice = $('#maxPrice').val();

$("#slider-range").slider({ range: true, min: 0, max: maxPrice, values: [0, 0], slide: function(event, ui) { $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]); } });
$("#amount").val("$" + $("#slider-range").slider("values", 0) +
    " - $" + $("#slider-range").slider("values", 1));


var filter = {
    from: 0,
    to: 0,
    cate: [],
    catemini: [],
    brand: [],
    find: "",
    orderBy: "",
    rule: "",
    page: 1,
    itemper: 6,
    only: '',
    except: 'me',
    exceptCol: 'user_id',

    dumpTo: 'user-product'
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

$('#search-submit').click(function() {

    var price = $('#amount').val();
    price = price.split(" - ");
    filter.from = price[0].slice(1);
    filter.to = price[1].slice(1);
    filter.orderBy = $('#orderBy').val();
    AjaxStart();

})

$('#rule').click(function() {
    var rule = $(this).attr('rule');
    if (rule == "DESC") {
        $(this).addClass('rotate-180').removeClass('rotate-0');
        $(this).attr('rule', 'ASC');
        filter.rule = "ASC";
    } else {
        $(this).addClass('rotate-0').removeClass('rotate-180');
        $(this).attr('rule', 'DESC');
        filter.rule = "DESC";

    }
    AjaxStart();
})

$('#search_val').change(function() {
    filter.find = $(this).val();
})

$('.option').click(function() {
    var data = $(this).attr('data-value');
    $("#orderBy").val(data);
    filter.orderBy = data;
    AjaxStart();

})



function AjaxStart() {
    console.log(filter);
    $.ajax({
        url: 'http://localhost:8000/ajax/filter',
        method: 'POST',
        data: {
            filter,
            table: 'products'
        },
        dataType: 'html',
        success: (res) => {
            $('#dataholder').html(res);
            mercuryJs.PrefixImageByScale('.prefix_img');
            $('.header-menu ')[0].scrollIntoView();
            $('.page-select').click(function() {
                var page = $(this).attr('page');
                filter.page = page;
                AjaxStart();
            })
        }
    })
}

function SetOnly(id) {
    filter.only = id;
}

function SetCate(cate) {
    filter.catemini.push(cate);
    console.log(filter);
    $('.catemini[catemini_id=' + cate + ']').prop('checked', true);
}

function SetFind(find) {
    filter.find = find;
}