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
      <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($important_date_record[0]->title)) {echo $important_date_record[0]->title;} else{ echo ''; } ?>" name="title" >
  </div>
  <div class="col-md-4 mb-3">
      <input type="hidden" name="navigate" value="nav_add_important_dates">
<?php if($update_record){?>
    <input type="hidden" name="update_record" value="true">
    <input type="hidden" name="date_id"  value="<?php if($update_record && isset($important_date_record[0]->date_id)) { echo $important_date_record[0]->date_id; } else{ echo ''; } ?>">
<?php }else{ ?>
    <input type="hidden" name="submit" value="true">
<?php } ?>
    <label for="date">Date</label>
    <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" id="date" value="<?php if($update_record && isset($important_date_record[0]->date)) {echo $important_date_record[0]->date;} else{ echo ''; } ?>"  name="date">
  </div>
  <div class="col-md-4 mb-3">
    <label for="description">Description</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="date" value="<?php if($update_record && isset($important_date_record[0]->description)) {echo $important_date_record[0]->description;} else{ echo ''; } ?>"  name="description">
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
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($important_date_record[0]->rank)) {echo $important_date_record[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
<div class="row">
  <div class="col-md-12 mb-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
<?php echo form_close(); ?>
<br>
<?php if($important_dates_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Date</th>
      <th>Description</th>
      <th>Rank</th>
      <th>Visible</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($important_dates_list as $date){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $date->title; ?></td>
      <td><?php echo $date->date; ?></td>
      <td><?php echo $date->description; ?></td>
      <td><?php echo $date->rank; ?></td>
      <td><?php echo $date->visible; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_important_dates">
            <input type="hidden" name="date_id"  value="<?php echo $date->date_id; ?>">         
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