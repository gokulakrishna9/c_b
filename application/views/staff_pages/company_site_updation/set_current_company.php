<main class='col-sm-9 ml-sm-auto col-md-10 pt-3' role='main'>
<div class='alert alert-success' role='alert'>
  <?php 
        if($this->session->has_userdata('company_name')){
            echo 'Current company set to '.$this->session->company_name;
        }else{
            echo "You are on ".$page_name;
        }             
  ?>
</div>
<?php echo form_open_multipart('data_capture/cr_data', 'class="email" id="myform"'); ?>
  <div class='row'>
    <div class='col-md-10 mb-3'>
      <div class='col-auto'>
        <input type='hidden' name='navigate' value='nav_set_current_company'>
        <label class='' for='current_company'>Set Current Company</label>
        <select class='form-control' name='company_id'>
        <?php foreach($company_list as $company){ ?>
            <option value='<?php echo $company->company_id; ?>'><?php echo $company->company_name; ?></option>
        <?php } ?>
        </select>
      </div>
    </div>
  </div>
  <div class='col-auto'>
    <button type='submit' class='btn btn-primary'>Submit</button>
  </div>
  
<?php echo form_close(); ?>
</main>