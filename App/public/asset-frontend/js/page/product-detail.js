mercuryJs.PrefixImageByScale('.prefix_img');
myComment = {
    comment: '',
    star: 5,
    pro_id: 1
}

var myOrder = { id: null, attr: [], basePrice: 0, sale: 0, quantity: 1 };


var starreset = undefined;
var isStarOut = true;
var maxquan = 10;

myComment.pro_id = $('#pro-id').val();

$('.attr_select').click(function() {
    var key = $(this).attr('key');
    var val = $(this).attr('val');
    myOrder.attr[key] = val;
    $(this).addClass('active').siblings().removeClass('active');

    CalPrice();
})

$('.vote').hover(function() {
    StarHover(this);
})

$('.vote').click(function() {
    var star = $(this).attr('star');

    myComment.star = star;
    console.log(myComment.star);
})


$('.vote').on('mouseout', function() {
    if (isStarOut) {
        isStarOut = false;
        StarOut();
    }
})

function SetOrder() {
    myOrder.basePrice = $('#baseprice').html();
    myOrder.id = $('#pro-id').val();
    $('#attr-table').children().each(function() {
        var attr_target = $(this).find('> td > .active').attr('val');
        myOrder.attr.push(attr_target);
    })
}

function CalPrice() {
    var price = parseInt(myOrder.basePrice);
    for (let key = 0; key < myOrder.attr.length; key++) {
        const val = myOrder.attr[key];
        var x = $('#attr-table').children();
        x = $(x[key]).children();
        x = $(x[1]).children();
        x = $(x[val]);
        var ofset = x.attr('ofset');
        price += parseInt(ofset);
        $('#baseprice').html(price);
    }
}


function StarHover(e) {
    clearTimeout(starreset);
    isStarOut = true;
    timeoutList = [];
    var starAt = $(e).attr('star');
    for (let i = 0; i < 5; i++) {
        var chid = $('#rating_block').children();
        if (i < starAt) {
            $(chid[i]).css('color', 'yellow');
        } else {
            $(chid[i]).css('color', 'black');
        }
    }
}

function StarOut() {

    starreset = setTimeout(function() {
        for (let i = 0; i < 5; i++) {
            var chid = $('#rating_block').children();
            if (i < myComment.star) {
                $(chid[i]).css('color', 'yellow');
            } else {
                $(chid[i]).css('color', 'black');
            }
        }
    }, 300);
}

$('#post-comment').click(function() {
    myComment.comment = $('#comment_input').val();

    $.ajax({
        url: 'http://localhost:8000/ajax/comment',
        method: 'POST',
        data: myComment,
        dataType: 'html',
        success: (res) => {
            $('#mypreviouscomment').each(function() {
                $(this).remove();
            });
            $('.review_box').prepend(res);
            mercuryJs.PrefixImageByScale('.prefix_img');

        }
    })
})

$('#add_to_cart').click(function() {
    console.log('x');
    AddToCard(myOrder);
    $('.review_box').prepend()
})

$('.quantity_btn').click(function() {
    var role = $(this).attr('role');
    var value_holder = $('#quantiti');
    var target = $(this).attr('target');
    var quan = parseInt(value_holder.html());
    var isInstant = $(this).attr('instant');
    if (role == 'minus') {
        if (value_holder.html() > 1) {
            value_holder.html(quan - 1);
            myOrder.quantity = quan - 1;
        }

    }
    if (role == 'plus') {
        if (quan < maxquan) {
            value_holder.html(quan + 1);
            myOrder.quantity = quan + 1;

        }
    }
    if (isInstant) {
        PutToCard(target, value_holder.html(), RecalcTotal(target));
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

function AddToCard(myOrd, fun) {
    $.ajax({
        url: 'http://localhost:8000/ajax/cart',
        method: 'POST',
        data: {
            myOrd,
            work: 'add'
        },
        dataType: 'html',
        success: (res) => {
            $('.review_address_inner').prepend(res);
            alert('Đã thêm vào giỏ hàng');
            if (fun) { fun() }
        }
    })
}

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

function RecalcTotal(id) {
    var prequan = parseInt($('#attr_quantiti_' + id).html());
    var quan = $('#pro_quantiti_' + id).html();
    console.log(quan);
    var price = $('#pro_id_' + id + " > .product-price > price").html();
    var change = quan - prequan;
    var total = $('#pro_id_' + id + " > .product-total > total");
    total.html(parseInt(total.html()) + (change * price));
    var sum = $('#sumall > total');
    sum.html(parseInt(sum.html()) + (change * price));


}

SetOrder();