<div class="panel-body">
	
	<div id="language-res">
		
	</div>
	
	<form class="form-horizontal" id="language-create" action="/seeker/language" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">
			
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="language" class="col-md-4 control-label" title="Required">Language<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<input class="form-control" value="{{ old('language')}}" name="language"  placeholder="Language Name" type="text">
							</div>
						</div>
						
						<div class="form-group">
							<label for="writing" class="col-md-4 control-label" title="Required">Writing<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<select class="form-control" name="writing">
									<option value="0">Select</option>
									<option value="High" {{ (old('writing') == 'High') ? 'selected' : '' }}>High</option>
									<option value="Medium" {{ (old('writing') == 'Medium') ? 'selected' : '' }}>Medium</option>
									<option value="Low" {{ (old('writing') == 'Low') ? 'selected' : '' }}>Low</option>
								</select>
							</div>
						</div>						
					</div>
					<div class="col-md-6">
					
						<div class="form-group">
							<label for="reading" class="col-md-4 control-label" title="Required">Reading<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<select class="form-control" name="reading">
									<option value="0">Select</option>
									<option value="High" {{ (old('reading') == 'High') ? 'selected' : '' }}>High</option>
									<option value="Medium" {{ (old('reading') == 'Medium') ? 'selected' : '' }}>Medium</option>
									<option value="Low" {{ (old('reading') == 'Low') ? 'selected' : '' }}>Low</option>
								</select>
							</div>
						</div>	

						<div class="form-group">
							<label for="speaking" class="col-md-4 control-label" title="Required">Speaking<span class="required">&#42;</span></label>
							<div class="col-md-8">
								<select class="form-control" name="speaking">
									<option value="0">Select</option>
									<option value="High" {{ (old('speaking') == 'High') ? 'selected' : '' }}>High</option>
									<option value="Medium" {{ (old('speaking') == 'Medium') ? 'selected' : '' }}>Medium</option>
									<option value="Low" {{ (old('speaking') == 'Low') ? 'selected' : '' }}>Low</option>
								</select>
							</div>
						</div>
						
					</div>
				</div>

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<a href="#" class="btn btn-default" id="close-language">Close</a>
				<button class="btn btn-success" name="submit" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>

	/*
	* language Create Form 
	*/	
	$('#language-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#language-res').html('');
		
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

			$('#language-res').html(res.success);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#language-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-language').click(function() {
		
		location.reload();
		
	});	
	

</script>