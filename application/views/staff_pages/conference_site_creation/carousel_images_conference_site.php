<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<div class='alert alert-success' role='alert'>
<?php
  if($this->session->has_userdata('conference_title')){
      echo '</h4>'.$page_name.'</h4>: '.'Current Conference set to '.$this->session->conference_title;
  }
?>
</div>
<?php echo form_open_multipart('data_capture/cr_data', 'class="" id="myform"'); ?>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title"  value="<?php if($update_record && isset($conference_image_record[0]->title)) {echo $conference_image_record[0]->title;} else{ echo ''; } ?>" name="title" >
  </div>
    <div class="form-group col-md-3">
    <input type="hidden" name="navigate" value="nav_carousel_images_conference_site">
<?php if($update_record){ ?>
	<input type="hidden" name="update_record" value="true">
	<input type="hidden" name="image_id"  value="<?php if(isset($conference_image_record[0]->image_id)) {echo $conference_image_record[0]->image_id;} else{ echo ''; } ?>">
<?php }else{ ?>
	<input type="hidden" name="submit" value="true">
<?php } ?>
        <label class="">Image File</label>
        <input type="file" id="image_url" name="image_url" value="<?php if(isset($conference_image_record[0]->image_url)) {echo $conference_image_record[0]->image_url;} else{ echo ''; } ?>" class="">        
    </div>
    <div class="form-group col-md-6">
      <label for="paragraph" class="col-form-label">Paragraph</label>
      <input type="text" class="form-control" id="paragraph" name="paragraph" value="<?php if(isset($conference_image_record[0]->paragraph)) {echo $conference_image_record[0]->paragraph;} else{ echo ''; } ?>" ="">
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($conference_image_record[0]->rank)) {echo $conference_image_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php echo form_close(); ?>

<br>
  <?php if($conference_images_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Image URL</th>
      <th>Paragraph</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($conference_images_list as $image){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $image->title; ?></td>
      <td><?php echo $image->image_url; ?></td>
      <td><?php echo $image->paragraph; ?></td>
      <td><?php echo $image->visible; ?></td>
      <td><?php echo $image->rank; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate"  value="nav_carousel_images_conference_site">
              <input type="hidden" name="image_id"  value="<?php echo $image->image_id; ?>">         
              <input type="hidden" name="update"    value="true">
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