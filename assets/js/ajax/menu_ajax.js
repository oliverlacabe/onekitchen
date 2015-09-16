$(document).ready(function(){

    delete_cat();
    delete_ing();
    delete_menu();
    remove_ing();

    $('#ing_form').submit(function(){

	    $.post( "/menu/add_ing", $( "#ing_form" ).serialize(), function(data){
            data = $.trim(data);
            if (data == 'err1') {
                var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Ingredient already exist.</div>";
                $('#ing_alert').html(alert);
            }
            else{
                $('#ing_list').html(data);
                var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Ingredient added.</div>";
                $('#ing_alert').html(alert);
                $('input[name=ingredient]').val('');
                $('select[name=type]').val('0');
                delete_ing();
            }
        });

    });

    $('#add_menu_form').submit(function(){
        if ($('select[name=category]').val() == 0) {
            var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select category.</div>";
            $('#menu_alert').html(alert);
        }
        else if ($('select[name=owner]').val() == 0) {
            var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select owner.</div>";
            $('#menu_alert').html(alert);
        }
        else{
    	    $.post( "/menu/add_menu", $( "#add_menu_form" ).serialize(), function(data){
                data = $.trim(data);
                if (data == 'err1') {
                    var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Menu already exist.</div>";
                    $('#menu_alert').html(alert);
                }
                else if (data == 'err2') {
                    var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please add ingredients.</div>";
                    $('#menu_alert').html(alert);
                }
                else{
                    $('select[name=owner]').val(0);
                    $('select[name=category]').val(0);
                    $('input[name=menuname]').val('');
                    $('input[name=price]').val('0');
                    $('#tbl_ing_modal').html("<tr><th>Name</th><th width='50px'>Quantity</th><th>Action</th></tr>");
                    $('#menu_list').html(data);
                    var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Menu added.</div>";
                    $('#menu_alert').html(alert);
                    delete_menu();
                }

            });
        }

    });

    $('#cat_form').submit(function(e){
        e.preventDefault();

        $.post( "/menu/add_cat", $( "#cat_form" ).serialize(), function(data){
        data = $.trim(data);
            if (data == 'err1') {
                var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Category already exist.</div>";
                $('#cat_alert').html(alert);
            }
            else{
                $('#cat_list').html(data);
                var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Category added.</div>";
                $('#cat_alert').html(alert);
                delete_cat();
            }
        });
    });

    $('#add_ing_button').on('click', function(e){
        e.preventDefault();
        var ing = $('select[name=ingredient]').val();
        var qty = $('input[name=quantity]').val();
        if (ing == 0) {
            var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select an ingredient.</div>";
            $('#app_alert').html(alert);
        }
        else if ( qty < 1 ) {
            var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Invalid quantity input.</div>";
            $('#app_alert').html(alert);
        }
        else{
            $.post( "/menu/append_ing", {ing, qty}, function(data){
                data = $.trim(data);
                if (data != '') {
                    $('#tbl_ing_modal').append(data);
                    $('select[name=ingredient]').val(0);
                    $('input[name=quantity]').val(0);
                    remove_ing();
                }
            });
        }
    });

    $('.btn_view_ing').on('click', function()
    {
        var id = $(this).data('id');
        $.post( "/menu/view_ing", {id}, function(data){ 
            data = $.trim(data);
            if (data != '') {
                $('#view_ing').html(data);
            }
        });
    });

    function remove_ing(){
        $('.remove_ing').on('click', function() 
        {
            $(this).parent().parent().remove();
        });
    }

     function delete_menu(){
        $('.delete_menu').on('click', function()
        {
              var id = $(this).data('param');
              $.post( "/menu/delete_menu", {id}, function(data){
        });

            $(this).parent().parent().remove();

        });
    }

      function delete_ing(){
        $('.delete_ing').on('click', function()
        {
            var id = $(this).data('param');
            $.post( "/menu/delete_ing", {id}, function(data){
        });

            $(this).parent().parent().remove();

        });
    }

         function delete_cat(){
        $('.delete_cat').on('click', function()
        {
            var id = $(this).data('param');
            $.post( "/menu/delete_cat", {id}, function(data){
        });

            $(this).parent().parent().remove();

        });
    }


});
