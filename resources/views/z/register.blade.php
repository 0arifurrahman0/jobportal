@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	
		<div class="box-text-lg text-center">
			<h3 class="text-light">Create a Free Seeker Account</h3>
		</div>
		
		<form action="">
			<div class="form-group">
				<label class="control-label" for="focusedInput">First Name</label>
				<input class="form-control" name="" value="" type="text"  placeholder="First Name" >
			</div>

			<div class="form-group">
				<label class="control-label" for="focusedInput">Last Name</label>
				<input class="form-control" name="" value="" type="text" placeholder="Last Name" >
			</div>	

			<div class="form-group">
				<label class="control-label" for="focusedInput">Email</label>
				<input class="form-control" name="" value="" type="text" placeholder="example@gmail.com" >
			</div>

			<div class="form-group">
				<label class="control-label" for="focusedInput">Mobile No</label>
				<input class="form-control" name="" value="" type="text" placeholder="+880" >
			</div>
			
			<div class="form-group">
				<label for="select" class="control-label">Category</label>
				<div class="">
					<select class="form-control" id="select">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label" for="focusedInput">Gender</label>
				<div class="">
					<div class="radio-inline">
						<label>
							<input name="gender"  value="Male" checked="" type="radio">
							Male
						</label>
					</div>
					<div class="radio-inline">
						<label>
							<input name="gender" value="Female" type="radio">
							Female
						</label>
					</div>
				</div>
			</div>			

			<div class="form-group">
				<label class="control-label" for="focusedInput">Password</label>
				<input class="form-control" name="" value="" type="password" >
			</div>			

			<div class="form-group">
				<label class="control-label" for="focusedInput">Confirm Password</label>
				<input class="form-control" name="" value="" type="password" >
			</div>	
			
		</form>
	</div>
</div>

@endsection