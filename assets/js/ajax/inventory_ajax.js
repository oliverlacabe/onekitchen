$(document).ready(function(){

    $('#delivery_form').submit(function(){

	     $.post( "/inventory/append_delivery", $( "#delivery_form" ).serialize(), function(data){
           	$('#delivery_add').append(data);
           	remove_delivery();
      	 });

    });

    $('input[name=out_quantity]').keyup(function(){
        preparation();
    });

    $('input[name=in_quantity]').keyup(function(){
        preparation();
    });

    $('select[name=before_item]').change(function(){
        preparation();
    });

    $('#prep_form').submit(function(){
        $.post( "/inventory/save_prep", $('#prep_form').serialize(), function(data){
            if (data == 'err1') {
                msg = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select before prep item.</div>";
                $('#prep_alert').html(msg);
            }
            else if (data == 'err2'){
                msg = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select after prep item.</div>";
                $('#prep_alert').html(msg);
            }
            else{
                msg = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Preparation saved.</div>";
                $('#prep_alert').html(msg);
                $('input[name=stock]').val('Stock: ');
                $('input[name=hidden_id]').val('0');
                $('input[name=price1]').val('Price')
                $('input[name=price2]').val('Price')
                $('input[name=in_quantity]').val('')
                $('input[name=out_quantity]').val('')
                $('select[name=before_item]').val('0')
                $('select[name=after_item]').val('0')
                $('#prep_list').html(data);
            }
        });
    });

    function preparation(){
        item = $('select[name=before_item]').val();

        if (item != 0) {
            items = item.split('|');
            id    = items[0];
            $('input[name=stock]').val('Stock: '+items[1]+' '+items[2]);
            $.post( "/inventory/compute_price", {id}, function(data){
              if (data != '') {
                $('input[name=hidden_id]').val(data);

                qty = $('input[name=out_quantity]').val();
                if ($.isNumeric(qty)) {
                    // if (qty > items[1] || qty < 1) {
                    //     msg = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Invalid pull-out quantity.</div>";
                    //     $('#prep_alert').html(msg);
                    //     alert(qty +'>'+ items[1] + '-' + qty +'<'+ 1);
                    // }
                    // else{
                        $('#prep_alert').html('');
                        $('#out_qty').removeClass('has-error');
                        price = $('input[name=hidden_id]').val() * qty;
                        $('input[name=price1]').val('Price: '+price)

                        qty2 = $('input[name=in_quantity]').val();
                        if ($.isNumeric(qty2)) {
                            qty2 = $('input[name=in_quantity]').val();
                            $('#in_qty').removeClass('has-error');
                            price = price/qty2;
                            $('input[name=price2]').val('Price: '+price)
                            $('input[name=hidden_price]').val(price)
                        }
                        else{
                            $('#in_qty').addClass('has-error');
                            $('input[name=price2]').val('Price')
                        }
                    // }
                }
                else{
                    $('#out_qty').addClass('has-error');
                    $('input[name=price1]').val('Price')
                }
              }
            });
        }
        else{
            $('input[name=stock]').val('Stock: ');
            $('input[name=hidden_id]').val('0');
            $('input[name=price1]').val('Price')
            $('input[name=price2]').val('Price')
        }
    }

    function remove_delivery(){
    	$('.remove_delivery').on('click', function()
	        {
	            $(this).parent().parent().remove();
	        });
    }

    $('#del').submit(function(){
          receiver = $('select[name=receiver]').val();
          if (receiver == 0) {
                alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select receiver.</div>";
                $('#del_alert').html(alert);
          }
          else{
             $.post( "/inventory/add_delivery", $( "#del" ).serialize(), function(data){ //#del id han form.
               // alert(data);
                if (data == 'err1') {
                  alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please delivery information.</div>";
                  $('#del_alert').html(alert);
                }
                else {
                 alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Delivey added.</div>";
                 $('#del_alert').html(alert);
                 $('select[name=item]').val(0);
                 $('input[name=price]').val('');
                 $('input[name=qty]').val('');
                 $('input[name=unit]').val('');
                 $('select[name=receiver]').val('');
                 $('input[name=date]').val('');
                 $('#delivery_add').html("<tr><<th>Item</th><th>Price</th><th>Quantity</th><th>Unit</th><th>Action</th>/tr>");
              }

             });
          }
      });


});
