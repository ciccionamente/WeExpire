// Verify that primary_email and secondary_email inputs don't have the same values
$('#secondary_email_input').keyup(function() {
  if ($('#primary_email_input').val() === $('#secondary_email_input').val()) {
    $('#secondary_email_input').addClass("is-invalid");
    return false;
  } else {
    $('#secondary_email_input').removeClass("is-invalid");
    return true;
  }});
