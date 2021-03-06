
<!--portfolio-->

<div class="container pt-70 pb-60 clearfix">

				<div class="row">
				
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					
						<div class="section-title">
						
							<h2>Portfolio</h2>
							
						</div>
					
					</div>
				
				</div>


		<!-- filter -->
			
			<div class="filter-full-width-wrapper">

				<form class="">
				
					<div class="filter-full-primary">
					
						<div class="container">
					
							<div class="filter-full-secondary-inner">
							
								<div class="form-holder">
								
									<div class="row">
									
										<div class="col-xs-12 col-sm-12 col-md-6">
										
											<div class="filter-item bb-sm no-bb-xss">
											
												<div class="input-group input-group-addon-icon no-border no-br-sm">
													<span class="input-group-addon input-group-addon-icon bg-white"><label><i class="glyphicon glyphicon-search"></i> Search:</label></span>
													<input type="text" class="form-control" id="autocompleteTagging" value="Name,Logo,Businesscard" placeholder="" />
												</div>
											
											</div>
											
										</div>

										<div class="col-xs-12 col-sm-12 col-md-6">
										
											<div class="filter-item-wrapper">
											
												<div class="row">
													
													<div class="col-xss-12 col-xs-6 col-sm-6">
											
														<div class="filter-item mmr">
														
															<div class="input-group input-group-addon-icon no-border no-br-xs">
																<span class="input-group-addon input-group-addon-icon bg-white">
																<label class="block-xs"><i class="fa fa-sort-amount-asc"></i> Category:</label></span>
																<select class="selectpicker form-control block-xs">
																	<option value="0"> Price</option>
																	<option value="3"> Name</option>
																	<option value="4"> User Rating</option>
																	<option value="7"> Star Rating</option>
																</select>
															</div>
														
														</div>
														
													</div>
											
													<div class="col-xss-12 col-xs-6 col-sm-5">
													
														<div class="filter-item mmr">
														
															<div class="input-group input-group-addon-icon no-border no-br-xs">
																<span class="input-group-addon input-group-addon-icon bg-white"><label><i class="fa fa-sort-amount-asc"></i> Dropdown:</label></span>
																<select class="selectpicker form-control" data-live-search="false" data-selected-text-format="count > 2" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All Types" multiple>
																	<option value="0"> Adventure</option>
																	<option value="1"> Hooneymoon</option>
																	<option value="2"> Shopping</option>
																	<option value="3"> History</option>
																</select>
															</div>
														
														</div>
														
													</div>
												
												</div>
											
											</div>
											
										</div>

									</div>
								
								</div>
								
								
							</div>

						</div>

					</div></div><br>
				<!-- filter end -->	





				
				<div class="mb-30">
				
					<div class="GridLex-gap-20 GridLex-gap-15-mdd GridLex-gap-10-xs">
						
						<div class="GridLex-grid-noGutter-equalHeight">
						<?php if($query)
						    {foreach ($query as $row) {?>
							<div class="GridLex-col-3_sm-3_xs-6_xss-12">
							
								<div class="top-destination-item">
									<a href="<?php echo base_url();?>index.php/home/pdetails/<?php echo $row->pid;?>">
										<div class="image">
											<img src="<?php echo base_url();?>uploads/portfolio/thumb/<?php echo $row->pimage;?>" alt="images" />
										</div>
										
									</a>
								</div>
								
							</div>
						<?php }}?>
							
						</div>

						
					</div>

				</div>
				
			</div>