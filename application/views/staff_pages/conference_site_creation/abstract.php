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
        <input type="hidden" name="abstract_id"  value="<?php if($update_record && isset($abstract_record[0]->abstract_id)) {echo $abstract_record[0]->abstract_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_add_abstract">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="first_name" value="<?php if($update_record && isset($abstract_record[0]->first_name)) {echo $abstract_record[0]->abstract_first_name;} else{ echo ''; } ?>"  value="" name="first_name" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" value="<?php if($update_record && isset($abstract_record[0]->last_name)) {echo $abstract_record[0]->abstract_last_name;} else{ echo ''; } ?>"  value="" name="last_name" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="designation" value="<?php if($update_record && isset($abstract_record[0]->designation)) {echo $abstract_record[0]->designation;} else{ echo ''; } ?>"  name="designation" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="institute">Institute</label>
      <input type="text" class="form-control" id="institute" value="<?php if($update_record && isset($abstract_record[0]->institute)) {echo $abstract_record[0]->institute;} else{ echo ''; } ?>"  name="institute" >
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
   <!-- <div class="col-md-3 mb-3">
      <label for="country_id">Country ID</label>
      <input type="text" class="form-control" id="country_id" value="<?php if($update_record && isset($abstract_record[0]->country_id)) {echo $abstract_record[0]->country_id;} else{ echo ''; } ?>"  name="country_id" >
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="biography">Biography</label>
      <input type="text" class="form-control" id="biography" value="<?php if($update_record && isset($abstract_record[0]->biography)) {echo $abstract_record[0]->biography;} else{ echo ''; } ?>" value="" name="biography" >
    </div>
    <div class="col-md-3 mb-3">
      <label class="" for="Title">Abstract Title</label>
      <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($abstract_record[0]->title)) {echo $abstract_record[0]->title;} else{ echo ''; } ?>" name="title" >
    </div>
    <div class="col-md-3 mb-3">
        <label for="abstract_url">Abstract</label>
        <br>        
        <input type="file" id="abstract_url" name="abstract_url" value="<?php if($update_record && isset($abstract_record[0]->abstract_url)) {echo $abstract_record[0]->abstract_url;} else{ echo ''; } ?>" class="">        
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($abstract_record[0]->rank)) {echo $abstract_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($abstracts_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Institute</th>
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
    foreach($abstracts_list as $abstract){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $abstract->title; ?></td>
      <td><?php echo $abstract->first_name; ?></td>
      <td><?php echo $abstract->last_name; ?></td>
      <td><?php echo $abstract->institute; ?></td>
      <td><?php echo $abstract->country_id; ?></td>
      <td><?php echo $abstract->abstract_url; ?></td>
      <td><?php echo $abstract->biography; ?></td>
      <td><?php echo $abstract->designation; ?></td>
      <td><?php echo $abstract->visible; ?></td>
      <td><?php echo $abstract->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_abstract">
            <input type="hidden" name="abstract_id"  value="<?php echo $abstract->abstract_id; ?>">         
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