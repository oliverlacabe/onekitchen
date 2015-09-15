$(document).ready(function(){

    $('#delivery_form').submit(function(){

	     $.post( "/inventory/append_delivery", $( "#delivery_form" ).serialize(), function(data){
           	$('#delivery_add').append(data);
           	remove_delivery();
      	 });

    });

    $('select[name=before_item]').change(function(){
        item = $('select[name=before_item]').val();
	    // $.post( "/inventory/append_delivery", {}, function(data){
        //    	$('#delivery_add').append(data);
        //    	remove_delivery();
        // });

        alert(item);

    });

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
        // alert('hello'); //pag alert kun nadara
      });


});
