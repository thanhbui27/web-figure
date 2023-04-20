const createVoucher = () => {
    return Math.random().toString(36).substr(2, 8).toUpperCase();
}
$('#newVoucher').on('click', function(e) {
    e.preventDefault();
    $('#voucher').val(createVoucher())
})


$("#radio_1, #radio_2", "#radio_3").change(function() {
    if ($("#radio_1").is(":checked")) {
        $('#div1').show();
    } else if ($("#radio_2").is(":checked")) {
        $('#div2').show();
    } else
        $('#div3').show();
});

$("#discount , #freeShip").change(function() {
    if ($("#discount").is(":checked")) {
        $("#sale").attr('disabled', false);

    } else if ($("#freeShip").is(":checked")) {
        $("#sale").attr('disabled', true);
    }
});
$('.Edit-voucher').on('click',function(){
    var id =  $(this).data('id');
    $.ajax({
        url:'updateVoucher',
        type: 'get',
        data : {
            'id' : id,
            'actions':'getData'
        }
    }).done(function(data){
        $('#getId').val(id)
        $('#voucher').val(data.codes)
        $('#name').val(data.names)
        $('#dateStart').val(data.timeStart)
        $('#dateEnd').val(data.timeEnd)
        $('#sale').val(data.sale)
        $('#limit').val(data.limits)
        CKEDITOR.instances["editor"].setData(data.detail);
        if(data.kindVoucher === "discount"){
            $("#sale").attr('disabled', false);
            $("#discount").attr('checked', true);
        }else{
            $("#freeShip").attr('checked', true);
            $("#sale").attr('disabled', true);
        }
    })
    $('#model').addClass('showModel');
})
$('#update-voucher').submit(function(e){
    e.preventDefault();
    var datas = $(this).serializeArray();
    $.ajax({
        url:'updateVoucher',
        type: 'get',
        data : {
           data : datas,
           actions :'update',
           details : CKEDITOR.instances["editor"].getData()
        }
    }).done(function(data){
    console.log(data)
    })
})