$(document).ready(function(){
	
	  $('#add_sales').submit(function(){
      // alert('hello');
      menu = $('select[name=menu]').val();
      if (menu == 0) {
          alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please select menu.</div>";
          $('#bills_alert').html(alert);
      }
      else  {
        $.post( "/sales/append_sales", $( "#add_sales" ).serialize(), function(data){
          $('#sales_table').append(data);
          remove_sales();
        }); 

      }
	      
    });

    function remove_sales(){
    	$('.remove_sales').on('click', function()
	        {
	            $(this).parent().parent().remove();
	        });
    }
  
    $('#order').submit(function(){
        $.post( "/sales/add_bills", $( "#order" ).serialize(), function(data){
          // alert(data);
          if (data == 'err1') {
              var alert = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Stop!</strong> Please input information.</div>";
              $('#bills_alert').html(alert);
          }
          else {
             var alert = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Success!</strong> Bill added.</div>";
             $('#bills_alert').html(alert);
             $('select[name=menu]').val(0);
             $('input[name=sold]').val('');
             $('input[name=bill_no]').val('');
             $('input[name=cust_name]').val('');
             $('input[name=date]').val('');
             $('#sales_table').html("<tr><<th>Menu</th><th>Price</th><th>Sold</th><th>Total</th><th>Action</th>/tr>");
          }
          
        });  
    });

  

});