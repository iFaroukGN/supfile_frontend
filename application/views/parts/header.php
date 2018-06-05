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
</head>
<body>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1691574820928365',
			cookie     : true,
			xfbml      : true,
			version    : '4.5'
		});

		FB.AppEvents.logPageView();

	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});

</script>
