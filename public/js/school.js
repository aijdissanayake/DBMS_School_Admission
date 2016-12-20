$(document).ready(function(){

	$('#search').keyup(function(){

			var childName = this.value;
			var field = $('#field').val();
			console.log(childName);
			console.log(field);

			if(this.value){

				$.ajax({
					type: 'GET',
	                url: '/sessions',
	                data: { childName: childName, field : field},
	                success: function (data) {
	               

			}

		});
	});
