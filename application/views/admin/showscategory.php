  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> SERVICE CATEGORIES </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><?php echo $row->scname;?></td>
                  <td><?php echo $row->scdescr;?></td>
                  <td><?php if($row->scstatus==1){ echo "active";}else{echo "inactive";}?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/deletescategory/<?php echo $row->scid; ?>" class="btn">Delete</a><a href="<?php echo base_url();?>index.php/admin/admin/scategorystatus/<?php echo $row->scid; ?>/<?php echo $row->scstatus; ?>" class="btn"><?php if($row->scstatus==0){ echo "activate";}else{echo "deactivate";}?></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


