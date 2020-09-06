$(document).ready(function(){
	$('#oksignup').click(function(){
		$('#login').addClass("reg");
		$('#signup').removeClass("reg");
	});
	$('#oklogin').click(function(){
		$('#signup').addClass("reg");
		$('#login').removeClass("reg");
	});
});

function forgpw()
{
	event.preventDefault();
	$( "#login" ).hide();
	$( "#forgotpw" ).show();
}