<div class="panel-body">
	
	<div id="reference-res">
		
	</div>
	
	<form class="form-horizontal" id="reference-create" action="/seeker/reference" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">
			
				<div class="row">
					<div class="col-md-6">
					
						<div class="form-group">
							<label for="name" class="col-md-4 control-label" title="Required">Name<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('name')}}" name="name"  placeholder="Name" type="text">
							</div>
						</div>
						
						<div class="form-group">
							<label for="designation" class="col-md-4 control-label" title="Required">Designation<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('designation')}}" name="designation"  placeholder="Designation" type="text">
							</div>
						</div>

						<div class="form-group">
							<label for="mobile" class="col-md-4 control-label">Mobile</label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('mobile')}}" name="mobile" placeholder="+880xxxxxxxxxx" type="text">
							</div>
						</div>						

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('email')}}" name="email" placeholder="Email" type="email">
							</div>
						</div>						
						
						<div class="form-group">
							<label for="relation" class="col-md-4 control-label" title="Required">Relation<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<select class="form-control" name="relation">
									<option value="0">Select</option>
									<option value="Relative" {{ (old('relation') == 'Relative') ? 'selected' : '' }}>Relative</option>
									<option value="Family Friend" {{ (old('relation') == 'Family Friend') ? 'selected' : '' }}>Family Friend</option>
									<option value="Academic" {{ (old('relation') == 'Academic') ? 'selected' : '' }}>Academic</option>
									<option value="Professional" {{ (old('relation') == 'Professional') ? 'selected' : '' }}>Professional</option>
									<option value="Others" {{ (old('relation') == 'Others') ? 'selected' : '' }}>Others</option>
								</select>
							</div>
						</div>
						
					</div>
					<div class="col-md-6">
					
						<div class="form-group">
							<label for="organization" class="col-md-4 control-label" title="Required">Organization<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('organization')}}" name="organization"  placeholder="Organization" type="text">
							</div>
						</div>
						
						<div class="form-group">
							<label for="phoneOffice" class="col-md-4 control-label">Phone (Off)</label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('phoneOffice')}}" name="phoneOffice" placeholder="+880xxxxxxxxxx" type="text">
							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Address</label>
							<div class="col-md-8">
								<textarea class="form-control" rows="5" name="address" placeholder="Write here address.">{{ old('address')}}</textarea>
							</div>
						</div>						
					
					</div>
				</div>

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<a href="#" class="btn btn-default" id="close-reference">Close</a>
				<button class="btn btn-success" name="submit" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>

	/*
	* reference Create Form 
	*/	
	$('#reference-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#reference-res').html('');
		
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

			$('#reference-res').html(res.success);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#reference-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-reference').click(function() {
		
		location.reload();
		
	});	
	

</script>