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
        <input type="hidden" name="package_id"  value="<?php if($update_record && isset($package_record[0]->package_id)) {echo $package_record[0]->package_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_conference_payment_package">
      <label for="package_name">Payment Package(Plan) Name</label>
      <input type="text" class="form-control" id="package_name" value="<?php if($update_record && isset($package_record[0]->package_name)) {echo $package_record[0]->package_name;} else{ echo ''; } ?>" value="" name="package_name" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="terms_and_conditions">Payment Package(Plan) Terms and Conditions<br>*-Separate each term with a tilde(~), so that it shows up line wise in Conference Site</label>
      <textarea name="terms_and_conditions" rows="10" cols="50"><?php if($update_record && isset($package_record[0]->terms_and_conditions)) {echo $package_record[0]->terms_and_conditions;} else{ echo 'Write Something here.'; } ?></textarea>
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($terms_and_conditions[0]->rank)) {echo $terms_and_conditions[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($package_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Payment Package Name</th>
      <th>Terms and Conditions</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($package_list as $payment_package){           
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $payment_package->package_name; ?></td>
      <td><?php echo $payment_package->terms_and_conditions; ?></td>
      <td><?php echo $payment_package->visible; ?></td>
      <td><?php echo $payment_package->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_conference_payment_package">
            <input type="hidden" name="package_id"  value="<?php echo $payment_package->package_id; ?>">         
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