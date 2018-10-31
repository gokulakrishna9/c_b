<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $about_company_record[0]->company_name; ?></title>

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
					<a class="nav-link" href="#">About US</a> <!-- Done -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Conferences</a> <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Journals</a>  <!-- Done, to be styled -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Speakers</a>  <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Membership</a>   <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">FAQ</a>   <!-- not Done not tested -->
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Contact</a>   <!-- not Done not tested -->
				</li>				
			</ul>
      </div>
    </nav>
	<br>

	<div class = "container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$company_images_list[0]->image_url); ?>" alt="" class="img-responsive">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$company_images_list[1]->image_url); ?>" alt="" class="img-responsive">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo base_url('assets/images/'.$company_images_list[2]->image_url); ?>" alt="" class="img-responsive">
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
				<h1 class="display-3"><?php echo $about_company_record[0]->company_name; ?></h1>
				<p class="lead"><?php echo $about_company_record[0]->company_header; ?></p>
				<hr class="my-4">
  				<p><?php echo $about_company_record[0]->about_company; ?></p>
			</div>
		</div>
	</div><!-- /.container -->
	<br><br>
	<!-- Conferences -->
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

</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<?php if(isset($about_company_record[0]->company_lattitude) && isset($about_company_record[0]->company_longitude) && isset($about_company_record[0]->map_key)){ ?>
	<script>
	  $('.carousel').carousel();
	  $('#myTab a').on('click', function (e) {
			e.preventDefault();
			$(this).tab('show');
	  });
      var map;
      function initMap() {
		  console.log("In initMap");
        var company_address = {lat: <?php echo $about_company_record[0]->company_lattitude; ?>, lng: <?php echo $about_company_record[0]->company_longitude; ?>};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $about_company_record[0]->company_lattitude; ?>, lng: <?php echo $about_company_record[0]->company_longitude; ?>},
          zoom: 14
        });
        // 15.9129, 79.7400
        contentString = "<?php if(isset($about_company_record[0]->company_address)) echo $about_company_record[0]->company_address; else echo ''; ?>";		// Set the address of the hotel
        
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
		console.log("Setup info window");
   //     var image = "<?php echo base_url() ?>assets/images/icons/bloodbank_marker.png";
        var marker = new google.maps.Marker({
            position: company_address,
            map: map,
            title: 'company_address Address'
        }); 
		console.log("Set up mouse over event");      
        marker.addListener('mouseover', function() {
            infowindow.open(map, marker);
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $about_company_record[0]->map_key; ?>&callback=initMap" async defer></script>
	<?php } ?>
  </body>
</html>
