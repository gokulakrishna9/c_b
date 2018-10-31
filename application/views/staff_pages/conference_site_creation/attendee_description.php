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
        <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($attendee_description_record[0]->title)) {echo $attendee_description_record[0]->title;} else{ echo ''; } ?>" name="title" >
    </div>
  <div class="col-md-8 mb-3">
      <input type="hidden" name="navigate" value="nav_add_attendee_description">
      <?php if($update_record){ ?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="attendee_description_id"  value="<?php if($update_record && isset($attendee_description_record[0]->attendee_description_id)) {echo $attendee_description_record[0]->attendee_description_id;} else{ echo ''; } ?>">
    <?php }else{ ?>
        <input type="hidden" name="submit" value="true">
    <?php } ?>
    <label for="attendee_description">Attendee Description</label>
    <input type="text" class="form-control" id="attendee_description" value="<?php if($update_record && isset($attendee_description_record[0]->attendee_description)) {echo $attendee_description_record[0]->attendee_description;} else{ echo ''; } ?>" name="attendee_description"  >
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
    <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($attendee_description_record[0]->rank)) {echo $attendee_description_record[0]->rank;} else{ echo ''; } ?>">
</div>
</div>
<button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<br>
<?php if($attendee_description_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Attendee Description</th>
      <th>Rank</th>
      <th>Visible</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($attendee_description_list as $description){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $description->title; ?></td>
      <td><?php echo $description->attendee_description; ?></td>
      <td><?php echo $description->rank; ?></td>
      <td><?php echo $description->visible; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_attendee_description">
              <input type="hidden" name="attendee_description_id"  value="<?php echo $description->attendee_description_id; ?>">         
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
