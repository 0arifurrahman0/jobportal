<div class="panel-body">
	
	<div id="professional-res">
		
	</div>
	
	<form class="form-horizontal" id="professional-create" action="/seeker/professional" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">

				<div class="form-group">
					<label for="certification" class="col-md-4 control-label" title="Required">Certification<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('certification')}}" name="certification"  placeholder="Certification" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label for="institute" class="col-md-4 control-label" title="Required">Institute<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('institute')}}" name="institute"  placeholder="Institute Name" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="location" class="col-md-4 control-label">Location</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('location')}}" name="location" placeholder="Location" type="text">
						<p class="help-block">Geolocation the instituted located.</p>
					</div>
				</div>				
				
				<div class="form-group">
					<label for="period" class="col-md-4 control-label">Certification Period</label>
					<div class="col-md-8">
					
						<div class="row">
							<div class="col-md-6">
								<input class="form-control" value="{{ old('startDate')}}" id="professional-start" name="startDate" placeholder="dd-mm-yy" type="text">
								<p class="help-block">Start date.</p>
							</div>
							<div class="col-md-6">
								<input class="form-control" value="{{ old('endDate')}}" id="professional-end" name="endDate" placeholder="dd-mm-yy" type="text">
								<p class="help-block">End date.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a href="#" class="btn btn-default" id="close-professional">Close</a>
				<button class="btn btn-success" name="seTraining" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>
	$(function(){
	/*
	* Open professional Form Datepicker
	*/		
		$("#professional-start").datepicker({
			dateFormat: "dd-mm-yy"
		});
		
		$("#professional-end").datepicker({
			dateFormat: "dd-mm-yy"
		});		
		
	});
	/*
	* professional Create Form 
	*/	
	$('#professional-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#professional-res').html('');
		
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

			$('#professional-res').html(res.success);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#professional-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-professional').click(function() {
		
		location.reload();
		
	});	
	

</script>