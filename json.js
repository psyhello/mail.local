  function call() {
    var msg   = $('#vopros').serialize();
        $.ajax({
          type: 'POST',
          url: 'mail.php',
          data: msg,
          success: function(data) {

            $('.result').html(data);
            $( '#vopros' ).each(function(){
    this.reset();
});
          },
          error:  function(xhr, str){
      alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }