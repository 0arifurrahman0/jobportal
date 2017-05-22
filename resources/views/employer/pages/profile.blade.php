<div class="panel panel-default" id="empProHide">
	<div class="panel-body">
		<div id="empProUpRes"></div>
		<form class="form-horizontal" id="empProUp" action="/employer/profile" method="POST">
		
			{{ csrf_field() }}
			
			<h3>Company Details</h3>
			<hr />						
			
			<input type="hidden" value="{{ $profile->id }}" />
			<div class="form-group">
				<label for="name" class="col-md-3 control-label" title="Required">Company Name<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->name or old('name')}}" name="name"  placeholder="Company Name" type="text">
				</div>
			</div>
			
			<div class="form-group">

				<label for="type" class="col-md-3 control-label" title="Required">Industry Type<span class="required">&#42;</span></label>
				
				<div class="col-md-9">
					<div class="checkbox checkbox-container">

						@forelse($categories as $category)
						
							<label>
								<input type="radio" name="type" value="{{ $category->name }}" {{ ( $profile->type == $category->name) ? 'checked' : '' }} /> {{ $category->name }} <br />
							</label>
							<br />

						@empty
						
							<p class="text-primary">No Category</p>
						
						@endforelse
			
					</div>
				</div>
			</div>	

			<div class="form-group">
				<label for="details" class="col-md-3 control-label">Business Description</label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="details" placeholder="Write here your business description...">{{ $profile->details or old('details')}}</textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="address" class="col-md-3 control-label" title="Required">Company Address<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->address or old('address')}}" name="address"  placeholder="Address" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="country" class="col-md-3 control-label" title="Required">Country<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->country or old('country')}}" name="country"  placeholder="Country" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="city" class="col-md-3 control-label" title="Required">City<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->city or old('city')}}" name="city"  placeholder="City" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="area" class="col-md-3 control-label">Area</label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->area or old('area')}}" name="area"  placeholder="Area" type="text">
				</div>
			</div>						
			
			<h3>Primary Contact Details</h3>
			<hr />

			<div class="form-group">
				<label for="person" class="col-md-3 control-label" title="Required">Contact Person Name<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->person or old('person')}}" name="person"  placeholder="Contact Person Name" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="designation" class="col-md-3 control-label" title="Required">Contact Person's Designation<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->designation or old('designation')}}" name="designation"  placeholder="Designation" type="text">
				</div>
			</div>

			<div class="form-group">
				<label for="mobile" class="col-md-3 control-label">Contact Person's Mobile</label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->mobile or old('mobile')}}" name="mobile"  placeholder="Mobile" type="text">
				</div>
			</div>
			
			<div class="form-group">
				<label for="mobile" class="col-md-3 control-label">Phone (office)</label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->mobile or old('mobile')}}" name="mobile"  placeholder="Phone" type="text">
				</div>
			</div>						
			
			<div class="form-group">
				<label for="email" class="col-md-3 control-label">Contact Person's Email</label>
				<div class="col-md-9">
					<input class="form-control" disabled="" value="{{ $profile->email or old('email')}}" name="email"  placeholder="Email" type="email">
					<p class="help-block">This is default email</p>
				</div>
			</div>

			<div class="form-group">
				<label for="email2" class="col-md-3 control-label">Another Email</label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->email2 or old('email2')}}" name="email2"  placeholder="Another Email" type="email">
				</div>
			</div>
			
			<div class="form-group">
				<label for="url" class="col-md-3 control-label">Phone (office)</label>
				<div class="col-md-9">
					<input class="form-control" value="{{ $profile->url or old('url')}}" name="url"  placeholder="https://www.example.com" type="text">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<a href="#" class="btn btn-default" id="persoanl-btn">Close</a>
					<button class="btn btn-success" name="submit" type="submit">Save</button>
				</div>
			</div>	
		</form>
	</div>
</div>

<script>

	/*
	* Employer Profile Update 
	*/	
	$('#empProUp').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#empProUpRes').html('');
		
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

			$('#empProUpRes').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#empProUpRes' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Employer Update Form 
	*/
	$('#persoanl-btn').click(function() {
		
		location.reload();
		
	});	
	
</script>