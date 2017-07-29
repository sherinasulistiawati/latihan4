<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

		<!-- Navs -->
		<div class="row">
		@include('layouts.navs')
		<!-- Akhir Navs -->

		<!-- Carousel -->
			@include('layouts.caroussel')
			<!-- End Carousel -->

			<!-- Title -->
			@include('layouts.title')
			<!-- End Title -->

			<!--  -->
			@include('layouts.media')
			<!-- End Media -->

			
			<div class="media">
			<!-- Isi -->
			@yield('content')
			<!-- Akhir Isi -->

			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>