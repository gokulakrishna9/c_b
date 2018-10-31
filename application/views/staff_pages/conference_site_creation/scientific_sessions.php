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
      <input type="hidden" name="navigate" value="nav_add_scientific_sessions">
<?php if($update_record){?>
      <input type="hidden" name="update_record" value="true">
      <input type="hidden" name="session_id"  value="<?php if($update_record && isset($scientific_session_record[0]->session_id)) {echo $scientific_session_record[0]->session_id;} else{ echo ''; } ?>">
<?php }else{ ?>
      <input type="hidden" name="submit" value="true">
<?php } ?>
      <label for="title">Session Name</label>
      <input type="text" class="form-control" id="title"  value="<?php if($update_record && isset($scientific_session_record[0]->title)) {echo $scientific_session_record[0]->title;} else{ echo ''; } ?>" name="title" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="session_description">Session Description</label>
      <input type="text" class="form-control" id="session_description"  value="<?php if($update_record && isset($scientific_session_record[0]->session_description)) {echo $scientific_session_record[0]->session_description;} else{ echo ''; } ?>" name="session_description" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <label for="session_day">Session Day</label>
      <input type="date" class="form-control" id="session_date"  value="<?php if($update_record && isset($scientific_session_record[0]->session_date)) {echo $scientific_session_record[0]->session_date;} else{ echo ''; } ?>" name="session_date" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="start_time">Start Time</label>
      <input type="time" class="form-control" id="start_time"  value="<?php if($update_record && isset($scientific_session_record[0]->start_time)) {echo $scientific_session_record[0]->start_time;} else{ echo ''; } ?>" name="start_time" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="end_time">End Time</label>
      <input type="time" class="form-control" id="end_time"  value="<?php if($update_record && isset($scientific_session_record[0]->end_time)) {echo $scientific_session_record[0]->end_time;} else{ echo ''; } ?>" name="end_time" >
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="visible">Visible</label>
      <input type="checkbox" class="form-control" id="visible"  name="Visible" >
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
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
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($scientific_session_record[0]->rank)) {echo $scientific_session_record[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
  <button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<?php if($scientific_sessions_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Session Description</th>
      <th>Session Name</th>
      <th>Session Day</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($scientific_sessions_list as $session){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $session->session_description; ?></td>
      <td><?php echo $session->title; ?></td>
      <td><?php echo $session->session_date; ?></td>
      <td><?php echo $session->start_time; ?></td>
      <td><?php echo $session->end_time; ?></td>
      <td><?php echo $session->visible; ?></td>
      <td><?php echo $session->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_scientific_sessions">
            <input type="hidden" name="session_id"  value="<?php echo $session->session_id; ?>">         
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