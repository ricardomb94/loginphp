
$(document).on('submit', 'form.js-register', function (event) {
  event.preventDefault();
  var _form = $(this);
  var _error = $('.js-error', _form);

  var data = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val(),
  };

  if (data.email.length < 6) {
    _error.text('Please enter a valid email').show();
  }else if (data.password.length < 11) {
    _error.text('Please enter a passphrase that is at least 11 characters').show();
  };

  console.log(data);

  //Let's start Ajax process
  _error.hide();

  $.ajax({
    type: 'POST',
    url: 'ajax/register.php',
    data: data,
    dataType: 'json',
    async: true,
  })
  .done(function ajaxDone(data) {
    console.log(data);
    if (data.redirect !== undefined) {
      // window.location = data.redirect;
    }
    alert(data.name);
  })
  .fail(function ajaxFailed(e) {
    console.log(e);
  })
  .always(function ajaxAlwaysDoThis(data) {
    console.log('Always');
  });

  return false;
});
