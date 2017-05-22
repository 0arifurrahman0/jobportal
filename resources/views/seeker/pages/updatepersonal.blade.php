<div class="panel-body personal-update">
	
	<div id="sepersonal-res">
		
	</div>
	
	<form class="form-horizontal" id="personal-update" action="/seeker/personal" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" value="{{ $profile->user_id }}" />
				<div class="form-group">
					<label for="seName" class="col-md-4 control-label" title="Required">Full Name<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seName or old('seName')}}" name="seName"  placeholder="Full Name" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seFName" class="col-md-4 control-label" title="Required">Father's Name</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seFName or old('seFName')}}" name="seFName"  placeholder="Father's Name" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seMName" class="col-md-4 control-label">Mother's Name</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seMName or old('seMName')}}" name="seMName" placeholder="Mother's Name" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seBirthDate" class="col-md-4 control-label" title="Required">Date of Birth<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seBirthDate or old('seBirthDate')}}" name="seBirthDate"  id="datepicker" placeholder="dd-mm-yy" type="text">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" title="Required">Gender<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<div class="radio">
							<label>
								<input name="seGender" value="Male" type="radio" {{ ($profile->seGender == 'Male') ? 'checked' : '' }} >
								
								Male
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seGender" value="Female" type="radio" {{ ($profile->seGender == 'Female') ? 'checked' : '' }}>
								Female
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seGender" value="Other" type="radio" {{ ($profile->seGender == 'Other') ? 'checked' : '' }}>
								Other
							</label>
						</div>						
					</div>
				</div>		
				
				<div class="form-group">
					<label for="seReligion" class="col-md-4 control-label">Religion</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seReligion or old('seReligion')}}" name="seReligion" placeholder="Islam" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seMStatus" class="col-md-4 control-label" title="Required">Marital Status<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="seMStatus">
							<option value="0">Select</option>
							<option value="Married" {{ ($profile->seMStatus == 'Married') ? 'selected' : '' }} >Married</option>
							<option value="Unmarried" {{ ($profile->seMStatus == 'Unmarried') ? 'selected' : '' }}>Unmarried</option>
							<option value="Single" {{ ($profile->seMStatus == 'Single') ? 'selected' : '' }}>Single</option>
						</select>
					</div>
				</div>		
				
				<div class="form-group">
					<label for="seNationality" class="col-md-4 control-label" title="Required">Nationality<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seNationality or old('seNationality')}}" name="seNationality"  placeholder="Bangladeshi" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seNationalId" class="col-md-4 control-label">National Id No</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seNationalId or old('seNationalId')}}" name="seNationalId" placeholder="digits (e.g.: XXXXXXXXXXX)" type="text">
					</div>
				</div>
				
			</div>
			<div class="col-md-6">
			
				<div class="form-group">
					<label for="sePresentAdd" class="col-md-4 control-label" title="Required">Present Address<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<textarea class="form-control"  rows="3" name="sePresentAdd" placeholder="Write here your present address.">{{ $profile->sePresentAdd or old('sePresentAdd')}}</textarea>
					</div>
				</div>	
			
				<div class="form-group">
					<label for="sePermanentAdd" class="col-md-4 control-label">Permanent Address</label>
					<div class="col-md-8">
						<textarea class="form-control" rows="4" name="sePermanentAdd" placeholder="Write here your permanent address.">{{ $profile->sePermanentAdd or old('sePermanentAdd')}}</textarea>
					</div>
				</div>	
			
				<div class="form-group">
					<label for="seMobile" class="col-md-4 control-label" title="Required">Mobile No<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seMobile or old('seMobile')}}" name="seMobile"  placeholder="+880xxxxxxxxxx" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="seMobileAlt" class="col-md-4 control-label">Alternate Mobile No</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seMobileAlt or old('seMobileAlt')}}" name="seMobileAlt" placeholder="+880xxxxxxxxxx" type="text">
					</div>
				</div>	
			
				<div class="form-group">
					<label for="seEmail" class="col-md-4 control-label">Email</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seEmail or old('seEmail')}}" name="seEmail" placeholder="name@example.com" disabled="" type="email">
						<p class="help-block">This is your default email.</p>
					</div>
				</div>	

				<div class="form-group">
					<label for="seEmailAlt" class="col-md-4 control-label">Alternate Email</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seEmailAlt or old('seEmailAlt')}}" name="seEmailAlt" placeholder="name@example.com" type="email">
					</div>
				</div>
			
			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<a href="#" class="btn btn-default" id="persoanl-btn">Close</a>
				<button class="btn btn-success" name="sePersonal" type="submit">Update</button>
			</div>
		</div>	

	</form>
	
</div>

<script>
	$(function(){
	/*
	* Open Personal Update Form Datepicker
	*/		
		$("#datepicker").datepicker({
			dateFormat: "dd-mm-yy"
		});
		
	});

	/*
	* Personal Update Form 
	*/	
	$('#personal-update').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#sepersonal-res').html('');
		
		var method = $(this).attr('method');
		
		var url = $(this).attr('action');
		
		var data = $(this).serialize();
		
		$.ajax({
			
			method: method,
			url: url,
			data: data,
			dataType: 'json',
			cache: false
			
		}).done(function(res){

			$('#sepersonal-res').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#sepersonal-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#persoanl-btn').click(function() {
		
		location.reload();
		
	});	
	
</script>