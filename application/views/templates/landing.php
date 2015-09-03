<body class="start">
	<div class="sidebar">
			<br/>
			<h4 class="center" style="color: #999;">Visit us at .. </h4>
		<div class="sidebar-container">
			<div style="width:100px; height: 100px; margin: 0px auto;">
				<a href="/ayocafe" ><img src="./assets/images/ayo.jpg" class="img-circle resto-logo"></a>
			</div>
			</br>
			<label class="simple-label">
				#5 JCO Arcade, Ninoy Aquino Avenue (Apitong Road), </br>
				Tacloban City, 6500 Leyte </br>
				(053) 325 4461
			</label>
		</div>
		<div class="sidebar-container">
			<div style="width:100px; height: 100px; margin: 0px auto;">
				<img src="./assets/images/canto.png" class="img-circle resto-logo">
			</div>
			</br>
			<label class="simple-label">
				Burgos Street, </br>
				Tacloban City, 6500 Leyte </br>
				(053) 325 4461
			</label>
		</div>
		<div class="sidebar-footer">
			<label class="simple-label">&copy; 2015</label>
		</div>
	</div>
	<div class="landing-container">
		<div class="menu-landing">
			<label class="lbl-login" data-toggle="modal" data-target="#login" href="">
				<span class="glyphicon glyphicon-log-in"></span>
			</label>
		</div>
		<br/>
		<div class="menu-landing">
			<h1 class="title"><strong>ONE</strong> Kitchen</h1>
			<br/>
			<h3 class="title-small">INTEGRATION SYSTEM</h3>
		</div>
	</div>
	<div class="modal fade" data-backdrop="false" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content" style="background-color: rgba(254, 207, 145, .5);">
	      	<div class="modal-body">
		        <div class="container-fluid">
		        	<div style="width:150px; height: 150px; margin: 0px auto;">
		        		<img src="./assets/images/default.jpg" class="img-circle img-login">
		        	</div>
		        	</br>
					<div class="err_msg" style="display: none; width: 100%; text-align: center; color: #FFB695;">
						<label>Invalid Usernamer/Password!</label>
					</div>
		        	<form class="form-horizontal" id="login_form" method="post" role="form" onsubmit="return false">
		        		<div class="form-group">
		        			<input class="form-control input-lg" name="username" style="background-color: #E8D6CD; color: #B84B14;" type="text" required placeholder="Username">
		        		</div>
		        		<div class="form-group">
		        			<input class="form-control input-lg" name="password" style="background-color: #E8D6CD; color: #B84B14;" type="password" required placeholder="Password">
		        		</div>
		        		<div class="form-group">
				        	<button type="submit" class="btn btn-login btn-block btn-lg">Login</button>
				        	<button type="button" class="btn btn-close btn-block btn-lg" data-dismiss="modal">Close</button>
		        		</div>
		        	</form>
		        </div>
	        </div>
	    </div>
	  </div>
	</div>
	<?php $this->load->view('templates/footer'); ?>
	<script src="./assets/js/ajax/login_ajax.js"></script>

</body>
</html>
