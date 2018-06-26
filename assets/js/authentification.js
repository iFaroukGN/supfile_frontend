$(window).on('load', function () {
	$('#rgpd').modal('show');
});

$(document).ready(function () {
	$('#signInButton').on('click', function () {
		$('#signIn').modal('show');
	});

	$('#signUpButton').on('click', function () {
		$('#signUp').modal('show');
	});
});

function clickRgpd() {
	$('#rgpd').modal('hide');
}
