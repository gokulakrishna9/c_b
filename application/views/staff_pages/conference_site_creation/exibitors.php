<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<div class='alert alert-success' role='alert'>
  <?php 
        if($this->session->has_userdata('conference_title')){
            echo '</h4>'.$page_name.'</h4>: '.'Current Conference set to '.$this->session->conference_title;
        }             
  ?>
</div>
<?php echo form_open_multipart('data_capture/cr_data', 'class="email" id="myform"'); ?>
  <div class="row">
    <div class="col-md-6 mb-3">
<?php if($update_record){?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="exibitor_id"  value="<?php if($update_record && isset($exibitor_record[0]->exibitor_id)) {echo $exibitor_record[0]->exibitor_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_add_exibitors">
      <label for="exibitor_first_name">First Name</label>
      <input type="text" class="form-control" id="exibitor_first_name" value="<?php if($update_record && isset($exibitor_record[0]->exibitor_first_name)) {echo $exibitor_record[0]->exibitor_first_name;} else{ echo ''; } ?>"  value="" name="exibitor_first_name" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="exibitor_last_name">Last Name</label>
      <input type="text" class="form-control" id="exibitor_last_name" value="<?php if($update_record && isset($exibitor_record[0]->exibitor_last_name)) {echo $exibitor_record[0]->exibitor_last_name;} else{ echo ''; } ?>"  value="" name="exibitor_last_name" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="designation" value="<?php if($update_record && isset($exibitor_record[0]->designation)) {echo $exibitor_record[0]->designation;} else{ echo ''; } ?>"  name="designation" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="company">Company</label>
      <input type="text" class="form-control" id="company" value="<?php if($update_record && isset($exibitor_record[0]->company)) {echo $exibitor_record[0]->company;} else{ echo ''; } ?>"  name="company" >
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
 <!--   <div class="col-md-3 mb-3">
      <label for="country_id">Country ID</label>
      <input type="text" class="form-control" id="country_id" value="<?php if($update_record && isset($exibitor_record[0]->country_id)) {echo $exibitor_record[0]->country_id;} else{ echo ''; } ?>"  name="country_id" >
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="biography">Biography</label>
      <input type="text" class="form-control" id="biography" value="<?php if($update_record && isset($exibitor_record[0]->biography)) {echo $exibitor_record[0]->biography;} else{ echo ''; } ?>"  value="" name="biography" >
    </div>
    <div class="col-md-6 mb-3">
        <label for="biography">Photograph</label>         
        <input type="file" id="photo_url" name="photo_url" value="<?php if($update_record && isset($exibitor_record[0]->photo_url)) {echo $exibitor_record[0]->photo_url;} else{ echo ''; } ?>" class="">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
        <label for="conference_image">Visible</label>
        <input type="radio" name="visible" value="YES" checked>Yes<br>
        <input type="radio" name="visible" value="NO">No<br>            
    </div>
    <div class="col-md-3 mb-3">
        <label for="rank">Rank</label>
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($exibitor_record[0]->rank)) {echo $exibitor_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($exibitor_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Member First Name</th>
      <th>Member Last Name</th>
      <th>company</th>
      <th>Country</th>
      <th>Photo</th>
      <th>Biography</th>
      <th>Designation</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($exibitor_list as $exibitor){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $exibitor->exibitor_first_name; ?></td>
      <td><?php echo $exibitor->exibitor_last_name; ?></td>
      <td><?php echo $exibitor->company; ?></td>
      <td><?php echo $exibitor->country_id; ?></td>
      <td><?php echo $exibitor->photo_url; ?></td>
      <td><?php echo $exibitor->biography; ?></td>
      <td><?php echo $exibitor->designation; ?></td>
      <td><?php echo $exibitor->visible; ?></td>
      <td><?php echo $exibitor->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_exibitors">
            <input type="hidden" name="exibitor_id"  value="<?php echo $exibitor->exibitor_id; ?>">         
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