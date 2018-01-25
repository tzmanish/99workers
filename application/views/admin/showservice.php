
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> SERVICES </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Service</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Service</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><img src="<?php echo base_url();?>uploads/service/thumb/<?php echo $row->image;?>" class="img-responsive center-block" style="height:80px;"></td>
                  <td><?php echo $row->sname;?></td>
                  <td><?php echo $row->short_descr;?></td>
                  <td><?php echo $row->scname;?></td>
                  <td><?php if($row->status==1){ echo "active";}else{echo "inactive";}?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/deleteservice/<?php echo $row->sid; ?>" class="btn">Delete</a><a href="<?php echo base_url();?>index.php/admin/admin/servicestatus/<?php echo $row->sid; ?>/<?php echo $row->status; ?>" class="btn"><?php if($row->status==0){ echo "activate";}else{echo "deactivate";}?></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


