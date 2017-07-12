$(document).ready(function (){


	$('form').submit(function(event){

		event.preventDefault();

		var name = $('#name').val();
		var username = $('#username').val();
		var password = $('#password').val();
		


		$.post('includes/signup.inc.php', {

			name: name,
			username: username,
			password: password
		},  function (data){

			$('.feedback').html(data);
		});

	})
})