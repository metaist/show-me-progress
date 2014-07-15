define(function (require) {
  require('bootstrap');
  var
    $ = require('jquery'),
    $form = $('#signup'),
    $result = $('#result'),
    $btn = $('[type="submit"]');


  $form.submit(function (e) {
    $btn.button('loading');
    e.preventDefault();
    $result.text('').removeClass('alert alert-success alert-danger');

    $.post($form.data('ajax'), $form.serialize()).done(function (data) {
      $result.addClass('alert');
      switch(data.status) {
      case 'success':
        $result
          .addClass('alert-success')
          .html('Thank you! You will start getting emails soon.');
        $form[0].reset();
        break;
      case 'error':
        $result
          .addClass('alert-danger')
          .html(data.message);
        break;
      }//end switch
    }).always(function () {
      $btn.button('reset');
    });//end $.post
  });//end .submit
});
