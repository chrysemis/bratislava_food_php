$(function() {
    var $originalContent = $('#login').children();  //stores form input fields to be put back after Welcome message
     
    $('#login').on('submit', function(e) 
    {           // When form is submitted
      e.preventDefault();                               // Prevent it being sent
      var details = $('#login').serialize();         // Serialize form data
      $.post('login.php', details, function(data)
      {  // Use $.post() to send it
        $('#login').html(data);                    // Where to display result
      });

      $('.close-button').on('click', function()
      {
          $('#login-window').hide('slow');

          $('#login-button').on('click', function() {
              $('#login').empty();
              $('#login').append($originalContent);
          $('#login input').not('#submit1').val(''); //sets all fields apart from Submit button to original value

          });
       });
    });  
});




