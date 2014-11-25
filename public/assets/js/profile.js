$(function () {



    $("#btn-cambiar-imagen").click(function () {
        $("#modal-cambiar-imagen").modal();
    });


    $("body").on("change", ".btn-file :file", function () {
        var input = $(this);
        var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.parent().parent().siblings("input").val(label);
    });

    $('.remove-post').click(function () {
        var post_id = $(this).data('post-id');

        $('#post-id').val(post_id);

        $('#modal-remove-post').modal();
    });
});

