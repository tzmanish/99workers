						<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
							<div class="dashboard-wrapper">
								<h4 class="section-title">New Project</h4>
								<div class="post-form-wrapper">
									<?php $attributes = array("name" => "project");
      echo form_open_multipart("myaccount/startproject", $attributes);?>
									<div class="row gap-20">

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" placeholder="Project name"  name="pname">
											</div>
										</div>

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label>Descreption</label>
												<textarea type="text" class="form-control"  name="dscr"></textarea>
											</div>
										</div>

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
											  <label>Type</label>
								              <select class="form-control" name="scid">
								                <?php foreach ($query as $row) {?>
								                <option value="<?php echo $row->scid;?>"><?php echo $row->scname; ?></option>
								                <?php }?>
								              </select>
											</div>
										</div>

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label>Cost (in $)</label>
												<input type="number" class="form-control" placeholder="$"  name="cost">
											</div>
										</div>

										<div class="clear"></div>

										<div class="col-sm-6 col-md-6">
										  <div class="form-group">
							              <label for="">Attachment</label>
							                <input type="file" class="form-control"  name="picture">
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
	