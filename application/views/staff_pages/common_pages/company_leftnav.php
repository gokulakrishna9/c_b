<div class="container-fluid">
<div class="row">
  <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_about_company') ?>">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_set_current_company') ?>">Set Current Company <span class="sr-only">(current)</span></a>
      </li>
      <?php if($this->session->has_userdata('company_name')){ ?>
        <li class="nav-item">
          <a class="nav-link active" href="#">Current Company <?php echo $this->session->company_name; ?></a>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_carousel_images_company_site') ?>">Photographs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_visible_conferences') ?>">Visible Conferences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_company_payment_terms') ?>">Terms and Conditions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_users') ?>">User Creation</a>
        </li>
      <?php } ?>
      </ul>
    </nav>
  </div>
  </div>
