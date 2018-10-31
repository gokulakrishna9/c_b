<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<?php echo form_open_multipart('data_capture/cr_data', 'class="email" id="myform"'); ?>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="company_name">Company Name</label>
      <input type="text" class="form-control" id="company_name" placeholder="" value="<?php if(isset($about_company_record[0]->company_name)) {echo $about_company_record[0]->company_name;} else{ echo ''; } ?>" name="company_name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="about_company">Company Header</label>
      <input type="text" class="form-control" id="company_header" placeholder="" value="<?php if(isset($about_company_record[0]->company_header)) {echo $about_company_record[0]->company_header;} else{ echo ''; } ?>" name="company_header" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="company_url">Company URL</label>
      <input type="text" class="form-control" id="company_url" placeholder="" value="<?php if(isset($about_company_record[0]->company_url)) {echo $about_company_record[0]->company_url;} else{ echo ''; } ?>" name="company_url" required>
    </div>
  </div>
  <div class="row">
    <input type="hidden" name="navigate" value="nav_add_about_company">
  <?php if($update_record){ ?>
    <input type="hidden" name="update_record" value="true">
    <input type="hidden" name="company_id"  value="<?php if(isset($about_company_record[0]->company_id)) { echo $about_company_record[0]->company_id; } else{ echo ''; } ?>">
  <?php }else{ ?>
    <input type="hidden" name="submit" value="true">
  <?php } ?>
    <div class="col-md-6 mb-3">
      <label for="about_company">About Company</label>
      <input type="text" class="form-control" id="about_company" placeholder="" value="<?php if(isset($about_company_record[0]->about_company)) {echo $about_company_record[0]->about_company;} else{ echo ''; } ?>" name="about_company" required>
      <input type="hidden" name="record" value="about_company">
    </div>
    <div class="col-md-6 mb-3">
      <label for="contact_us_at">Contact Us At</label>
      <input type="text" class="form-control" id="contact_us_at" placeholder="" value="<?php if(isset($about_company_record[0]->contact_us_at)) {echo $about_company_record[0]->contact_us_at;} else{ echo ''; } ?>" name="contact_us_at" required>
    </div>    
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="company_address">Company Address</label>
      <input type="text" class="form-control" id="company_address" placeholder="" value="<?php if(isset($about_company_record[0]->company_address)) {echo $about_company_record[0]->company_address;} else{ echo ''; } ?>" name="company_address" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="company_lattitude">Company Lattitude</label>
      <input type="text" class="form-control" id="company_lattitude" placeholder="" value="<?php if(isset($about_company_record[0]->company_lattitude)) {echo $about_company_record[0]->company_lattitude;} else{ echo ''; } ?>" name="company_lattitude" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="company_longitude">Company Longitude</label>
      <input type="text" class="form-control" id="company_longitude" placeholder="" value="<?php if(isset($about_company_record[0]->company_longitude)) {echo $about_company_record[0]->company_longitude;} else{ echo ''; } ?>" name="company_longitude" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <label for="about_company_detailed">About Company Detailed</label>
      <input type="text" class="form-control" id="about_company_detailed" placeholder="" value="<?php if(isset($about_company_record[0]->about_company_detailed)) {echo $about_company_record[0]->about_company_detailed;} else{ echo ''; } ?>" name="about_company_detailed">
    </div>
    <div class="col-md-3 mb-3">
        <label class="custom-file">
        <input type="file" id="company_logo" name="company_logo" value="<?php if(isset($about_company_record[0]->company_logo)) {echo $about_company_record[0]->company_logo;} else{ echo ''; } ?>" class="custom-file-input">
        <span class="custom-file-control"></span>
    </label>
    </div>
    <div class="col-md-3 mb-3">
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="visible">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Visible</span>
        </label>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Submit form</button>
  <?php echo form_close(); ?>

<?php if($company_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Company Name</th>
      <th>Company Header</th>
      <th>Company URL</th>
      <th>About Company</th>
      <th>About Company Detailed</th>
      <th>Company Address</th>
      <th>Company Lattitude</th>
      <th>Company Longitude</th>
      <th>Contact US</th>
      <th>Company Logo</th>
      <th>Visible</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($company_list as $company){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $company->company_name; ?></td>
      <td><?php echo $company->company_header; ?></td>
      <td><?php echo $company->company_url; ?></td>
      <td><?php echo $company->about_company; ?></td>
      <td><?php echo $company->about_company_detailed; ?></td>
      <td><?php echo $company->company_address; ?></td>
      <td><?php echo $company->company_lattitude; ?></td>
      <td><?php echo $company->company_longitude; ?></td>
      <td><?php echo $company->contact_us_at; ?></td>
      <td><?php echo $company->company_logo; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_about_company">
              <input type="hidden" name="company_id"  value="<?php echo $company->company_id; ?>">         
              <input type="hidden" name="update"   value="true">
              <button type="submit" class="btn btn-primary">Update</button>
          <?php echo form_close(); ?>
      </td>
    </tr>
    <?php
          $sno++;
     } ?>
  </tbody>
</table>
<?php } ?>

</main>