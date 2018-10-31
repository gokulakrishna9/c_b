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
        <input type="hidden" name="organizing_member_id"  value="<?php if($update_record && isset($organizing_member_record[0]->organizing_member_id)) {echo $organizing_member_record[0]->organizing_member_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_add_organizing_members">
      <label for="member_first_name">Member First Name</label>
      <input type="text" class="form-control" id="member_first_name" value="<?php if($update_record && isset($organizing_member_record[0]->member_first_name)) {echo $organizing_member_record[0]->member_first_name;} else{ echo ''; } ?>"  value="" name="member_first_name" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="member_last_name">Member Last Name</label>
      <input type="text" class="form-control" id="member_last_name" value="<?php if($update_record && isset($organizing_member_record[0]->member_last_name)) {echo $organizing_member_record[0]->member_last_name;} else{ echo ''; } ?>"  value="" name="member_last_name" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="designation" value="<?php if($update_record && isset($organizing_member_record[0]->designation)) {echo $organizing_member_record[0]->designation;} else{ echo ''; } ?>"  name="designation" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="institute">Institute</label>
      <input type="text" class="form-control" id="institute" value="<?php if($update_record && isset($organizing_member_record[0]->institute)) {echo $organizing_member_record[0]->institute;} else{ echo ''; } ?>"  name="institute" >
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
<!--    <div class="col-md-3 mb-3">
      <label for="country_id">Country ID</label>
      <input type="text" class="form-control" id="country_id" value="<?php if($update_record && isset($organizing_member_record[0]->country_id)) {echo $organizing_member_record[0]->country_id;} else{ echo ''; } ?>"  name="country_id" >
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="biography">Biography</label>
      <input type="text" class="form-control" id="biography" value="<?php if($update_record && isset($organizing_member_record[0]->photo_url)) {echo $organizing_member_record[0]->photo_url;} else{ echo ''; } ?>"  name="biography" >
    </div>
    <div class="col-md-6 mb-3">
        <label for="biography">Photograph</label>
        <br>
        <label class="custom-file">
        <input type="file" id="photo_url" name="photo_url" value="<?php if($update_record && isset($organizing_member_record[0]->biography)) {echo $organizing_member_record[0]->biography;} else{ echo ''; } ?>" class="custom-file-input">
        <span class="custom-file-control"></span>
        </label>
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($organizing_member_record[0]->rank)) {echo $organizing_member_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($organizing_member_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Member First Name</th>
      <th>Member Last Name</th>
      <th>Institute</th>
      <th>Country</th>
      <th>Photo</th>
      <th>Biography</th>
      <th>Designation</th>
      <th>Visible</th>
      <th>Rank</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($organizing_member_list as $member){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $member->member_first_name; ?></td>
      <td><?php echo $member->member_last_name; ?></td>
      <td><?php echo $member->institute; ?></td>
      <td><?php echo $member->country_id; ?></td>
      <td><?php echo $member->photo_url; ?></td>
      <td><?php echo $member->biography; ?></td>
      <td><?php echo $member->designation; ?></td>
      <td><?php echo $member->visible; ?></td>
      <td><?php echo $member->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_organizing_members">
            <input type="hidden" name="organizing_member_id"  value="<?php echo $member->organizing_member_id; ?>">         
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