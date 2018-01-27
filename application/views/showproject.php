						<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
							<div class="dashboard-wrapper">
								<h4 class="section-title">All Projects</h4>
								<div class="table-responsive">
						            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						              <thead>
						                <tr>
						                  <th>Project Name</th>
						                  <th>Project Budget</th>
						                  <th>Status</th>
						                  <th>Actions</th>
						                </tr>
						              </thead>
						              <tfoot>
						                <tr>
						                  <th>Project Name</th>
						                  <th>Project Budget</th>
						                  <th>Status</th>
						                  <th>Actions</th>
						                </tr>
						              </tfoot>
						              <tbody>
						              	
						                <?php foreach ($query as $row) {?>
						                <tr>
						                  <td><?php echo $row->pname;?></td>
						                  <td><?php echo $row->cost;?></td>
						                  <td><?php if($row->pstatus==1){ echo "compleated";}else{echo "ongoing";}?></td>
                  						  <td><a href="<?php echo base_url();?>index.php/myaccount/chat/<?php echo $row->pid;?>/<?php echo $row->uid;?>" class="btn">Chat(<?php $details=$this->user->countmsgi($this->session->userdata('uid'),$row->pid ); if($details){echo "$details";}else{echo '0';} ?>)</a>
                  						  	<a href="<?php echo base_url();?>index.php/myaccount/checkout/<?php echo $row->pid;?>/<?php echo $row->uid;?>" class="btn">Pay Now</a></td>
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
	