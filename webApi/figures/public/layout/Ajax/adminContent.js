$('.saveC').on('click', function() {
    var editorData = CKEDITOR.instances['editor'].getData();
    $.ajax({
        url:"updateText",
        type:'get',
        data:{
            action : 'home',
            text:editorData
        }
    }).done(function(data){
        $('.C').html(editorData);
        console.log(data)
    })
})
$('.saveC1').on('click', function() {
    var editorData = CKEDITOR.instances['editor1'].getData();
    $.ajax({
        url: "updateText",
        type:"get",
        data:{
            action:'contact1',
            text:editorData
        }
    }).done(function(data){
        $('.C1').html(null);
    $('.C1').html(editorData);
    })
   
})

$('.saveC2').on('click', function() {    
    $.ajax({
        url: "updateText",
        type:"get",
        data:{
            action:'contact2',
            text:$('#adress').val()
        }
    }).done(function(data){     
        $('.adress-now').html($('#adress').val());
        console.log(data)
    })
   
})