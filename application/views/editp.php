						<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
							<div class="dashboard-wrapper">
								<h4 class="section-title">Edit Profile</h4>
								<div class="post-form-wrapper">
									<?php $attributes = array("name" => "profile");
      								echo form_open_multipart("myaccount/editp", $attributes);?>
									<div class="row gap-20">

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control"  name="fname">
											</div>
										</div>

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control"  name="lname">
											</div>
										</div>

										<div class="clear mb-10"></div>
										<div class="col-sm-12">
											<button type="submit" class="btn btn-primary col-md-4 col-md-offset-1" name="submit" value="Upload">Submit</button>
										</div>
									</div>
								<?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
								</div>
							</div>
						</div>

						<!-- end-->

					</div>
				</div>
			</div>
		</div>
		
		<!-- end Main Wrapper -->
	