
$(document).ready(function(){

	$('#search').keyup(function(){

		var childName = this.value;
		var field = $('#field').val();
		console.log(field);
		$('#results').empty();

		if(this.value){

			$.ajax({
				type: 'GET',
				url: '/All/searchApps',
				data: { childName: childName, field : field},
				success: function (data) {

					var results = data['results'];

					console.log(data['success']);

					$('#results').empty();
					
					for(var i in results){

						 console.log(results[i]['id']);
						 console.log(results[i]['name']);

						 var result = "<option value='"+results[i]['id']+"'>"+results[i]['name']+"</option>";

						 $('#results').append(result);


					}

				}

			});

		}
	});		
});
