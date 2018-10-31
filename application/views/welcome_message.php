<?php 
 function div_constructor($elements){	 
	 $return_string = "";
	 $k = 1;
	 foreach($elements as $element){
		 $div_string = "";
		 if(!$element || $element == null){
			 continue;
	 	 }
		 $count = 1;
		 $j = 1;
		 for($i = 0; $i < sizeof($element[0]); $i++){ 
			if($element[0][$i] != null && property_exists($element[0][$i], $element[1])){
				if($count == 1){
					$div_string.="<div class='row'>";
				}
				$append = $element[0][$i]->$element[1];
				$div_string.="<div style='background-color:#FEFFE6 !important;  border-left: 6px solid #B6F5F8;' class='m-3 col'>"
				."<p><h5>&nbsp;".$append."</h5></p></div>"."\r\n";
				if($count == 4){ 
					$div_string.="</div><!-- Row end I-->"."\r\n";
					$count = 0;
				}else if($j == sizeof($element[0])){
					for($f=1; $f <= 4-$count; $f++){
						$div_string.="<div class='m-3 col'>&nbsp;</div><!-- Empty Div -->";
					}
					$div_string.="</div><!-- Row end J-->"."\r\n";
				}
				$j++;				 
				$count++;
			}			
		}
		$active = '';
		if($k == 1){
			$active = ' show active';
		}
		$k++;
		$return_string.="<div style='' class='tab-pane fade".$active."' id='pills-".$element[2]."' role='tabpanel' aria-labelledby='pills-".$element[2]."-tab'>".$div_string." </div><!--$element[2]-->"."\r\n";
	 }
	 return $return_string;
 }
 $elements = array(
	 array($scientific_sessions_list, 'session_name', 'scientific-sessions'),
	 array($attendee_description_list, 'attendee_description', 'why-to-attend'),
	 array($feature_description_list, 'feature_description', 'special-features'),
	 array($attendee_description_list, 'attendee_description', 'target-audience')
	 // conference_purpose_list
 );
	$market_research_divs = "";
	$pills_content = div_constructor($elements);
