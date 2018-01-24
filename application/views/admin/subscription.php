
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Subscribers </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><?php echo $row->email;?></td>
                  <td><?php if($row->status==1){ echo "active";}else{echo "disabled";}?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/subscriptionstatus/<?php echo $row->id; ?>/<?php echo $row->status; ?>" class="btn"><?php if($row->status==0){ echo "activate";}else{echo "disable";}?></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


