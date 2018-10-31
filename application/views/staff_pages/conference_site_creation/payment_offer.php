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
        <input type="hidden" name="payment_offer_id"  value="<?php if($update_record && isset($payment_offer_record[0]->payment_offer_id)) {echo $payment_offer_record[0]->payment_offer_id;} else{ echo ''; } ?>">
<?php }else{ ?>
        <input type="hidden" name="submit" value="true">
<?php } ?>
      <input type="hidden" name="navigate" value="nav_conference_payment_offer">
      <label for="category_name">Payment Category</label>
      <select class='form-control' name='category_name'>
        <?php foreach($payment_category_list as $category){ ?>
            <option value='<?php echo $category->category_name; ?>'><?php echo $category->category_name; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="group_name">Payment Group</label>
      <select class='form-control' name='group_name'>
        <?php foreach($payment_group_conference_list as $payment_group){ ?>
            <option value='<?php echo $payment_group->group_name; ?>'><?php echo $payment_group->group_name; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="package_name">Payment Package</label>
      <select class='form-control' name='package_name'>
        <?php foreach($package_list as $payment_package){ ?>
            <option value='<?php echo $payment_package->package_name; ?>'><?php echo $payment_package->package_name; ?></option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="amount">Amount(in Dollars($))</label>
      <input type="text" name="amount"  value="<?php if($update_record && isset($payment_offer_record[0]->amount)) {echo $payment_offer_record[0]->amount;} else{ echo ''; } ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="offer_description">Offer Description</label>
      <input type="text" name="offer_description"  value="<?php if($update_record && isset($payment_offer_record[0]->offer_description)) {echo $payment_offer_record[0]->offer_description;} else{ echo ''; } ?>">
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
        <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($payment_offer_record[0]->rank)) {echo $payment_offer_record[0]->rank;} else{ echo ''; } ?>">
    </div>  
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php echo form_close(); ?>
<br>
<?php if($payment_offer_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Payment Group Name</th>
      <th>Payment Package Name</th>
      <th>Payment Category Name</th>
      <th>Amount</th>
      <th>Offer Description</th>
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($payment_offer_list as $payment_offer){           
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $payment_offer->group_name; ?></td>
      <td><?php echo $payment_offer->package_name; ?></td>
      <td><?php echo $payment_offer->category_name; ?></td>
      <td><?php echo $payment_offer->amount; ?></td>
      <td><?php echo $payment_offer->offer_description; ?></td>
      <td><?php echo $payment_offer->visible; ?></td>
      <td><?php echo $payment_offer->rank; ?></td>
      <td>
        <?php echo form_open('data_capture/cr_data'); ?>
            <input type="hidden" name="navigate" value="nav_conference_payment_offer">
            <input type="hidden" name="payment_offer_id"  value="<?php echo $payment_offer->payment_offer_id; ?>">         
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