/*
function payment_offers(){
	//  payment_group --> payment_category(date) --> payment_plane --> payment_offer
	// Offer by group and category
	$offer_col_string = array();
	foreach($payment_group as $group){
		$offer_col_string["$group->group_name"] = array();
		foreach($payment_package as $plan) {
			if(!($group->group_name == $plan->group_name)){
				continue;
			}
			$offer_col_string["$group->group_name"]["$plan->plan_name"] = array();
			foreach($payment_offer as $offer){
				if($offer->group_name == $group->group_name && $offer->plan_name == $plan->group_name){
					$offer_col_string["$group->group_name"]["$plan->plan_name"]["$offer->category_name"] = "<td>".$offer->amount."</td>";
				}
			}
		}
	}
	// Overall div
	$payment_div_string .= "<div class='card'>\r\n<h4 class='card-header'>Featured</h4>\r\n<div class='card-body'>\r\n";			
	// Group div
	$payment_div_string .= "<div class='row'>\r\n";
	foreach($payment_group as $group){					
		// Header String
		$payment_div_string.="<table class='table table-hover'>\r\n"."<thead>\r\n<tr>\r\n<th scope="col">Select</th>\r\n";
		foreach($payment_category as $category){
			if($category->group_name == $payment_group->group_name){
				$payment_div_string .= "<th scope='col'>".$category->group_name."</th>\r\n";	// Category group name
			}
		}
		$payment_div_string .= "</tr></thead>\r\n";
		// End of Header String
		// Table body string --payment_group --> payment_plan --> payment_category
		foreach($payment_category as $category){
			$row .= "<tr>\r\n"
			foreach($payment_package as $plan){					
				if(array_key_exists($group->group_name, $offer_col_string) && array_key_exists($plan->plan_name, $offer_col_string["$group->group_name"]) && array_key_exists($category->category_name, $offer_col_string["$group->group_name"]["$plan->plan_name"])){
					$row .= "<td>".$offer_col_string["$group->group_name"]["$plan->plan_name"]["$category->category_name"]."</td>\r\n";
				}					
			}
			$row .= "</tr>\r\n"
		}
		$payment_div_string .= $row."</table></div>\r\n</div>\r\n</div>\r\n";	
	}
	// End of group div
	$payment_div_string .= "</div>\r\n";
	// End of Overall div
	$payment_div_string .= "</div>\r\n</div>\r\n";
	return $payment_div_string;
} */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $conference_record[0]->conference_title; ?></title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/starter-template.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/base.css'); ?>" rel="stylesheet">
  </head>

  <body>	
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Logo</a> <!-- Not done -->
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Purpose</a> <!-- Done -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Feature</a> <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Organizing Members</a>  <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Speakers</a>  <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Sponcers</a>   <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Exibitors</a>   <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Abstract Submission</a>   <!-- not Done not tested -->
				</li>			
				<li class="nav-item active">
					<a class="nav-link" href="#">Program Schedule</a>   <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Scientific Sessions</a>   <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Venue</a>  <!-- not Done not tested -->
				</li>				
			</ul>
      </div>
    </nav>
	<br>
	<div class="container-fluid">
	
	</div>
	<div class = "container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$conference_images_list[0]->image_url); ?>" alt="" class="img-responsive">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$conference_images_list[1]->image_url); ?>" alt="" class="img-responsive">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$conference_images_list[2]->image_url); ?>" alt="" class="img-responsive">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>		
	</div>
	<br><br>
    <div class="container-fluid">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-3"><?php echo $conference_record[0]->conference_title; ?></h1>
				<p class="lead"><?php echo $conference_record[0]->conference_theme; ?></p>
				<hr class="my-4">
  				<p><?php echo $conference_record[0]->conference_description; ?></p>
			</div>
		</div>
	</div><!-- /.container -->
	<br>
	<div class="container-fluid">		
		<br><br>
			<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
			<!--	<li class="nav-item">
					<h3><a class="nav-link active" id="pills-scientific-sessions-tab" data-toggle="pill" href="#pills-scientific-sessions" role="tab" aria-controls="pills-scientific-sessions" aria-selected="true"><svg-icon><src href="sprite.svg#si-glyph-light-bulb" /></svg-icon>Conference Purpose</a></h3>
				</li> -->
				<li class="nav-item">
					<h3><a class="nav-link active" id="pills-scientific-sessions-tab" data-toggle="pill" href="#pills-scientific-sessions" role="tab" aria-controls="pills-scientific-sessions" aria-selected="true"><svg-icon><src href="sprite.svg#si-glyph-light-bulb" /></svg-icon>Scientific Sessions</a></h3>
				</li>
				<li class="nav-item">
					<h3><a class="nav-link" id="pills-why-to-attend-tab" data-toggle="pill" href="#pills-why-to-attend" role="tab" aria-controls="pills-why-to-attend" aria-selected="false"><svg-icon><src href="sprite.svg#si-glyph-document-edit" /></svg-icon>Why to Attend</a></h3>
				</li>
				<li class="nav-item">
					<h3><a class="nav-link" id="pills-target-audience-tab" data-toggle="pill" href="#pills-target-audience" role="tab" aria-controls="pills-target-audience" aria-selected="false"><svg-icon><src href="sprite.svg#si-glyph-airplane" /></svg-icon>Target Audience</a></h3>
				</li>
				<li class="nav-item">
					<h3><a class="nav-link" id="pills-market-research-tab" data-toggle="pill" href="#pills-market-research" role="tab" aria-controls="pills-market-research" aria-selected="false"><svg-icon><src href="sprite.svg#si-glyph-column-increase" /></svg-icon>Market Research</a></h3>
				</li>
				<li class="nav-item">
					<h3><a class="nav-link" id="pills-special-features-tab" data-toggle="pill" href="#pills-special-features" role="tab" aria-controls="pills-special-features" aria-selected="false"><svg-icon><src href="sprite.svg#si-glyph-column-increase" /></svg-icon>Special Featues</a></h3>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<?php echo $pills_content; ?>					
			</div> <!-- Pills content end -->
	<div><!-- /. container-fluid -->
	<br><br>
