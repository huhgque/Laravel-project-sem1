mercuryJs.PrefixImageByScale('.prefix_img')



$('#follow_btn').click(function() {
    ChangeFollowBtn($(this));
    Follow();
})

function Follow() {
    var id = $('#user_id').val();
    $.ajax({
        url: 'http://localhost:8000/ajax/follow',
        method: 'POST',
        data: {
            id
        },
        dataType: 'html',
        success: (res) => {
            // $('body').prepend(res);
        }
    })
}

function ChangeFollowBtn(btn, styleOnly = false) {
    var dis = btn.find('> .state');
    var follownum = $('#follow_number');
    var isFollowing = false;
    if (dis.html() == 'Theo dõi') {
        if (!styleOnly) {
            dis.html('Bỏ theo dõi');
            follownum.html(parseInt(follownum.html()) + 1);
        }
        //do
        btn.css({
            'background-color': '#dc3545',
            'border-color': '#dc3545',
            'box-shadow': '0 0 0 0.25rem rgb(225 83 97 / 50%)'
        });

    } else {
        if (!styleOnly) {
            dis.html('Theo dõi');
            follownum.html(parseInt(follownum.html()) - 1);
        }
        //xanh
        btn.css({
            'background-color': '#31d2f2',
            'border-color': '#25cff2',
            'box-shadow': '0 0 0 0.25rem rgb(11 172 204 / 50%)'
        })


    }

}

function FirstBtnColor() {
    var state = $('#follow_btn > .state').html();
    if (state == 'Theo dõi') {

        btn.css({
            'background-color': '#31d2f2',
            'border-color': '#25cff2',
            'box-shadow': '0 0 0 0.25rem rgb(11 172 204 / 50%)'
        })

    } else {

        btn.css({
            'background-color': '#dc3545',
            'border-color': '#dc3545',
            'box-shadow': '0 0 0 0.25rem rgb(225 83 97 / 50%)'
        });

    }
};