$('body').on('click', '.order', function() {
    $('#model-order').addClass('showModel');
    var id_use = $(this).data('ido');
    $.ajax({
      url: "adminOrderShow",
      method: 'get',
      data: {
        'id': id_use
      }
    }).done(function(data) {
      var html = ' ';

      data[0].map((datas, index) => {
        html += '<tr>'
        html += `<td>${index + 1}</td>`
        html += `<td>${data[2].fullname}</td>`
        html += `<td>${datas.name_pro}</td>`
        html += `<td>${data[1][index]}</td>`
        html += '</tr>'
      })

      $('.info_prs').html(html);
      console.log(data[2])
    })
  })
  $('#SearchmaGD').on('keyup', function() {
    var value = $(this).val();
    $.ajax({
      url: "adminOrderSearch",
      type: "get",
      data: {
        'key': value,
        'action':'searchMaGD'
      }
    }).done(function(data) {
      console.log(data)
      var html = '';
      data.map((datas, index) => {
        html += '<tr>'
        html += `<td>${index + 1}</td>`
        html += `<td>${datas.maGD}</td>`
        html += `<td>${datas.dates}</td>`
        html += `<td>${datas.tien} VND</td>`
        html += ` <td>
              <p class="actionPay ${datas.statuss === 1 ? 'paysuss' : 'paynot' }">${datas.statuss === 1 ? 'đã thanh toán' : 'Đang chờ xử lý' }</p>
            </td>`
        html += `<td>${datas.payBy}</td>`
        html += ` <td> <div class='btn-action'>
                <div data-ids="${datas.id_ord}" class="${datas.statuss === 1 ? '' :'update'} delete"><a style="${datas.statuss === 1 ? 'background-color:#fff;color:#333' :''}" href="#">Xác nhận</a></div>
                <div data-ido="${datas.id_ord}" class="edit order"><a href="#">Thông tin</a></div>
              </div> </td>`
        html += '</tr>'
      })
      console.log(html)
      $('.listOrder').html(html);
    })
  })
  function convertZero(value){
    if(value < 10){
      value = '0'+value
    }
    return value;
  }
  $('.searchDate').on('click',function(){
    var date = new Date($('#dates').val());
    day = date.getDate();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    var value = [year,convertZero(month),convertZero(day)].join('-');
    console.log(value)
    $.ajax({
      url: "adminOrderSearch",
      type: "get",
      data: {
        'key': value,
        'action':'searchDate'
      }
    }).done(function(data) {
      console.log(data)
      var html = '';
      data.map((datas, index) => {
        html += '<tr>'
        html += `<td>${index + 1}</td>`
        html += `<td>${datas.maGD}</td>`
        html += `<td>${datas.dates}</td>`
        html += `<td>${datas.tien} VND</td>`
        html += ` <td>
              <p class="actionPay ${datas.statuss === 1 ? 'paysuss' : 'paynot' }">${datas.statuss === 1 ? 'đã thanh toán' : 'Đang chờ xử lý' }</p>
            </td>`
        html += `<td>${datas.payBy}</td>`
        html += ` <td> <div class='btn-action'>
                <div data-ids="${datas.id_ord}" class="${datas.statuss === 1 ? '' :'update'} delete"><a style="${datas.statuss === 1 ? 'background-color:#fff;color:#333' :''}" href="#">Xác nhận</a></div>
                <div data-ido="${datas.id_ord}" class="edit order"><a href="#">Thông tin</a></div>
              </div> </td>`
        html += '</tr>'
      })
      console.log(html)
      $('.listOrder').html(html);
    })
      
  })
  $('body').on('click','.update',function(){
    var value = $(this).data('ids');
    var that = this;
    $.ajax({
      url:"adminOrderConfim",
      type:"get",
      data:{
        'id':value
      }
    }).done(function(data){
      var html = ` <p class="actionPay paysuss">đã thanh toán
                </p>`
      $(that).parent().parent().prev().prev().children().html(html)
    })
   
  })