<?php if($important_dates_list){ ?>
<br>
<div class="container-fluid">
	<div class="alert alert-primary" role="alert">
			<h3>Important Dates</h3>
	</div>
</div>
<div class="container-fluid">
	<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Day</th>
			<th>Date</th>
			<th>Description</th>
			</tr>
  		</thead>
  			<tbody>
			<?php 
				$sno = 1; 
				foreach($important_dates_list as $day){
				?>
				<tr>
					<th scope="row"><?php echo $sno; ?></th>
					<td><?php echo $day->title; ?></td>
					<td><?php echo $day->date; ?></td>
					<td><?php echo $day->description; ?></td>
				</tr>
				<?php  $sno++; } ?>
  			</tbody>
		</table>	
	</div>
<?php } ?>
<br><br>
<?php if($conference_purpose_list){ ?>
<br>
<div class="container-fluid">
	<div class="alert alert-primary" role="alert">
		<h3>Purpose of Conference</h3>
	</div>
</div>
<div class="container-fluid">
	<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Purpose</th>
			<th>Description</th>
			</tr>
  		</thead>
  			<tbody>
			<?php 
				$sno = 1; 
				foreach($conference_purpose_list as $purpose){
				?>
				<tr>
					<th scope="row"><?php echo $sno; ?></th>
					<td><?php echo $purpose->title; ?></td>
					<td><?php echo $purpose->purpose_description; ?></td>
				</tr>
				<?php  $sno++; } ?>
  			</tbody>
		</table>	
	</div>
<?php } ?>
<br><br>
<div class="container-fluid">
<div class="card border-info mb-3">
  <div class="card-header text-white bg-success">
  	<h4>Register For Conference</h4>
  </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Please fill out the required information.</h5>
	<br>
    <form>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Title</label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			</div>
			<div class="form-group col-md-4">
				<label for="inputPassword4">First Name</label>
				<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
			</div>
			<div class="form-group col-md-4">
				<label for="inputPassword4">Last Name</label>
				<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputAddress">Company/University Name</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress">Email</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			</div>
		</div>
		<div class="form-group">
			<label for="inputAddress">Address Line 1</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		</div>
		<div class="form-group">
			<label for="inputAddress2">Address Line 2</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputCity">City</label>
				<input type="text" class="form-control" id="inputCity">
			</div>
			<div class="form-group col-md-4">
				<label for="inputState">State</label>
				<input type="text" class="form-control" id="inputCity">
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Zip</label>
				<input type="text" class="form-control" id="inputZip">
			</div>
		</div>
		<div class="form-group">
			<label for="inputAddress2">Country</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputAddress2">Abstract Category</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress2">Title of the speech</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputAddress2">Subscribe to mailing list</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
			<div class="form-group col-md-9">
				<label for="inputAddress2">Select Payment Method</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
		</div>
		<div class="form-row">
			<?php // echo payment_offers(); ?>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				&nbsp;
			</div>
			<div class="form-group col-md-4 center-block">
				<label class="control-label">Captcha</label><br>
				<?php echo $image; ?>
				<br>
				<label class="control-label">Enter image text:</label>
				<input type="text" name="captcha" class="form-control" placeholder="Captcha Text" required>
				<br>
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
			<div class="form-group col-md-4">
				&nbsp;
			</div>
		</div>
	</form>
  </div>
