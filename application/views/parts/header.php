<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

	<link rel="stylesheet"
		  href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
		  integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/main.css">
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/authentification.css">
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/sticky-footer.css">


	<title>Supfile</title>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
			integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
			crossorigin="anonymous"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
			integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
			crossorigin="anonymous"></script>
	<script>
		$(document).ready(function () {
			$('body').bootstrapMaterialDesign();
		});
	</script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/authentification.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/navbar.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/main.js"></script>
</head>
<body>
<script>
	$(document).ready(function () {
		$.ajaxSetup({cache: true});
		$.getScript('https://connect.facebook.net/en_US/sdk.js', function () {
			FB.init({
				appId: '1691574820928365',
				version: 'v2.7' // or v2.1, v2.2, v2.3, ...
			});
			// $('#loginbutton,#feedbutton').removeAttr('disabled');
			// FB.getLoginStatus(updateStatusCallback);
		});
	});
</script>
