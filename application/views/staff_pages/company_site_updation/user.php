<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<?php 
        if($this->session->has_userdata('company_title')){
            echo 'Current user set to '.$this->session->company_title;
        }else{
            echo $page_name;
        }             
  ?>
</div>
<?php echo form_open_multipart('data_capture/cr_data', 'class="email" id="myform"'); ?>
    <div class="form-row">
    <input type="hidden" name="navigate" value="nav_add_users">
<?php if($update_record){ ?>
	<input type="hidden" name="update_record" value="true">
	<input type="hidden" name="user_id"  value="<?php if(isset($user_record[0]->user_id)) {echo $user_record[0]->user_id;} else{ echo ''; } ?>">
<?php }else{ ?>
	<input type="hidden" name="submit" value="true">
<?php } ?>
        <div class="form-group col-md-6">
            <label for="user_name">Email</label>
            <input type="email" class="form-control" name="user_name" id="user_name" value="<?php if(isset($user_record[0]->user_name)) {echo $user_record[0]->user_name;} else{ echo ''; } ?>" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="check_password">Confirm Password</label>
            <input type="password" class="form-control" id="check_password" value="" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="first_name">User First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" value="<?php if(isset($user_record[0]->first_name)) {echo $user_record[0]->first_name;} else{ echo ''; } ?>" placeholder="">
    </div>
    <div class="form-group">
        <label for="last_name">User Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" value="<?php if(isset($user_record[0]->last_name)) {echo $user_record[0]->last_name;} else{ echo ''; } ?>" placeholder="">
    </div>
    <div class="form-group">
        <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" name="enable" type="checkbox" checked>Enable
        </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</main>
<br>
<?php if($users_list){ ?>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>User Name</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1; 
    foreach($users_list as $user){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $user->password; ?></td>
      <td><?php echo $user->first_name; ?></td>
      <td><?php echo $user->last_name; ?></td>
      <td><?php echo $user->enable; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_users">
              <input type="hidden" name="user_id"  value="<?php echo $user->user_id; ?>">         
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