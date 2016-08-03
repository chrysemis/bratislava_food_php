$(function() 
{
    var $originalContent = $('#logout').children(); 
    $('#logout').on('submit', function(e)    // When form is submitted
    {  
        e.preventDefault();                               
        var details = $('#logout').serialize();         // Serialize form data
        $.post('goodbye.php', details, function(data)
        {  
            $('#logout').html(data);                    // Where to display result
        //    $(this).text('Log in');   //changes li element from "log in" to "log out"
        });
    });
    
    $('.close-button').on('click', function()
    {
        $('#logout-window').hide('slow');

        $('#logout-button').on('click', function() 
        {
            $('#logout').empty();
            $('#logout').append($originalContent);
        $('#logout input').not('#logoutB').val(''); //sets all fields apart from Submit button to original value
        });
    });
});

 


