$(document).ready(function(){

	$('#search').keyup(function(){

		var childName = this.value;
		var field = $('#field').val();
		console.log(childName);
		console.log(field);

		if(this.value){

			$.ajax({
				type: 'GET',
				url: '/school/allApps',
				data: { childName: childName, field : field},
				success: function (data) {


				});
		}		
	});
