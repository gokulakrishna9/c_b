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
    <div class="col-md-4 mb-3">
        <label class="" for="Title">Title</label>
        <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($conference_puropse_record[0]->title)) {echo $conference_puropse_record[0]->title;} else{ echo ''; } ?>" name="title" >
    </div>
    <div class="col-md-8 mb-3">
      <input type="hidden" name="navigate" value="nav_add_purpose_of_conference">
<?php if($update_record){?>
      <input type="hidden" name="update_record" value="true">
      <input type="hidden" name="purpose_id"  value="<?php if($update_record && isset($conference_puropse_record[0]->purpose_id)) {echo $conference_puropse_record[0]->purpose_id;} else{ echo ''; } ?>">
<?php }else{ ?>
      <input type="hidden" name="submit" value="true">
<?php } ?>
      <label for="purpose_description">Purpose Description</label>
      <input type="text" class="form-control" id="purpose_description" name="purpose_description"  value="<?php if($update_record && isset($conference_puropse_record[0]->purpose_description)) {echo $conference_puropse_record[0]->purpose_description;} else{ echo ''; } ?>" >
    </div>    
  </div>
<div class="row">
  <div class="col-md-3 mb-3">
      <label for="conference_image">Visible</label><br>
      <input type="radio" name="visible" value="YES" checked>Yes<br>
      <input type="radio" name="visible" value="NO">No<br>            
  </div>
  <div class="col-md-3 mb-3">
      <label for="rank">Rank</label>
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($conference_puropse_record[0]->rank)) {echo $conference_puropse_record[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
  <button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<?php if($conference_purpose_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Purpose Description</th>
      <th>Purpose Rank</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($conference_purpose_list as $purpose){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $purpose->title; ?></td>
      <td><?php echo $purpose->purpose_description; ?></td>
      <td><?php echo $purpose->visible; ?></td>
      <td><?php echo $purpose->purpose_rank; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_purpose_of_conference">
              <input type="hidden" name="purpose_id"  value="<?php echo $purpose->purpose_id; ?>">         
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