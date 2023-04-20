

$('body').on('click','.btn-info',function(){
    var id = $(this).data('ide');
    $('#model-customer').addClass('showModel');
    $.ajax({
      url:"adminCustomergetInf",
      method:'get',
      data:{
        'id':id
      }
    }).done(function(data){
      
      var html = '';
      html +='<tr>';
      html +='<td>';
      html += data.info.username;
      html += '</td>';
      html +='<td>';
      html += data.info.provider !== null ? data.info.provider  : '';
      html += '</td>';
      html +='<td>';
      html += data.info.quyen === 1 ? 'normal' : 'amin';
      html += '</td>';
      html +='<td>';
      html += data.total;
      html += '</td>';
      html +='</tr>';
    $('.showIf').html(html)

    })
  })

  $('#search-product').on('keyup',function(){
    var value = $(this).val();
    $.ajax({
      url:"adminCustomersearchInf",
      method:'get',
      data:{
        'search':value
      }
    }).done(function(data){
      console.log(data)
      var html = '';
      data.map(function(value,index){
        html +='<tr>';
        html +='<td>';
        html += index;
        html += '</td>';
        html +='<td>';
        html += value.fullname;
        html += '</td>';
        html +='<td>';
        html += value.dates;
        html += '</td>';
        html +='<td>';
        html += value.adress;
        html += '</td>';
        html +='<td>';
        html += value.sdt;
        html += '</td>';
        html +='<td>';
        html += value.cmnd;
        html += '</td>';
        html +='<td>';
        html += `<div class='btn-action' ><div class="delete" data-idd="${value.id_per}" ><a href="#">Delete</a></div><div  class="edit btn-info" data-ide="${value.id_per}"><a  href="#">Account</a></div></div>`;
        html += '</td>';
        html +='</tr>';
      })
    $('.showinfo').html(html);
    })
  })

  var check = false;
  $('body').on('click','.isAdmin',function(){
    var id = $(this).data('idd');
    var that = this;

    $.ajax({
      url:"upAdmin",
      method:'get',
      data:{
        'id':id
      }
    }).done(function(data){
      check = !check;
      if(check){
        $(that).children().css({'background':'red','color':'black'})
      }else{
        $(that).children().css({'background':'black','color':'white'})
      }

     
    })
  })
  $('body').on('click','.delete-use',function(){
    var id = $(this).data('idd');
    var that = this;

    $.ajax({
      url:"adminCustomerdestroy",
      method:'get',
      data:{
        'id':id
      }
    }).done(function(data){
      $(that).parent().parent().parent().remove();
    })
  })