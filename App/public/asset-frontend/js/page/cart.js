mercuryJs.PrefixImageByScale('.prefix_img');

var maxquan = 10;

$('.quantity_btn').click(function() {
    var role = $(this).attr('role');
    var target = $(this).attr('target');
    var value_holder = $('#attr_quantiti_' + target);
    var quan = parseInt(value_holder.html());
    var isInstant = $(this).attr('instant');
    if (role == 'minus') {
        if (value_holder.html() > 1) {
            value_holder.html(quan - 1);
        }

    }
    if (role == 'plus') {
        if (quan < maxquan) {
            value_holder.html(quan + 1);

        }
    }
    if (isInstant) {
        PutToCard(target, value_holder.html(), RecalcTotal(target, quan));
    }
})

$('.product-remove').click(function() {
    var target = $(this).attr('target');
    console.log(target);
    $.ajax({
        url: 'http://localhost:8000/ajax/cart',
        method: 'POST',
        data: {
            attr: target,
            work: 'del'
        },
        dataType: 'html',
        success: (res) => {
            $('#pro_id_' + target).remove();

        }
    })
})

function PutToCard(id, quan, fun) {
    $.ajax({
        url: 'http://localhost:8000/ajax/cart',
        method: 'POST',
        data: {
            id,
            quan,
            work: 'put'
        },
        dataType: 'html',
        success: (res) => {
            $('.review_address_inner').prepend(res);
            if (fun) { fun() }
        }
    })
}

function RecalcTotal(id, prequan) {
    var quan = $('#attr_quantiti_' + id).html();
    var price = $('#pro_id_' + id + " > .product-price > price").html();
    var change = quan - prequan;
    var total = $('#pro_id_' + id + " > .product-total > total");
    total.html(parseInt(total.html()) + (change * price));
    var sum = $('#sumall > total');
    sum.html(parseInt(sum.html()) + (change * price));


}