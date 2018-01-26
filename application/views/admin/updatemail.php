
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> UPDATE Email </h1>
       	  <?php $attributes = array("name" => "admin");
      echo form_open_multipart("admin/admin/updatemail", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">New Email</label>
                <input type="Email" class="form-control"  name="mail">
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
       </div>

    </div>
  </div>


