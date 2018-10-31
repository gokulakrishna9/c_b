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
        <input type="hidden" name="payment_group_id"  value="<?php if($update_record && isset($payment_group_conference_list[0]->payment_group_id)) {echo $payment_group_conference_list[0]->payment_group_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_payment_group_conference">
      <label for="group_name">Payment Group</label>
      <input type="text" class="form-control" id="group_name" value="<?php if($update_record && isset($payment_group_conference_list[0]->group_name)) {echo $payment_group_conference_list[0]->group_name;} else{ echo ''; } ?>"  value="" name="group_name" >
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
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($payment_group_conference_list[0]->rank)) {echo $payment_group_conference_list[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($payment_group_conference_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Payment Group Name</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($payment_group_conference_list as $group){           
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $group->group_name; ?></td>
      <td><?php echo $group->visible; ?></td>
      <td><?php echo $group->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_payment_group_conference">
            <input type="hidden" name="payment_group_id"  value="<?php echo $group->payment_group_id; ?>">         
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