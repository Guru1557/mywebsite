<body  style="background: -webkit-linear-gradient(left, rgba(68, 174, 228, 0.5), rgba(159, 65, 194, 0.5));">
<div style="">

	<div class="login-box"  style=" margin-right:0px;padding:5px">
	  	<div class="login-logo">
	    	<a href="<?php echo base_url(); ?>"><b>Pen and Paper</b></a>
	  	</div>


	  	<!-- /.login-logo -->
	  	<div style="  background:#fae6e6;
    padding: 1%;
	 border-radius: 15px;
	 margin-top:3%;
	 margin-bottom:3%;
	
	 box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.2), 
	 0px 1px 1px 0px rgba(0, 0, 0, 0.14),
	  0px 2px 1px -1px rgba(0, 0, 0, 0.12);">
	    	<p class="login-box-msg">Sign in to start your session</p>
			<?php if($this->session->flashdata("messagePr")){?>
	  		<div class="alert alert-info">      
		        <?php echo $this->session->flashdata("messagePr")?>
		    </div>
		    <?php } ?>
		    <form action="<?php echo base_url().'user/auth_user'; ?>" method="post">
		    	<div class="form-group has-feedback">
		    		<input type="text" name="email" class="form-control" id="" placeholder="Email">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      	</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" id="pwd" placeholder="Password" >
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
			    <a href="forgetpassword" class="forgot ">I Forgot my password?</a>
			  	<div class="row">
			  		<div class="col-xs-12">
		          		<button type="submit" class="btn btn-primary btn-block btn-flat btn-color">Sign In</button>
		        	</div>
				</div>
		    </form>
			
         
		    <!-- /.social-auth-links -->
		    <?php if(setting_all('register_allowed')==1){ ?>
		    	<br>
				<span class="glyphicon glyphicon-user bg-icon-paste"></span><a href="<?php echo base_url().'user/registration';?>" class="text-center"> Register a new membership</a>
			<?php } ?>
		</div>
		<!-- /.login-box-body -->
		<iframe src="http://localhost/penandpaper/cart/" style="width:980px; height:800px; margin-left:-1000px; margin-top:-300px">
	</div>
			</div>
</body>
