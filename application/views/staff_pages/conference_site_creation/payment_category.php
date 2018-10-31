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
        <input type="hidden" name="payment_category_id"  value="<?php if($update_record && isset($payment_category_record[0]->payment_category_id)) {echo $payment_category_record[0]->payment_category_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_conference_payment_category">
      <label for="category_name">Category Name</label>
      <input type="text" class="form-control" id="category_name" value="<?php if($update_record && isset($payment_category_record[0]->category_name)) {echo $payment_category_record[0]->category_name;} else{ echo ''; } ?>"  value="" name="category_name" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="valid_till">Valid Till</label>
      <input type="date" class="form-control" id="valid_till" value="<?php if($update_record && isset($payment_category_record[0]->valid_till)) {echo $payment_category_record[0]->valid_till;} else{ echo ''; } ?>"  value="" name="valid_till" >
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($payment_category_record[0]->rank)) {echo $payment_category_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($payment_category_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Payment Category Name</th>
      <th>Valid Till</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($payment_category_list as $payment_category){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $payment_category->category_name; ?></td>
      <td><?php echo $payment_category->valid_till; ?></td>
      <td><?php echo $payment_category->visible; ?></td>
      <td><?php echo $payment_category->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_conference_payment_category">
            <input type="hidden" name="payment_category_id"  value="<?php echo $payment_category->payment_category_id; ?>">         
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