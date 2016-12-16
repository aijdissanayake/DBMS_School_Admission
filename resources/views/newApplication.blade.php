@extends('layouts.app')

@section('head')
<title>New Application</title>
@endsection

@section('content')
<div class="row">
	<h1>Application for admission to the Grade One in the year 2017</h1><br>
	<div class="col-xs-12 col-md-6">
		
		<form action="" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="category">Category Applied for:</label>
				<select class="form-control" id="category">
					<option value="0">Past pupil</option>
					<option value="1">Proximity</option>
				</select>
			</div>

			<br>
			<h3>Details of the Child:</h3>
			<br>
			<div class="form-group">
				<label for="">Name in full</label>
				<input type="text" class="form-control" id="child_name" name="child_name" placeholder="Full name of child">
			</div>

			<div class="form-group">
				<label for="">Name with initials</label>
				<input type="text" class="form-control" id="child_name_initials" name="child_name_initials" placeholder="Name with initials">
			</div>

			<div class="form-group">
				<label for="category">Gender</label>
				<select class="form-control" name="gender" id="gender">
					<option value="0">Female</option>
					<option value="1">Male</option>
				</select>
			</div>

			<div class="form-group">
				<label for="dob">Date of Birth</label>
				<input type="date" name="dob" id="dob" class="form-control">
			</div>

			<div class=form-group form-inline"">
				<label for="age">Age on 31st January 2017</label>
				<div class="row" name="age">
					<div class="col-xs-4">
						<label for="dob_years">Years</label>
						<input type="" name="dob_years" class="form-control">
					</div>
					<div class="col-xs-4">
						<label for="dob_months">Months</label>
						<input type="" name="dob_months" class="form-control">
					</div>
					<div class="col-xs-4">
						<label for="dob_days">Days</label>
						<input type="" name="dob_days" class="form-control">
					</div>				
				</div>
			</div>

			<div class="form-group">
				<label for="child_religion">Religion</label>
				<select class="form-control" name="child_religion" id="child_religion">
					<option value="0">Buddhism</option>
					<option value="1">Hindu</option>
					<option value="2">Christianity</option>
					<option value="3">Islam</option>
					<option value="4">Other</option>
				</select>
			</div>

			<div class="form-group">
				<label for="medium">Medium of study</label>
				<select class="form-control" id="medium">
					<option value="0">Sinhalese</option>
					<option value="1">Tamil</option>
				</select>
			</div>

			<br>
			<h3>Details of the Applicant (Mother/ Father/ Legal Guardian)</h3>
			<br>

			<div class="form-group">
				<label for="">Name in full</label>
				<input type="text" class="form-control" id="applicant_name" name="applicant_name" placeholder="eg: Mudiyanselage Randunu Gunapala">
			</div>

			<div class="form-group">
				<label for="">Name with initials</label>
				<input type="text" class="form-control" id="applicant_name_initials" name="applicant_name_initials" placeholder="eg: M.R. Gunapala">
			</div>


			<div class="form-group">
				<label for="nic">National Identity Card (NIC) number</label>
				<input type="text" class="form-control" id="nic" name="nic" placeholder="NIC number">
			</div>

			<label for="nationality">Whether the Applicant is Sri Lankan</label>
			<div class="radio" name="nationality" id="nationality">
				<label>
					<input type="radio" name="nationality_sl" id="nationality_sl_true" value="1" checked>Sri Lankan
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="nationality_sl" id="nationality_sl_false" value="0">
					Foreign
				</label>
			</div>

			<div class="form-group">
				<label for="applicant_religion">Religion</label>
				<select class="form-control" name="applicant_religion" id="applicant_religion">
					<option value="0">Buddhism</option>
					<option value="1">Hindu</option>
					<option value="2">Christianity</option>
					<option value="3">Islam</option>
					<option value="4">Other</option>
				</select>
			</div>


			<div class="form-group">
			<label for="perm_address">Permanent Address</label>
				<input type="text" class="form-control" id="perm_address" name="perm_address" placeholder="eg: 38/4, Saranankara Avenue, Bambalapitiya">
			</div>

			<div class="form-group">
				<label for="applicant_tp">Telephone</label>
				<input type="number" class="form-control" id="applicant_tp" name="applicant_tp" placeholder="94112123456">
			</div>

			<div class="form-group">
				<label for="district">Residential District</label>
				<select class="form-control" name="district" id="district">
					<option value="1">Ampara</option>
					<option value="2">Anuradhapura</option>
					<option value="3">Badulla</option>
					<option value="4">Batticaloa</option>
					<option value="5">Colombo</option>
					<option value="6">Galle</option>
					<option value="7">Gampaha</option>
					<option value="8">Hambanthota</option>
					<option value="9">Jaffna</option>
					<option value="10">Kalutara</option>
					<option value="11">Kandy</option>
					<option value="12">Kegalle</option>
					<option value="13">Kilinochchi</option>
					<option value="14">Kurunegala</option>
					<option value="15">Manna</option>
					<option value="16">Matale</option>
					<option value="17">Matara</option>
					<option value="18">Monaragala</option>
					<option value="19">Mullaitivu</option>
					<option value="20">Nuwara Eliya</option>
					<option value="21">Polonnaruwa</option>
					<option value="22">Puttalam</option>
					<option value="23">Ratnapura</option>
					<option value="24">Trincomalee</option>
					<option value="25">Vavuniya</option>
				</select>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" style="float: right">Submit</button>
				</div>
			</div>


		</form>
	</div>
	
</div>





@endsection