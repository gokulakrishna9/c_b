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
      <label class="" for="Title">Title</label>
      <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($feature_record[0]->title)) {echo $feature_record[0]->title;} else{ echo ''; } ?>" name="title" >
    </div>
    <div class="col-md-6 mb-3">
      <div class="col-auto">
        <input type="hidden" name="navigate" value="nav_add_special_features">
<?php if($update_record){?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="feature_id"  value="<?php if($update_record && isset($feature_record[0]->feature_id)) {echo $feature_record[0]->feature_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
        <label class="" for="Feature Description">Feature Description</label>
        <input type="text" class="form-control mb-2 mb-sm-0" id="feature_description" value="<?php if($update_record && isset($feature_record[0]->feature_description)) {echo $feature_record[0]->feature_description;} else{ echo ''; } ?>" name="feature_description" >
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-3">
        <label for="conference_image">Visible</label>
        <input type="radio" name="visible" value="YES" checked>Yes<br>
        <input type="radio" name="gender" value="NO">No<br>            
    </div>
    <div class="col-md-8 mb-3">
        <label for="rank">Conference Rank(To order on Company site)</label>
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($feature_record[0]->rank)) {echo $feature_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
<?php echo form_close(); ?>
<?php if($feature_description_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Feature Description</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($feature_description_list as $feature){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $feature->title; ?></td>
      <td><?php echo $feature->feature_description; ?></td>
      <td><?php echo $feature->visible; ?></td>
      <td><?php echo $feature->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_add_special_features">
            <input type="hidden" name="feature_id"  value="<?php echo $feature->feature_id; ?>">         
            <input type="hidden" name="update"   value="true">
            <button type="submit" class="btn btn-primary">update</button>
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