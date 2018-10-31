<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
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
  <div class="row">
    <div class="col-md-6 mb-3">
      <input type="hidden" name="navigate" value="nav_add_program_schedule">
<?php if($update_record){?>
      <input type="hidden" name="update_record" value="true">
      <input type="hidden" name="schedule_id"  value="<?php if($update_record && isset($program_schedule_record[0]->schedule_id)) {echo $program_schedule_record[0]->schedule_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <label for="day">Day</label>
      <input type="text" class="form-control" id="day" placeholder="Day" value="<?php if($update_record && isset($program_schedule_record[0]->day)) {echo $program_schedule_record[0]->day;} else{ echo ''; } ?>" name="day" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="session_description">Session Description</label>
      <input type="text" class="form-control" id="session_description" placeholder="Session Description" value="<?php if($update_record && isset($program_schedule_record[0]->session_description)) {echo $program_schedule_record[0]->session_description;} else{ echo ''; } ?>" name="session_description" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <label for="session_date">Date</label>
      <input type="date" class="form-control" id="session_date" placeholder="Session Date" value="<?php if($update_record && isset($program_schedule_record[0]->session_date)) {echo $program_schedule_record[0]->session_date;} else{ echo ''; } ?>" name="session_date" >
      <div class="invalid-feedback">
        Invalid Date
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="session_start">Session Start</label>
      <input type="time" class="form-control" id="session_end" placeholder="Session Start" value="<?php if($update_record && isset($program_schedule_record[0]->session_start)) {echo $program_schedule_record[0]->session_start;} else{ echo ''; } ?>" name="session_start" >
      <div class="invalid-feedback">
        Invalid Time
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="session_end">Session End</label>
      <input type="time" class="form-control" id="session_end" placeholder="Session End" value="<?php if($update_record && isset($program_schedule_record[0]->session_end)) {echo $program_schedule_record[0]->session_end;} else{ echo ''; } ?>" name="session_end" >
      <div class="invalid-feedback">
        Invalid Time
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
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($program_schedule_record[0]->rank)) {echo $program_schedule_record[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
  <button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<?php if($program_schedule_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Day</th>
      <th>Session Day</th>
      <th>Session Start</th>
      <th>Session End</th>
      <th>Session Description</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($program_schedule_list as $program){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $program->day; ?></td>
      <td><?php echo $program->session_date; ?></td>
      <td><?php echo $program->session_start; ?></td>
      <td><?php echo $program->session_end; ?></td>
      <td><?php echo $program->session_description; ?></td>
      <td><?php echo $program->visible; ?></td>
      <td><?php echo $program->rank; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_program_schedule">
              <input type="hidden" name="schedule_id"  value="<?php echo $program->schedule_id; ?>">         
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