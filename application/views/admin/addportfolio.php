
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> ADD PORTFOLIO </h1>
       	  <?php $attributes = array("name" => "portfolio");
      echo form_open_multipart("admin/admin/addportfolio", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Portfolio</label>
                <input type="text" class="form-control"  name="pname">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <input type="text" class="form-control"  name="pdescr">
              </div>
            <div class="form-group">
              <label for="">Image</label>
                <input type="file" class="form-control"  name="pimage">
              </div>
            <div class="form-group">
              <label for="">Category</label>
              <select class="form-control" name=" id">
                <?php foreach ($query as $row) {?>
                <option value="<?php echo $row->id;?>"><?php echo $row->name; ?></option>
                <?php }?>
              </select>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
       </div>

    </div>
  </div>


