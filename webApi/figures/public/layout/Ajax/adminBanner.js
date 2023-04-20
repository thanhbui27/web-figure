$('body').on('click', '.edit-b', function(e) {
    $('#modelBanner').addClass('show');
    $('.nameM').text('Edit')
    $('.button-add-b').text('Sửa')
    var id = $(this).data('id');
    $("#id").val(id);
    $.ajax({
        url: "adminActionBanner",
        type: 'GET',
        data: {
            action: 'show',
            id: id
        }
    }).done(function(data) {
        $('#name').val(data.name);
        $('#link').val(data.link);
    })
})
$('.button-add-b').on('click', function() {
    $.ajax({
        url: "adminActionBanner",
        type: 'GET',
        data: {
            action: 'action',
            id: $("#id").val(),
            name: $('#name').val(),
            link: $('#link').val(),
        }
    }).done(function(data) {
        var html = '';
        if (data[1] == 'show') {
            html = data[0].map((element, index) => {
                let htmls = `<tr>
                        <td>${index}</td>
                        <td>${element.name}</td>
                        <td>${element.link}</td>
                        <td><button data-id="${element.id}" class="action edit-b">Sửa</button> <button data-id="${element.id}"  class="action remove-b">Xóa</button></td>
                        </tr>`;
                return htmls;
            })
            $('.banner').html(html);
        } else {

        }

    })
})
$('.add-b').on('click', function(e) {
    $('.nameM').text('Add')
    $('#modelBanner').addClass('show');
    $('.button-add-b').text('thêm')
    $('#name').val(null);
    $('#link').val(null);
    $("#id").val(null);
})
$('.close').on('click', function() {
    $('#modelBanner').removeClass('show');
})
$('body').on('click', '.remove-b', function() {
    var that = this;
    $.ajax({
        url: "adminActionBanner",
        type: 'GET',
        data: {
            action: 'remove',
            id: $(this).data('id')
        }
    }).done(function(data) {
        $(that).parent().parent().remove()
    })
})

for (let i = 0; i < 3; i++) {
    $(`.save-${i+1}`).on('click', function() {
        var editorData = CKEDITOR.instances[`editor${i+1}`].getData();
        $(`.C-${i+1}`).html(editorData);
        console.log($(`.C-${i+1}`).children()[0])
        $.ajax({
            url:"adminActionBanner",
            type:'get',
            data:{
                action: `footer${i+1}`,
                data:editorData
            }
        }).done(function(data){
            console.log(data)
        })
    })
}