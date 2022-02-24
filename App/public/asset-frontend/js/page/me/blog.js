var quill = new Quill('#blog-content', { theme: 'snow' });

$('#image_selector').change(function() {
    var file = this.files;
    var html = "";
    for (let i = 0; i < file.length; i++) {
        const file_signle = file[i];
        var url = window.URL.createObjectURL(file_signle);
        html += `<div class="prefix col-3 p-0">
            <img width="100%" src="${url}"/>
            </div>`;
    }

    $('.image_holder').html(html);
    mercuryJs.PrefixImageByScale('.prefix_img');
})

$('.post-blog-cmt').click(function() {
    var target = $(this).attr('id');
    var content = $('#comment_input_' + target).val();
    PostComment(target, content);
    $('#comment_input_' + target).val("");
})

quill.on('text-change', function(delta, oldDelta, source) {
    var content = $('#blog-content > .ql-editor').html();
    $('#content-data').html(content);
})

$(document).ready(function() {

    $('.view-hidden').click(function() {
        var target = $(this).attr('target');
        var is = $(this).attr('show');
        $('.being_hidden_' + target).each(function() {

            if (is == 1) {
                $(this).css('display', 'none');

            } else {

                $(this).css('display', 'block');
            }
        })
        if (is == 1) {
            $(this).html('View more');
            $(this).attr('show', 0);

        } else {
            $(this).html('Hide');
            $(this).attr('show', 1);

        }
    })
})

$('.accordion-button').click(function() {
    mercuryJs.PrefixImageByScale('.prefix_img');

})

$('.blog-editor-btn').click(function() {
    var work = $(this).attr('do');
    var target = $(this).attr('target');
    switch (work) {
        case 'delete':
            DeleteBlog(target);
            break;
        case 'edit':
            LoadFormEdit(target);
            break;

    }
})

$('#new-blog-btn').click(function() {
    $('#blog-content > .ql-editor').html("");
    $('.image_holder').html("");
    $('#editing-blog-id').val(null);

})

function DeleteBlog(id) {
    $.ajax({
        url: 'http://localhost:8000/me/blog/delete',
        method: 'POST',
        data: {
            id
        },
        dataType: 'html',
        success: (res) => {
            $('#blog_holder').prepend(res);
            $('#blog_id_' + id).remove();
        }
    })
}

function LoadFormEdit(id) {
    var content = $("#blog-content-" + id).html();
    var imageurl = [];
    var count = 0;
    var html = ``;
    $('#blog-image-' + id).find('.blog-image').each(function() {
        imageurl[count] = $(this).find('img').attr('src');
        count++;
    })
    $('#blog-content > .ql-editor').html(content);
    for (let i = 0; i < imageurl.length; i++) {
        html += `<div class="prefix col-3 p-0">
            <img width="100%" src="${imageurl[i]}"/>
            </div>`;
    }
    $('.image_holder').html(html);
    $('#editing-blog-id').val(id);
}

function PostComment(id, content) {
    $.ajax({
        url: 'http://localhost:8000/ajax/comment-blog',
        method: 'POST',
        data: {
            id,
            content,
            work: 'add'
        },
        dataType: 'html',
        success: (res) => {
            var status = $(res).val();

            if (status == "1") {
                $('#comment-' + id + " > .accordion-body").append(res);
                mercuryJs.PrefixImageByScale('.prefix_img');
                $('#return_status').remove();
            }

        }
    })
}