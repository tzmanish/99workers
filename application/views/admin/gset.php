
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> General Settings </h1>
       	  <?php $attributes = array("name" => "admin");
      echo form_open_multipart("admin/admin/gset", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Update Admin Name</label>
                <input type="text" class="form-control"  name="aname">
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
       </div>

    </div>
  </div>


