function clickShowModel() {
    document.getElementById("model").classList.toggle('show');
  }
  window.onclick = function(e) {
    if (e.target === document.getElementById("model")) {
      document.getElementById("model").classList.remove('show');
    }
  }
  $('#id_pros').val($('.update').data('value'));
  $('.update').on('click', function() {
    var ids = $(this).data('value');
    var quantity = $(this).parents('tr').find('.quantity').val()
    var that = this;
    $.ajax({
      url: '../actionCart',
      type: 'get',
      data: {
        action: 'update',
        id: ids,
        quantity: quantity
      }
    }).done(function(data) {
      $(that).parents('tr').find('.quantity').val(quantity);
    })
  });
  $('.RemoveProduct').on('click', function() {
    var ids = $(this).data('value');
    var that = this;
    $.ajax({
      url: '../actionCart',
      type: 'get',
      data: {
        action: 'remove',
        id: ids
      }
    }).done(function(data) {
      $(that).parent().parent().remove();
      var isTr = $("#cardTable").find('tr');
      if (isTr.length === 1) {
        $('#payModel').remove();
        $('#isCartNull').html(' <p style="color: red;"><b>Giỏ hàng trống</b></p>');
      }

    })
  })