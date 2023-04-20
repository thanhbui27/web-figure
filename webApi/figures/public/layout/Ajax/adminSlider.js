$(document).ready(function() {
    var length = $('.uploadImg').length;
    for (let i = 0; i < length; i++) {
        $(`#file-upload${i+1}`).change(function(e) {
            var fileName = e.target.files[0].name;
            $(`.nameImg${i+1}`).html(fileName);
        })
        $(`#upload-image${i+1}`).submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "admin/updateDImg",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(data) {
                var url = `../layout/Img/${data}`;
                var images = $(`#img${i+1}`).attr('src', url);
                $(`.nameImg${i+1}`).html(null);
            })
        })
    }
    
    $(`#productpage`).change(function(e) {
            var fileName = e.target.files[0].name;
            $(`.nameP`).html(fileName);
    })
    $('#productImg').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
                url: "admin/updateDImg",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(data) {
                var url = `../layout/Img/${data}`;
                var images = $(`#imgP`).attr('src', url);
                $(`.nameP`).html(null);
                console.log(data)
            })
    })

    $(`#blogPage`).change(function(e) {
            var fileName = e.target.files[0].name;
            $(`.nameB`).html(fileName);
    })
    $('#blogImg').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
                url: "admin/updateDImg",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(data) {
                var url = `../layout/Img/${data}`;
                var images = $(`#imgB`).attr('src', url);
                $(`.nameB`).html(null);
                console.log(data)
            })
    })

});