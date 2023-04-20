$('.edit-cate').on('click', function() {
    $('#hidden_cate').val($(this).data('id'))
    $.ajax({
      url: "admineditSort",
      type: 'get',
      data: {
        action: 'cate',
        id: $(this).data('id')
      }
    }).done(function(data) {
      $('#NameCateEdit').val(data.name_cate);
    })
  })
  $('.edit-price').on('click', function() {
    $('#hidden_price').val($(this).data('id'))

    $.ajax({
      url: "admineditSort",
      type: 'get',
      data: {
        action: 'price',
        id: $(this).data('id')
      }
    }).done(function(data) {
      console.log(data.pricetEnd)
      $('#priceStart').val(data.pricetStart);
      $('#PriceEnds').val(data.pricetEnd);
    })
  })
  $('.edit-height').on('click', function() {
    $('#hidden_height').val($(this).data('id'))
    $.ajax({
      url: "admineditSort",
      type: 'get',
      data: {
        action: 'height',
        id: $(this).data('id')
      }
    }).done(function(data) {
      $('#heightStart').val(data.heightStart);
      $('#heightEnd').val(data.heightEnd);
    })
  })
  $('#save_cate').on('click', function() {
    $.ajax({
      url: "adminupdateSort",
      type: 'get',
      data: {
        action: 'cate',
        id: $('#hidden_cate').val(),
        name: $('#NameCateEdit').val()
      }
    }).done(function(data) {
      console.log(data)
    })
  })
  $('#save_height').on('click', function() {
    $.ajax({
      url: "adminupdateSort",
      type: 'get',
      data: {
        action: 'height',
        id: $('#hidden_height').val(),
        start: $('#heightStart').val(),
        end: $('#heightEnd').val()
      }
    }).done(function(data) {
      console.log(data)
    })
  })

  $('#save_price').on('click', function() {
    $.ajax({
      url: "adminupdateSort",
      type: 'get',
      data: {
        action: 'price',
        id: $('#hidden_price').val(),
        start: $('#priceStart').val(),
        end: $('#PriceEnds').val()
      }
    }).done(function(data) {
      console.log(data)
    })
  })

  $('.btn-delet-cate').on('click', function() {
    const that = this;

    $.ajax({
      url: "admindeleteSort",
      type: 'get',
      data: {
        action: 'cate',
        id: $(this).data('id')
      }
    }).done(function(data) {
      $(that).parent().parent().parent().remove()
    })
  })

  $('.btn-delet-height').on('click', function() {
    const that = this;

    $.ajax({
      url: "admindeleteSort",
      type: 'get',
      data: {
        action: 'height',
        id: $(this).data('id')
      }
    }).done(function(data) {
      $(that).parent().parent().parent().remove()
    })
  })
  $('.btn-delet-price').on('click', function() {
    const that = this;

    $.ajax({
      url: "admindeleteSort",
      type: 'get',
      data: {
        action: 'price',
        id: $(this).data('id')
      }
    }).done(function(data) {
      $(that).parent().parent().parent().remove()
    })
  })