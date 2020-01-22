//Stripe.setPublishableKey('sk_test_zS5bO7gXggmu52DPCHDVw62900g7QkmCu2');
Stripe('pk_test_vN7TowMHA5fSB7UtstuemLqq000F3vaImG');
var $form = $('#pagar-form');

console.log(stripe);
$form.submit(function(event){
  $('charge-error').addClass('hidden');
  $form.find('button').prop('disabled', true);
  stripe.card.createToken({
    number: $('#ntarjeta').val(),
    cvc   : $('#cvc').val(),
    exp_month: $('#mExpiracion').val(),
    exp_year:  $('#aExpiracion').val(),
    name:     $('#nombre-tarjeta').val()
  }, stripeResponseHandler);
  return false
});

function stripeResponseHandler(status, response){
    if(response.error){
      $('charge-error').removeClass('hidden');
      $('charge-error').text(response.error.message);
      $form.find('button').prop('disabled', false);
    }
    else{
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        //enviar el formulario
        $form.get(0).submit();
    }

}
