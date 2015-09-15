$(document).ready(function(){

    delete_desig();

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

    $('#add_desig').submit(function(){

        $.post( "/employee/add_desig", $( "#add_desig" ).serialize(), function(data){
            if (data == 'err1') {
                var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Designation already exist.</div>";
                $('#desig_alert').html(alert);
            }
            else{
                var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Designation added.</div>";
                $('#desig_alert').html(alert);
                $('input[name=desig]').val('');
                $('input[name=salary]').val('');
                $('#desig_list').html(data);

                delete_desig();
            }
        });

    }); 


            function delete_desig(){
                    $('.delete_desig').on('click', function()
                    {
                        var id = $(this).data('param');
                        
                        $.post( "/employee/delete_desig", {id}, function(data){

                        });

                        $(this).parent().parent().remove();
                    });
                }



});

