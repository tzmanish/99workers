<div class="container" style="padding-bottom: 5%;padding-top: 5%;">
    	<div class="row ">
		
			
	    	
			
	    	<div class="row">
	    		<div class="col-md-6 col-md-offset-3"><center><h1>Reset password</h1>
           		<p style="">Just enter your Email id and we'll send you a link to reset your password.</p></center><hr></div>
		    	<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
		    	<?php $attributes = array("name" => "loginform");
            echo form_open("signup/index", $attributes);?>
            
		    		<div class="formlogin">
					<div class="padding24 bgtruewhite  shadowbox2" id="new-account">
						
						
		                <div class="form-group">
									<label for="form_name">Email Address: <span class="font10 text-danger">(required)</span></label>
									<input id="form_name" type="text" class="form-control" name="name" data-error="Your name is required" required="required" placeholder="Email Address">
									<div class="help-block with-errors"></div>
						</div
						 
						<div class="form-group">
							<center><button type="submit" class="btn btn-primary  " > sent reset link</button></center>
						    <div class="spin-load" style="display: none;">    
						        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						        <span class="sr-only">Loading...</span>
						    </div>
						</div></div>
					</div>
		    	</div>
	    	</div><br>
    	</div>
    
	</div>


    
    <div class="pushtopmargin pushbottommargin">
    </div>
</div><!--/container-->




