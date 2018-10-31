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
<?php echo form_open_multipart('data_capture/cr_data''); ?>
  <div class="row">
    <div class="col-md-6 mb-3">
    <?php if($update_record){?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="conference_id"  value="<?php if($update_record && isset($conference_record[0]->conference_id)) {echo $conference_record[0]->conference_id;} else{ echo ''; } ?>">
    <?php }else{ ?>
        <input type="hidden" name="submit" value="true">
    <?php } ?>
      <label for="conference_url">Conference URL</label>
      <input type="text" class="form-control" id="conference_url" placeholder="" name="conference_url" value="<?php if($update_record && isset($conference_record[0]->conference_url)) {echo $conference_record[0]->conference_url;} else{ echo ''; } ?>" required>
      <input type="hidden" name="navigate" value="nav_add_conference_description">
    </div>
    <div class="col-md-6 mb-3">
      <label for="conference_title">Conference Title</label>
      <input type="text" class="form-control" id="conference_title" placeholder="" value="<?php if($update_record && isset($conference_record[0]->conference_title)) {echo $conference_record[0]->conference_title;} else{ echo ''; } ?>" name="conference_title" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="conference_theme">Conference Theme</label>
      <input type="text" class="form-control" id="conference_theme" placeholder="" value="<?php if($update_record && isset($conference_record[0]->conference_theme)) {echo $conference_record[0]->conference_theme;} else{ echo ''; } ?>" name="conference_theme" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="conference_description">Conference Description</label>
      <input type="text" class="form-control" id="conference_description" placeholder="" value="<?php if($update_record && isset($conference_record[0]->conference_description)) {echo $conference_record[0]->conference_description;} else{ echo ''; } ?>" name="conference_description" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="venue">Venue</label>
            <input type="text" class="form-control" id="venue" placeholder="" value="<?php if($update_record && isset($conference_record[0]->venue)) {echo $conference_record[0]->venue;} else{ echo ''; } ?>" name="venue" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <label for="Venue Lattitude">Venue Lattitude</label>
            <input type="text" class="form-control" id="venue_lattitude" placeholder="" value="<?php if($update_record && isset($conference_record[0]->venue_lattitude)) {echo $conference_record[0]->venue_lattitude;} else{ echo ''; } ?>" name="venue_lattitude" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <label for="venue_longitude">Venue Longitude</label>
            <input type="text" class="form-control" id="venue_longitude" placeholder="" value="<?php if($update_record && isset($conference_record[0]->venue_longitude)) {echo $conference_record[0]->venue_longitude;} else{ echo ''; } ?>" name="venue_longitude" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <label for="map_key">Google Maps Key</label>
            <input type="text" class="form-control" id="map_key" placeholder="" value="<?php if($update_record && isset($conference_record[0]->map_key)) {echo $conference_record[0]->map_key;} else{ echo ''; } ?>" name="map_key" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
        <label for="contact_us">Contact US</label>
        <input type="text" class="form-control" id="contact_us" placeholder="" value="<?php if($update_record && isset($conference_record[0]->contact_us)) {echo $conference_record[0]->contact_us;} else{ echo ''; } ?>" name="contact_us" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="contact_us">Time Zone</label>
        <select class='form-control' name='zone_name'>
        <?php foreach($zone as $zo){ ?>
            <option value='<?php echo $zo->zone_name; ?>' <?php if($update_record && isset($conference_record[0]->zone_name) && $conference_record[0]->zone_name == $zo->zone_name) {echo 'selected';} else{ echo ''; } ?>><?php echo $zo->zone_name; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
        <label for="conference_image">Conference Image</label>
        <input type="file" id="conference_image" name="conference_image" value="">
        <p><?php if($update_record && isset($conference_record[0]->conference_image)) {echo $conference_record[0]->conference_image;} else{ echo ''; } ?></p>           
    </div>
    <div class="col-md-3 mb-3">
        <label for="conference_brochure">Conference Brochure</label>
        <input type="file" id="conference_brochure" class="" name="conference_brochure">
        <p><?php if($update_record && isset($conference_record[0]->conference_brochure)) {echo $conference_record[0]->conference_brochure;} else{ echo ''; } ?></p>
    </div>
    <div class="col-md-3 mb-3">
        <label for="venue_image">Venue Image</label>
        <input type="file" id="venue_image" class="" name="venue_image">
        <p><?php if($update_record && isset($conference_record[0]->venue_image)) {echo $conference_record[0]->venue_image;} else{ echo ''; } ?></p>
    </div>
    <div class="col-md-3 mb-3">
        <label for="abstract_template">Abstract Template</label>
        <input type="file" id="abstract_template" class="" name="abstract_template">
        <p><?php if($update_record && isset($conference_record[0]->abstract_template)) {echo $conference_record[0]->abstract_template;} else{ echo ''; } ?></p>
    </div>  
  </div>
  <div class="row">
    <div class="col-md-6 mb-6">
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
              <input type="hidden" name="navigate" value="nav_add_conference_description">
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