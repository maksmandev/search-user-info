$("#region").chosen({no_results_text: "Oops, nothing found!"});

$("#sign-up").validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        t_koatuu_tree_id : {
            required: true
        }
    }
});

function getArea(val, nextSelect) {
    if (nextSelect == '#sity') {
        $("#sity").find('option').remove();
    }
    $("#area").find('option').remove();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    nextSelect = $(nextSelect);
    $.ajax({
        type: "POST",
        url: "getArea",
        data: {regionId: val},
        success: function (data) {
            $.each(data, function (key, value) {
                nextSelect
                    .append($("<option></option>")
                        .attr("value", value.ter_id)
                        .text(value.ter_name));
            });
        }
    });
}

$(function () {
    $('#sign-up').on('submit', function (e) {
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        })
        e.preventDefault(e);
        $.ajax({
            type: "POST",
            url: '/register',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                window.location.href = "users";
            },
            error: function (data) {
                console.log('Server error');
            }
        })
    });
});
