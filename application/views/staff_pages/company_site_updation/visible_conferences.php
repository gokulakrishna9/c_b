<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<div class='alert alert-success' role='alert'>
  <?php 
        if($this->session->has_userdata('conference_title')){
            echo 'Current Company set to '.$this->session->conference_title;
        }else{
            echo $page_name;
        }             
  ?>
</div>
<?php echo form_open_multipart('data_capture/cr_data'); ?>
  <div class="row">
    <div class="col-md-6 mb-3">
    <?php if($update_record){ ?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="conference_id"  value="<?php if($update_record && isset($conference_record[0]->conference_id)) {echo $conference_record[0]->conference_id; } else{ echo ''; } ?>">
    <?php } ?>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 mb-6">
        <input type="hidden" name="navigate" value="nav_visible_conferences">
        <label for="conference_image">Visible</label><br>
        <input type="radio" name="visible" value="YES" checked>Yes<br>
        <input type="radio" name="visible" value="NO">No<br>            
    </div>
    <div class="col-md-6 mb-6">
        <label for="rank">Conference Rank(To order on Company site)</label>
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($conference_record[0]->rank)) {echo $conference_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <br><br>
  <button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<?php if($conferences_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Conference URL</th>
      <th>Conference Title</th>
      <th>Conference Theme</th>
      <th>Conference Image</th>
      <th>Conference_description</th>
      <th>Venue</th>
      <th>Venue Image</th>
      <th>Venue Lattitude</th>
      <th>Venue Longitude</th>
      <th>Google Map Key</th>
      <th>Contact US</th>
      <th>Conference Brochure</th>
      <th>Abstract Template File</th>
      <th>Time Zone</th>
      <th>Visible</th>
      <th>Rank</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($conferences_list as $conference){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $conference->conference_url; ?></td>
      <td><?php echo $conference->conference_title; ?></td>
      <td><?php echo $conference->conference_theme; ?></td>
      <td><?php echo $conference->conference_image; ?></td>
      <td><?php echo $conference->conference_description; ?></td>
      <td><?php echo $conference->venue; ?></td>
      <td><a href="<?php echo base_url('assets/company_site_images/'.$conference->venue_image); ?>" target="_blank"><?php echo $conference->venue_image; ?></a></td>
      <td><?php echo $conference->venue_lattitude; ?></td>
      <td><?php echo $conference->venue_longitude; ?></td>
      <td><?php echo $conference->map_key; ?></td>
      <td><?php echo $conference->contact_us; ?></td>
      <td><a href="<?php echo base_url('assets/company_site_images/'.$conference->conference_brochure); ?>" target="_blank"><?php echo $conference->conference_brochure; ?></a></td>
      <td><a href="<?php echo base_url('assets/company_site_images/'.$conference->abstract_template); ?>" target="_blank"><?php echo $conference->abstract_template; ?></a></td>
      <td><?php echo $conference->zone_name; ?></td>
      <td><?php echo $conference->visible; ?></td>
      <td><?php echo $conference->rank; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_visible_conferences">
              <input type="hidden" name="conference_id"  value="<?php echo $conference->conference_id; ?>">         
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