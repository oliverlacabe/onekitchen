<body>
    <?php $this->load->view('ayo/ayohead'); ?>

	<ul class="nav nav-tabs sub-title col-md-9">
	  <label class="m-label">Ayo Cafe Menu</label>
	  <li class="pull-right"><a class="a-tab" href="#beverages" data-toggle="tab">Beverages</a></li>
	  <li class="pull-right"><a class="a-tab" href="#desserts" data-toggle="tab">Desserts</a></li>
	  <li class="pull-right"><a class="a-tab" href="#appetizer" data-toggle="tab">Appetizers</a></li>
	  <li class="active pull-right"><a class="a-tab" href="#main_dish" data-toggle="tab">Main Dishes</a></li>
	</ul>

	<ul class="nav nav-tabs sub-title col-md-3" style="height: 54px;">
	  <label class="m-label center" style="width: 100%">Cart</label>
	</ul>
    <div class="panel col-md-9">
    	<div class="panel-body">

			<div class="tab-content">
			  <div class="tab-pane active" id="main_dish">
				<div class="row">
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_01.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Asian Noodle Salad</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_02.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Tuna Veggie Pasta</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_03.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Chicken Asparagus Pasta</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				   <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_04.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Hot Tuna Melt</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_05.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Lemon Caper Fish</button>
				      	<button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_06.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Fish and Chips</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_07.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Spanish Style Bangus</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
				  
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img class="thumb" src="<?php echo base_url('assets/images/ayo_menu/ayo_menu_08.jpg');?>" alt="ayo_menu_01.jpg">
				      
				        <button class="btn btn-success btn-sm btn-block" style="margin-top: 5px" data-toggle = "modal" data-target = "#quantity" >Orange Ribs</button>
				        <button class="btn btn-danger btn-sm btn-block" data-toggle = "modal" data-target = "#quantity" >Php 200.00</button>
				     
				    </div>
				  </div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="appetizer">Appetizers</div>
			  <div class="tab-pane" id="desserts">Desserts</div>
			  <div class="tab-pane" id="beverages">Beverages</div>
			</div>
    	</div>
    </div>
    <div class="col-md-3">
    	<br/>
    	<div class="panel">
    		<div class="panel-body">
    			<p class="center cart">
    				<strong>Ayo Cafe</strong><br/>
    				#5 JCO Arcade, Ninoy Aquino Avenue (Apitong Road), 
					Tacloban City, 6500 Leyte 
					(053) 325 4461
				</p>
				<hr/>
				<table width="100%">
					<tr>
						<th>Item</th>
						<th class="center">Qty</th>
						<th class="right">Price</th>
					</tr>
					<tr>
						<td>Chicken Asparagus</td>
						<td class="center">1</td>
						<td class="right">200</td>
					</tr>
					<tr>
						<td>Asian Noodle Salad</td>
						<td class="center">2</td>
						<td class="right">400</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<th colspan="2" class="right">Total Price</th>
						<th class="right">600</th>
					</tr>
				</table>
				<hr/>
				<strong>Please Fill up This Form</strong><br/><br/>
				<form class="form">
					<div class="form-group">
						<input class="form-control" type="text" required name="name" placeholder="your name here">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" required name="address" placeholder="complete address">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" required name="address" placeholder="cash">
					</div>
				<hr/>
				<button class="btn btn-default btn-block">Proceed to Checkout >></button>
				</form>
    		</div>
    	</div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
    <script src = "<?php echo base_url('assets/js/menu_ajax.js'); ?>"></script>

    <div class="modal fade" id="quantity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" style="margin-top: 150px">
	    <div class="modal-content">
	      <div class="modal-header"  style="background-color: #FFFEC9;">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Fish and Chips</h4>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
	        	<input class="form-control" type="number" name="quantity" placeholder="quantity">	
	        	<br/>
	        	<button class="btn btn-warning pull-right">Add to Cart</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

</body>
</html>
