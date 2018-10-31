<main class='col-sm-9 ml-sm-auto col-md-10 pt-3' role='main'>
<div class='alert alert-success' role='alert'>
  <?php 
        if($this->session->has_userdata('conference_title')){
            echo 'Current Conference set to '.$this->session->conference_title;
        }else{
            echo $page_name;
        }             
  ?>
</div>
<?php echo form_open_multipart('data_capture/cr_data', 'class="email" id="myform"'); ?>
  <div class='row'>
    <div class='col-md-10 mb-3'>
      <div class='col-auto'>
        <input type='hidden' name='navigate' value='nav_set_current_conference'>
        <label class='' for='current_conference'>Set Current Conference</label>
        <select class='form-control' name='conference_id'>
        <?php foreach($conferences_list as $conference){ ?>
            <option value='<?php echo $conference->conference_id ?>'><?php echo $conference->conference_title; ?></option>
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
<?php echo "Exited main"; ?>