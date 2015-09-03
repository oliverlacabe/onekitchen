$(document).ready(function(){
    $('#login_form').submit(function(){
    	    $.post( "/home/login", $( "#login_form" ).serialize(), function(data){
                if (data == "2") {
                    $('.err_msg').show('fast');
    	    		setTimeout("$('.err_msg').hide('slow');", 5000);
                }
                else{
                    location.href = "home/welcome";
                }
            });
    });
});
