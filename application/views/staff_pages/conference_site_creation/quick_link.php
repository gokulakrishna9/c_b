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
      <input type="text" class="form-control mb-2 mb-sm-0" id="title" value="<?php if($update_record && isset($quick_link_record[0]->title)) {echo $quick_link_record[0]->title;} else{ echo ''; } ?>" name="title" >
  </div>
  <div class="col-md-5 mb-3">
    <input type="hidden" name="navigate" value="nav_add_quick_link">
    <?php if($update_record){?>
        <input type="hidden" name="update_record" value="true">
        <input type="hidden" name="link_id"  value="<?php if($update_record && isset($quick_link_record[0]->link_id)) {echo $quick_link_record[0]->link_id;} else{ echo ''; } ?>">
    <?php }else{ ?>
        <input type="hidden" name="submit" value="true">
    <?php } ?>
    <label class="" for="link_description">Link Description</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="link_description"  name="link_description" value="<?php if($update_record && isset($quick_link_record[0]->link_description)) {echo $quick_link_record[0]->link_description;} else{ echo ''; } ?>">
  </div>
  <div class="col-md-5 mb-3">
    <label class="" for="link">Link</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
      <div class="input-group-addon">@</div>
      <input type="text" class="form-control" id="link"  name="link" value="<?php if($update_record && isset($quick_link_record[0]->link)) {echo $quick_link_record[0]->link;} else{ echo ''; } ?>">
    </div>
  </div>  
</div>
<div class="row">
  <div class="col-md-3 mb-3">
      <label for="conference_image">Visible</label>
      <input type="radio" name="visible" value="YES" checked>Yes<br>
      <input type="radio" name="visible" value="NO">No<br>            
  </div>
  <div class="col-md-3 mb-3">
      <label for="rank">Conference Rank(To order on Company site)</label>
      <input type="text" id="rank" class="" name="rank" value="<?php if($update_record && isset($quick_link_record[0]->rank)) {echo $quick_link_record[0]->rank;} else{ echo ''; } ?>">
  </div>  
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

<br>
<?php if($quick_link_list){ ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Link Description</th>
      <th>Link</th>      
      <th>Visible</th>
      <th>Rank</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sno = 1;
    
    foreach($quick_link_list as $link){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
      <td><?php echo $link->title; ?></td>
      <td><?php echo $link->link_description; ?></td>
      <td><?php echo $link->link; ?></td>      
      <td><?php echo $link->visible; ?></td>
      <td><?php echo $link->rank; ?></td>
      <td>
          <?php echo form_open('data_capture/cr_data'); ?>
              <input type="hidden" name="navigate" value="nav_add_quick_link">
              <input type="hidden" name="link_id"  value="<?php echo $link->link_id; ?>">         
              <input type="hidden" name="update"   value="true">
              <button type="submit" class="btn btn-primary">Update</button>
          <?php echo form_close(); ?>
      </td>
    </tr>
    <?php
          $sno++;
     }?>
  </tbody>
</table>
<?php } ?>


</main>