
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Projects </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Budget</th>
                  <th>Status</th>
                  <th>Category</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Budget</th>
                  <th>Status</th>
                  <th>Category</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><?php echo $row->pname;?></td>
                  <td><?php echo $row->dscr;?></td>
                  <td><?php echo $row->cost;?></td>
                  <td><?php if($row->pstatus==1){ echo "compleated";}else{echo "ongoing";}?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/projectstatus/<?php echo $row->pid;?>/<?php echo $row->pstatus;?>" class="btn"><?php if($row->pstatus==0){ echo "compleated";}else{echo "resume";}?></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