</div>
<br><br>
<?php if($organizing_member_list){ ?>
<div class="container-fluid">
		<div class="alert alert-primary" role="alert">
  			<h3>Organizing Members</h3>
		</div>
	</div>
	<div class="container-fluid">
	<?php 
	$count = 1;
	for($i = 0; $i < sizeof($organizing_member_list); $i++){				
		if($count == 1){
		?>
		<div class="row">
		<?php } ?>		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="<?php echo base_url('assets/images/'.$organizing_member_list[$i]->photo_url); ?>" 
						alt="<?php echo $organizing_member_list[$i]->member_first_name.' '.$organizing_member_list[$i]->member_last_name,' Photograph'; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $organizing_member_list[$i]->member_first_name.' '.$organizing_member_list[$i]->member_last_name; ?></h4>
						<p class="card-text"><?php echo $organizing_member_list[$i]->designation.', '.$organizing_member_list[$i]->institute; ?></p>
						<p class="card-text"><small class="text-muted"><?php echo $organizing_member_list[$i]->biography; ?></small></p>
					</div>
				</div>
			</div>
		<?php if($count == 4  || $count == sizeof($organizing_member_list)){ ?>
		</div> <br>
		<?php 
			$count = 0;
		} ?>
	<?php
		$count++;
	} ?>
		<hr class="my-3">
</div>
<?php } ?>
<br><br>
<?php if($speaker_list){ ?>
<div class="container-fluid">
		<div class="alert alert-primary" role="alert">
  			<h3>Speakers</h3>
		</div>
	</div>
	<div class="container-fluid">
	<?php 
	$count = 1;
	for($i = 0; $i < sizeof($speaker_list); $i++){				
		if($count == 1){
		?>
		<div class="row">
		<?php } ?>		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="<?php echo base_url('assets/images/'.$speaker_list[$i]->photo_url); ?>" 
						alt="<?php echo $speaker_list[$i]->speaker_first_name.' '.$speaker_list[$i]->speaker_last_name,' Photograph'; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $speaker_list[$i]->speaker_first_name.' '.$speaker_list[$i]->speaker_last_name; ?></h4>
						<p class="card-text"><?php echo $speaker_list[$i]->designation.', '.$speaker_list[$i]->institute; ?></p>
						<p class="card-text"><small class="text-muted"><?php echo $speaker_list[$i]->biography; ?></small></p>
					</div>
				</div>
			</div>
		<?php if($count == 4  || $count == sizeof($speaker_list)){ ?>
		</div> <br>
		<?php 
			$count = 0;
		} ?>
	<?php
		$count++;
	} ?>
		<hr class="my-3">
</div>
<?php } ?>
<br><br>
<?php if($program_schedule_list){ ?>
	<br>
<div class="container-fluid">
	<div class="alert alert-primary" role="alert">
			<h3>Program Schedule</h3>
	</div>
</div>
<div class="container-fluid">
		<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Day</th>
			<th>Session Day</th>
			<th>Session Start</th>
			<th>Session End</th>
			<th>Session Description</th>
			</tr>
  		</thead>
  			<tbody>
    				<?php 
							 $sno = 1; 
    					 foreach($program_schedule_list as $program){
						?>
						<tr>
								<th scope="row"><?php echo $sno; ?></th>
								<td><?php echo $program->day; ?></td>
								<td><?php echo $program->session_date; ?></td>
								<td><?php echo $program->session_start; ?></td>
								<td><?php echo $program->session_end; ?></td>
								<td><?php echo $program->session_description; ?></td>
						</tr>
						<?php  $sno++; } ?>
  			</tbody>
		</table>	
	</div>
<?php } ?>

<?php if($scientific_sessions_list){ ?>
	<br>
<div class="container-fluid">
		<div class="alert alert-primary" role="alert">
  			<h3>Scientific Sessions</h3>
		</div>
</div>
<div class="container-fluid">
		<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Title</th>
			<th>Session Day</th>
			<th>Session Start</th>
			<th>Session End</th>
			<th>Session Description</th>
			</tr>
  		</thead>
  			<tbody>
    <?php 
    $sno = 1; 
    foreach($scientific_sessions_list as $session){             
    ?>
    <tr>
      <th scope="row"><?php echo $sno; ?></th>
	  <td><?php echo $session->session_name; ?></td>      
      <td><?php echo $session->session_date; ?></td>
      <td><?php echo $session->start_time; ?></td>
      <td><?php echo $session->end_time; ?></td>
	  <td><?php echo $session->session_description; ?></td>
    </tr>
    <?php
          $sno++;
     } ?>
  </tbody>
		</table>	
</div>
<?php } ?>
<br><br>
<?php if($quick_link_list){ ?>
<br>
<div class="container-fluid">
	<div class="alert alert-primary" role="alert">
			<h3>Quick Links</h3>
	</div>
</div>
<div class="container-fluid">
	<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Title</th>
			<th>Description</th>
			<th>Link</th>
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
				</tr>
				<?php  $sno++; } ?>
  			</tbody>
		</table>	
	</div>
<?php } ?>		   
<br><br>
<div class="container-fluid">
	<div class="card border-info mb-3">
		<div id="map">
							
		</div>
	</div>
</div>
<br><br>	
<br><br>
	
<?php if($journals_list){ ?>
<br>
<div class="container-fluid">
	<div class="alert alert-primary" role="alert">
			<h3>Journals</h3>
	</div>
</div>
<div class="container-fluid">
	<table class="table table-striped info-table">
  		<thead>
			<tr>
			<th>#</th>
			<th>Title</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Institute</th>
			<th>Biography</th>
			<th>Link</th>
			</tr>
  		</thead>
  			<tbody>
			<?php 
				$sno = 1; 
				foreach($journals_list as $journal){
				?>
				<tr>
					<th scope="row"><?php echo $sno; ?></th>
					<td><?php echo $journal->title; ?></td>
					<td><?php echo $journal->first_name."".$journal->last_name; ?></td>
					<td><?php echo $journal->designation; ?></td>
					<td><?php echo $journal->institute; ?></td>
					<td><?php echo $journal->biography; ?></td>
					<td><?php echo $journal->journal_url; ?></td>
				</tr>
				<?php  $sno++; } ?>
  			</tbody>
		</table>	
	</div>
<?php } ?>

