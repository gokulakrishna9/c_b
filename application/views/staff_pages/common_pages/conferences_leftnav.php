<div class="container-fluid">
<div class="row">
  <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_conference_description') ?>">Add New Conference</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_set_current_conference') ?>">Set Current Conference</a>
      </li>
      <?php
          if($this->session->has_userdata('conference_title')){
       ?>
      <li class="list-group-item list-group-item-success">
        <a class="" href="#">Add <?php echo $this->session->conference_title; ?> Detail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_carousel_images_conference_site') ?>">Carousel Images</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_attendee_description') ?>">Attendee Description</a>
      </li>            
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_important_dates') ?>">Important Dates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_organizing_members') ?>">Organizing Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_speakers') ?>">Speakers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_sponcers') ?>">Sponcers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_exibitors') ?>">Exibitors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_program_schedule') ?>">Program Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_purpose_of_conference') ?>">Purpose of Conference</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_quick_link') ?>">Quick Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_scientific_sessions') ?>">Scientific Sessions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_special_features') ?>">Special Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_markets') ?>">Market Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_journal') ?>">Journals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_add_abstract') ?>">Abstract</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_payment_group_conference') ?>">Add Payment Group(Target Audiance)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_conference_payment_category') ?>">Add Payment Category(Date bound)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_conference_payment_package') ?>">Add Payment Package(Plan)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_capture/cr_data/nav_conference_payment_offer') ?>">Add Payment Offer(Amount)</a>
      </li>
      <?php } ?>      
    </ul>
  </nav>
</div>
</div>