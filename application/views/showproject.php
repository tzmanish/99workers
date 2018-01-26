						<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
							<div class="dashboard-wrapper">
								<h4 class="section-title">All Projects</h4>
								<div class="table-responsive">
						            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						              <thead>
						                <tr>
						                  <th>Project Name</th>
						                  <th>Status</th>
						                </tr>
						              </thead>
						              <tfoot>
						                <tr>
						                  <th>Project Name</th>
						                  <th>Status</th>
						                </tr>
						              </tfoot>
						              <tbody>
						              	
						                <?php foreach ($query as $row) {?>
						                <tr>
						                  <td><?php echo $row->pname;?></td>
						                  <td><?php if($row->pstatus==1){ echo "compleated";}else{echo "ongoing";}?></td>
						                </tr>
						                <?php }?>
						              </tbody>
						            </table>
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
	