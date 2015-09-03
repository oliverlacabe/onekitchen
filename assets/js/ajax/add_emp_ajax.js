$(document).ready(function(){

    $('#add_emp_form').submit(function(){

	    $.post( "/employee/add_emp", $( "#add_emp_form" ).serialize(), function(data){

            if (data == "err1") {
                $('#msg_content').html('Please select designation!');
                $('.err_msg').show('fast');
                setTimeout("$('.err_msg').hide('slow');", 5000);
            }

            else if (data == "err2") {
                $('#msg_content').html('Please select restaurant!');
                $('.err_msg').show('fast');
                setTimeout("$('.err_msg').hide('slow');", 5000);
            }

            else{
                $('#msg_content').html('Employee sucessfuly added!');
                $('.err_msg').show('fast');
                setTimeout("$('.err_msg').hide('slow');", 5000);
                $('#emp_table').html(data);
            }

        });

    });

});
