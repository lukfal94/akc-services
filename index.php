<!DOCTYPE HTML>
<html>
<head>
	<title>Home - AKC Services</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include_once("header.php");
	?>

	<div class="col-md-8 col-md-offset-2" style="margin-top: 100px" id="wrapper">
		<div class="col-md-6">Left Column</div>
		<div class="col-md-6">Right Column</div>
	</div>

	<script type="text/javascript">
    	$(document).ready(function() {
    		$('.nav.navbar-nav li:nth-child(1)').addClass("active");
    	});
    </script>

</body>


</html>