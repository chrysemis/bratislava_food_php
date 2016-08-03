
//This is just practice - probably won't use it for the website!

$('#nav-list li a').on('click', function(e) 
{
    e.preventDefault();
    var url = this.href;
    
    $('#nav-list li a.current').removeClass('current');
    $(this).addClass('current');
    
    $('#content').remove();
    $('.wrapper').load(url + ' #content').hide().fadeIn('slow');
});