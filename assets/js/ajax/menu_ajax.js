$(document).ready(function(){

    remove_ing();

    $('#ing_form').submit(function(){

	    $.post( "/menu/add_ing", $( "#ing_form" ).serialize(), function(data){
            if (data == 'err1') {
                var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Ingredient already exist.</div>";
                $('#ing_alert').html(alert);
            }
            else{
                $('#ing_list').html(data);
                var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Ingredient added.</div>";
                $('#ing_alert').html(alert);
            }
        });
    });

    $('#cat_form').submit(function(){

        $.post( "/menu/add_cat", $( "#cat_form" ).serialize(), function(data){
            if (data == 'err1') {
                var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Category already exist.</div>";
                $('#cat_alert').html(alert);
            }
            else{
                $('#cat_list').html(data);
                var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Category added.</div>";
                $('#cat_alert').html(alert);
            }
        });
    });

    $('#modal_ing').submit(function(){
        $.post( "/menu/append_ing", $( "#modal_ing" ).serialize(), function(data){
            data = $.trim(data);
            if (data != '') {
                $('#tbl_ing_modal').append(data);
                remove_ing();
            }
        } );
    });

    function remove_ing(){
        $('.remove_ing').on('click', function()
        {
            $(this).parent().parent().remove();
        });
    }

});
