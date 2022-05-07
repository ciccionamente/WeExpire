// Enable/disable the expiration date input according to the expiration date switch status
$('#expiration_date_switch').on('change', function(event, state) {
  var status = $('#expiration_date').prop('disabled');
  $('#expiration_date').prop('disabled', !status);
});
// Change the default and minimum values for the expiration date input according to the inactivity time
$('#inactivity_time_select').on('change', function(event, state) {
  var days_to_add = $('#inactivity_time_select').children("option:selected").val();
  function addDays(current_date,days) {
    return new Date(current_date.getTime() + days*24*60*60*1000);
  }
  var current_date = new Date();
  var new_minimum_date = addDays(current_date,days_to_add);
  var dd = String(new_minimum_date.getDate()).padStart(2, '0');
  var mm = String(new_minimum_date.getMonth() + 1).padStart(2, '0'); // January is 0!
  var yyyy = new_minimum_date.getFullYear();
  new_minimum_date = yyyy + '-' + mm + '-' + dd;
  document.getElementById("expiration_date").setAttribute("min", new_minimum_date);
  document.getElementById("expiration_date").setAttribute("value", new_minimum_date);
});
// Verify that primary_email and secondary_email inputs don't have the same values
$('#secondary_email_input').keyup(function() {
  if ($('#primary_email_input').val() === $('#secondary_email_input').val()) {
    $('#secondary_email_input').addClass("is-invalid");
    return false;
  } else {
    $('#secondary_email_input').removeClass("is-invalid");
    return true;
  }});
