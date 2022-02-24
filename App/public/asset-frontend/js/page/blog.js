var pageStats = { fromid: "", page: "1", onlyfollow: "" };
// var quill = new Quill('#blog-content', { theme: 'snow' });


$(document).ready(function() {
    // quill.on('text-change', function(delta, oldDelta, source) {
    //     var content = $('#blog-content > .ql-editor').html();
    //     $('#content-data').html(content);
    // })
})

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

function ActiveComment() {

    $('.post-blog-cmt').click(function() {
        var target = $(this).attr('id');
        var content = $('#comment_input_' + target).val();
        PostComment(target, content);
        $('#comment_input_' + target).val("");
    })
    $('.accordion-button').click(function() {
        mercuryJs.PrefixImageByScale('.prefix_img');

    })
    $('.blog-editor-btn').click(function() {
        var work = $(this).attr('do');
        var target = $(this).attr('target');

        switch (work) {
            case 'edit':
                DeleteBlog(target);
                break;
            case 'delete':
                DeleteBlog(target);
                break;

        }
    })

}

$('#blog-newest').click(function() {
    pageStats.fromid = "";
    pageStats.page = "1";
    pageStats.onlyfollow = "";
    LoadBlog(true);
    $(this).addClass('bg-frontend-theme').siblings().removeClass('bg-frontend-theme');
})
$('#blog-follow').click(function() {
    pageStats.fromid = "";
    pageStats.page = "1";
    pageStats.onlyfollow = "1";
    LoadBlog(true);
    $(this).addClass('bg-frontend-theme').siblings().removeClass('bg-frontend-theme');

})

$('#view-more-btn').click(function() {
    pageStats.page = parseInt(pageStats.page) + 1;
    LoadBlog();
})


function LoadBlog(isNew = false) {
    console.log(pageStats);
    $.ajax({
        url: 'http://localhost:8000/ajax/blog',
        method: 'POST',
        data: {
            pageStats,
            table: "blogs"
        },
        dataType: 'html',
        success: (res) => {
            if (isNew) {
                $('#blog_holder').html(res);

            } else {
                $('#blog_holder').append(res);

            }
            pageStats.fromid = $(res).last().attr('blog');
            mercuryJs.PrefixImageByScale('.prefix_img');
            ActiveComment();
            ActiveReportButton();
        }
    })
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

function DeleteBlog(id) {
    $.ajax({
        url: 'http://localhost:8000/ajax/comment-blog',
        method: 'POST',
        data: {
            id,
            work: 'delete'
        },
        dataType: 'html',
        success: (res) => {
            $(`[comment-id = "${id}"]`).remove();

        }
    })
}

function EditComment(id) {

}