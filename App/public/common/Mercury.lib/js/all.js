class MercuryJs {

    PrefixImageByScale(clas) {
        var target = $(clas);
        target.each(function() {
            target.addClass('prefix_img');
            var scale = $(this).attr('prefixScale');
            if (scale) {

                scale = scale.split(",");
                var width = $(this).css('width');
                var height = width.slice(0, -2) * scale[1] / scale[0];
                $(this).css('height', height);
            }
        })
        return target;
    }

    flipflop(funcA, funcB) {
        let check = true;
        if (check == true) {
            funcA();
            check = false;
        } else {
            funcB();
            check = true;
        }
    }
}

mercuryJs = new MercuryJs;