<div class="container" style="padding-bottom: 5%;padding-top: 5%;">
    	<div class="row ">
		
			<div class="col-sm-6 col-sm-6 col-md-4 col-md-push-7">
				<div class="formlogin">
					<div class="container">
						<a href="#">I already have a 99workers.com account »</a>
					</div>
				</div>	
		</div>
	    	<div class="col-sm-6 col-sm-pull-6 col-md-7 col-md-pull-4">
			
	    	<div class="row">
		    	<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-7 col-lg-offset-4">
		    	<?php $attributes = array("name" => "loginform");
            echo form_open("signup/index", $attributes);?>
		    		<div class="formlogin">
					<div class="padding24 bgtruewhite  shadowbox2" id="new-account">
						<center><h3>Create a New Account</h3></center>
						<hr>
		                <div class="col-sm-6 col-md-12">
							<div class="form-group">
								<label>First Name:</label>
									<input type="text" class="form-control" placeholder="First Name" name="fname">
								</div>
						</div>
						 <div class="col-sm-6 col-md-12">
							<div class="form-group">
								<label>Last Name:</label>
									<input type="text" class="form-control" placeholder="Last Name" name="lname">
								</div>
						</div>
						<div class="col-sm-6 col-md-12">
							<div class="form-group">
								<label>Email Address:</label>
								<input type="email" class="form-control" placeholder="myemail@gmail.com" name="email">
						</div>
						</div>
						<div class="clear"></div>
						<div class="clear"></div>
						<div class="col-sm-6 col-md-12">
                            <div class="form-group">
								<label>Create a Password:</label>
								<input type="Password" class="form-control" placeholder="Password" name="password">
							</div>
						 </div>
	
						<br>
						</div>	
						<div class="form-group">
							<center><button type="submit" class="btn btn-primary btn-block " ><i class="fa fa-lock"></i> Create Account</button></center>
						    <div class="spin-load" style="display: none;">    
						        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						        <span class="sr-only">Loading...</span>
						    </div>
						</div></div>
						
                            <?php echo form_close(); ?>
          	<?php echo $this->session->flashdata('msg'); ?>
					</div>
		    	</div>
	    	</div><br>
    	</div>
    
	</div>


    
    <div class="pushtopmargin pushbottommargin">
    </div>
</div><!--/container-->