<?php if($sponcer_list){ ?>
<div class="container-fluid">
		<div class="alert alert-primary" role="alert">
  			<h3>Sponcers</h3>
		</div>
	</div>
	<div class="container-fluid">
	<?php 
	$count = 1;
	for($i = 0; $i < sizeof($sponcer_list); $i++){				
		if($count == 1){
		?>
		<div class="row">
		<?php } ?>		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="<?php echo base_url('assets/images/'.$sponcer_list[$i]->photo_url); ?>" 
						alt="<?php echo $sponcer_list[$i]->sponcer_first_name.' '.$sponcer_list[$i]->sponcer_last_name,' Photograph'; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $sponcer_list[$i]->sponcer_first_name.' '.$sponcer_list[$i]->sponcer_last_name; ?></h4>
						<p class="card-text"><?php echo $sponcer_list[$i]->designation.', '.$sponcer_list[$i]->institute; ?></p>
						<p class="card-text"><small class="text-muted"><?php echo $sponcer_list[$i]->biography; ?></small></p>
					</div>
				</div>
			</div>
		<?php if($count == 4  || $count == sizeof($sponcer_list)){ ?>
		</div> <br>
		<?php 
			$count = 0;
		} ?>
	<?php
		$count++;
	} ?>
		<hr class="my-3">
</div>
<?php } ?>
<br><br>
<?php if($exibitor_list){ ?>
<div class="container-fluid">
		<div class="alert alert-primary" role="alert">
  			<h3>Exibitors</h3>
		</div>
	</div>
	<div class="container-fluid">
	<?php 
	$count = 1;
	for($i = 0; $i < sizeof($exibitor_list); $i++){				
		if($count == 1){
		?>
		<div class="row">
		<?php } ?>		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="<?php echo base_url('assets/images/'.$exibitor_list[$i]->photo_url); ?>" 
						alt="<?php echo $exibitor_list[$i]->exibitor_first_name.' '.$exibitor_list[$i]->exibitor_last_name,' Photograph'; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $exibitor_list[$i]->exibitor_first_name.' '.$exibitor_list[$i]->exibitor_last_name; ?></h4>
						<p class="card-text"><?php echo $exibitor_list[$i]->designation.', '.$exibitor_list[$i]->company; ?></p>
						<p class="card-text"><small class="text-muted"><?php echo $exibitor_list[$i]->biography; ?></small></p>
					</div>
				</div>
			</div>
		<?php if($count == 4  || $count == sizeof($exibitor_list)){ ?>
		</div> <br>
		<?php 
			$count = 0;
		} ?>
	<?php
		$count++;
	} ?>
		<hr class="my-3">
</div>
<?php } ?>

</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<?php if(isset($conference_record[0]->venue_lattitude) && isset($conference_record[0]->venue_longitude) && isset($conference_record[0]->map_key)){ ?>
	<script>
	  $('.carousel').carousel();
	  $('#myTab a').on('click', function (e) {
			e.preventDefault();
			$(this).tab('show');
	  });
      var map;
      function initMap() {
		  console.log("In initMap");
        var venue = {lat: <?php echo $conference_record[0]->venue_lattitude; ?>, lng: <?php echo $conference_record[0]->venue_longitude; ?>};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $conference_record[0]->venue_lattitude; ?>, lng: <?php echo $conference_record[0]->venue_longitude; ?>},
          zoom: 14
        });
        // 15.9129, 79.7400
        contentString = "<?php if(isset($conference_record[0]->venue)) echo $conference_record[0]->venue; else echo ''; ?>";		// Set the address of the hotel
        
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
		console.log("Setup info window");
   //     var image = "<?php echo base_url() ?>assets/images/icons/bloodbank_marker.png";
        var marker = new google.maps.Marker({
            position: venue,
            map: map,
            title: 'Venue Address'
        }); 
		console.log("Set up mouse over event");      
        marker.addListener('mouseover', function() {
            infowindow.open(map, marker);
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $conference_record[0]->map_key; ?>&callback=initMap" async defer></script>
	<?php } ?>
  </body>
</html>
