
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Users </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td style="text-transform: capitalize;"><?php echo $row->fname;?> <?php echo $row->lname;?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php if($row->status==1){ echo "active";}else{echo "suspended";}?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/userstatus/<?php echo $row->uid; ?>/<?php echo $row->status; ?>" class="btn"><?php if($row->status==0){ echo "activate";}else{echo "suspend";}?></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


