$('.CountlikePost .likePost').click(function() {
    var currentLike = $(this).prev().data('like');
    var id_blog = $(this).prev().data('blog');
    var url = "../feel";
    $.ajax({
      url: url,
      type: 'get',
      data: {
        'id_blog': id_blog,
        'action': 'like'
      }
    }).done(function(datass) {
      if($('.dislikePost').hasClass('hasLike')){
        $('.dislikePost').removeClass('hasLike');
        $('.likePost').addClass('hasLike');
      }
      if(!$('.likePost').hasClass('hasLike')){
        $('.likePost').addClass('hasLike');
      }
      $('.countLike').html(datass.like);
      $('.countdisLike').html(datass.dislike);
      
    }).fail(function(jqXHR, textStatus, errorThrown) {
      console.log(textStatus + ': ' + errorThrown);
    });
  });
  $('.CountdisLike .dislikePost').click(function() {
    var currentLike = $(this).prev().data('dislike');
    var id_blog = $(this).prev().data('blog');
    var url = "../feel";
    $.ajax({
      url: url,
      type: 'get',
      data: {
        'id_blog': id_blog,
        'action': 'dislike'
      }
    }).done(function(datass) {
      if($('.likePost').hasClass('hasLike')){
        $('.likePost').removeClass('hasLike');
        $('.dislikePost').addClass('hasLike');
      }
      if(!$('.dislikePost').hasClass('hasLike')){
        $('.dislikePost').addClass('hasLike');
      }
      $('.countLike').html(datass.like);
      $('.countdisLike').html(datass.dislike);
    }).fail(function(jqXHR, textStatus, errorThrown) {
      console.log(textStatus + ': ' + errorThrown);
    });
  });
  $(document).on("submit", "form", function(event) {
    event.preventDefault();
    var url = $(this).attr("action");
    var data = CKEDITOR.instances.editor.getData();
    var id_blog = $('#id_blog').val();
    $.ajax({
      url: url,
      type: 'get',
      data: {
        'id_blog': id_blog,
        'content': data
      }
    }).done(function(datass) {
      $('.show-comment').html(datass);
    }).fail(function(jqXHR, textStatus, errorThrown) {
      console.log(textStatus + ': ' + errorThrown);
    });
  });