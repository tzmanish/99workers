<div class="container" style="padding-bottom: 5%;padding-top: 5%;">
	<div class="col-md-12">
				<div class="col-md-8">
					
					<div class=" col-md-12 col-sm-8" style="background-image: url(<?php echo base_url(); ?>media/images/login2.jpg); background-size: 101%; background-repeat: no-repeat; ">
						
						
							<div class="col-md-6 col-md-offset-6 col-sm-12" style="padding-top: 20px; padding-bottom: 10px;" >
								<center>
									<h3>I am a new customer!</h3>
								Verifiable contact information is required for domain registration. Please create an account to proceed.</center></div>
									<div class="form-group col-md-6 col-md-offset-6 ">
											<center><button type="submit" class="btn btn-primary btn-block " ><i class="fa fa-lock"></i> Create Account</button></center>
											   <div class="spin-load" style="display: none;">    
											        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
											        <span class="sr-only">Loading...</span>
											    </div>
							</div>		</div>
						
					
				</div>
		

				<div class="row">
			    	<div class="col-sm-12 col-md-4 col-lg-4 ">
			    		<div class="formlogin">
			    			<?php $attributes = array("name" => "loginform");
            echo form_open("login", $attributes);?>
						<div class="padding24 bgtruewhite  shadowbox2" id="new-account">
							<center><h3>Secure Log in</h3></center>
							<hr>
			                <div class="col-sm-6 col-md-12">
								<div class="form-group">
									<label>Username:</label>
									<input type="text" class="form-control" placeholder="Username"  name="email">
								</div>
							</div>
							<div class="clear"></div>
							<div class="col-sm-6 col-md-12">
                                <div class="form-group">
									<label>Password:</label>
									<input type="Password" class="form-control" placeholder="Password" name="password">
								</div>
								<br>
							</div>	
							<div class="form-group col-md-12">
								<center><button type="submit" class="btn btn-primary btn-block " ><i class="fa fa-lock"></i> Create Account</button></center>
                            </div>
                            <?php echo form_close(); ?>
								<center><a href="#">Forgot Username or Password?</a></center>
							<div></div>
							    


							</div>
						</div>
			    	</div>
			    </div>
	</div>	
</div><br>