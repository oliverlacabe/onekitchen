<body class="resto-body">
    <?php $this->load->view('ayo/ayohead'); ?>
    <div class="panel">
    	<div class="panel-body">
    		<div class="col-md-6">
    			<img class="round" src="<?php echo base_url('assets/images/ayo_services.jpg'); ?>">
    		</div>
    		<div class="col-md-6">	
    			<h2 class="center"><strong>- Services -</strong></h2>
    			<p class="p-bg">
    				ayo Cafe also accepts orders (from the menu or special), to go (take-outs), 
    				in-house catering, and small-scale catering.
    			</p><p class="p-bg">
					Prospective customers can choose from the establishment's 
					existing menu or arrange their preferences with the chef.
				</p><p class="p-bg">
					If you are craving for something, call us:
					We just might be able to re-create it for you.
    			</p>
    		</div>
    	</div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
    <script src = "<?php echo base_url('assets/js/menu_ajax.js'); ?>"></script>

</body>
</html>
