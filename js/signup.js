/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* global sign */

$(document).ready(function() {
    var signWindow = $('#signup-window');
    var loginWindow = $('#login-window');
    var logoutWindow = $('#logout-window');
    $('#signup-button').click(function() {
        signWindow.show('slow');
    });
     $('.close-button').click(function() {
        signWindow.hide('slow');
    });
    
    $('#login-button').click(function() {
        loginWindow.fadeIn('slow');
    });
     $('.close-button').click(function() {
        loginWindow.fadeOut('slow');
    });
    
    $('#logout-button').click(function() {
        logoutWindow.fadeIn('slow');
    });
     $('.close-button').click(function() {
        logoutWindow.fadeOut('slow');
    });
         
});
