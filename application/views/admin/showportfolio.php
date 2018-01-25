
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> PORTFOLIO </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><img src="<?php echo base_url();?>uploads/portfolio/thumb/<?php echo $row->pimage;?>" class="img-responsive center-block" style="height:80px;"></td>
                  <td><?php echo $row->pname;?></td>
                  <td><?php echo $row->pdescr;?></td>
                  <td><?php echo $row->name;?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/deleteportfolio/<?php echo $row->pid; ?>/<?php echo $row->pimage;?>" class="btn">Delete</a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


