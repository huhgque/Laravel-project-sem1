pageState = {
    attr: [],
    attr_current: 0
}

price = {
    base: null,
    sale: 0
}

function SetPageState() {
    var child = $('#VersionList').children();
    for (let i = 0; i < child.length - 1; i++) {
        pageState.attr.push(i + 1);

    }
}

$('#baseprice').change(function() {
    price.base = $(this).val();
    CalSaleRes();
})
$('#sale').change(function() {
    price.sale = $(this).val();
    if (price.sale > 99) {
        price.sale = 99;
    } else if (price.sale < 0) {
        price.sale = 0;
    }
    $(this).val(price.sale);
    CalSaleRes();
})


$(document).ready(function() {
    $('#VersionList').change(function() {

        var x = $(this).val();
        if (x == "new") {
            pageState.attr_current++;
            getattrform();
            MakeOption(pageState.attr_current);

        } else {
            ActiveVersion(x);
        }
    });
})


$('#avata').change(function() {
    file = this.files[0];
    $('#avata_holder').attr('src', window.URL.createObjectURL(file));
    mercuryJs.PrefixImageByScale('.prefix_img');
})

$('.image_selector').change(function() {
    var files = this.files;
    $('.image_holder').html('');
    var i = 0;
    while (i < files.length) {
        var html = `<div class="prefix col-2 p-0" prefixScale="4,3">
            <img src="${window.URL.createObjectURL(files[i])}"/>
        </div>`;
        $('.image_holder').append(html);
        i++;
    }
    mercuryJs.PrefixImageByScale('.prefix');

})

function CalSaleRes() {
    var res = price.base - (price.base * price.sale) / 100;
    res = Math.round(res, 0.3);
    $('#sale_res').val(res);
}

function CellActive(cel = 0) {



    $('.add_more_attr[attr_target=' + cel + ']').click(function() {
        var target = $(this).attr('attr_target');
        var temp = $('#attr-holder-' + target + ' .attr-group').clone()[0];
        $(temp).children().each(function() {
            $(this).children(0).val('');
        });
        let r = (Math.random() + 1).toString(36).substring(7);
        $(temp).attr('index', r);
        $(temp).find('.attr_row_remove').attr('row_id', r);
        $('#attr-holder-' + target).append(temp);
        AttrRowRemove();
    })

    AttrRowRemove();

    $('.delete_attr[attr_target=' + cel + ']').click(function() {
        var target = $(this).attr('attr_target');
        $('#version_' + target).remove();
        $('#VersionList > option[value=' + target + ']').remove();
        var indx = pageState.attr.indexOf(parseInt(target));
        pageState.attr.splice(indx, 1);

        if ($('.version_box').children().length <= 0) {
            getattrform();
            MakeOption(pageState.attr_current);
            ActiveVersion(pageState.attr[indx - 1]);
        } else {
            ActiveVersion(pageState.attr[0]);
        }
    })
}

function getattrform() {
    $.ajax({
        url: "http://localhost:8000/ajax/attrform",
        method: "POST",
        dataType: "html",
        data: {
            form_num: pageState.attr_current
        },
        success: (res) => {
            $(".version_box").append(res);
            ActiveVersion(pageState.attr_current);
            pageState.attr.push(pageState.attr_current);
            CellActive(pageState.attr_current);
        }
    })
}

function ActiveVersion(ver) {
    $('#version_' + ver).css('display', 'block').siblings().css('display', 'none');
}

function MakeOption(option) {
    var cloneLastChild = $('#VersionList option:last-child').clone();
    $('#VersionList option:last-child').remove();
    $("#VersionList").append(`<option value="${option}">Cấu hình ${option+1}</option>`);
    $("#VersionList").append(cloneLastChild);
    $("#VersionList").val(option);
}

function AttrRowRemove() {
    $('.attr_row_remove ').click(function() {
        var row_id = $(this).attr('row_id');
        var attr = $(this).attr('attr_id');
        if ($('#attr-holder-' + attr).children().length > 1) {
            $('#attr-holder-' + attr + " > tr[index=" + row_id + "]").remove();
        }
    })
}