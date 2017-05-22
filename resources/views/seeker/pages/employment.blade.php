<div class="panel-body">
	
	<div id="experience-res">
		
	</div>
	
	<form class="form-horizontal" id="experience-create" action="/seeker/employment" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">

				<div class="form-group">
					<label for="company" class="col-md-4 control-label" title="Required">Company Name<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('company')}}" name="company"  placeholder="Company Name" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label for="business" class="col-md-4 control-label" title="Required">Company Business<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('business')}}" name="business"  placeholder="Company Business" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label for="position" class="col-md-4 control-label" title="Required">Designation<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('position')}}" name="position"  placeholder="Designation" type="text">
					</div>
				</div>				

				<div class="form-group">
					<label for="department" class="col-md-4 control-label">Department</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('department')}}" name="department" placeholder="Department" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label for="skill" class="col-md-4 control-label" title="Required">Area of Experiences<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('skill')}}" name="skill"  placeholder="Area of Experiences" type="text">
						<p class="help-block">Add comma(,) for seperate your experiences.</p>
					</div>
				</div>
				
				<div class="form-group">
					<label for="duty" class="col-md-4 control-label" title="Required">Responsibilities<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('duty')}}" name="duty"  placeholder="Responsibilities Name" type="text">
					</div>
				</div>

				<div class="form-group">
					<label for="location" class="col-md-4 control-label" title="Required">Company Location<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('location')}}" name="location"  placeholder="Company Location" type="text">
						<p class="help-block">Geolocation the instituted located.</p>
					</div>
				</div>				
				
				<div class="form-group">
					<label for="period" class="col-md-4 control-label" title="Required">Employment Period<span class="required">&#42;</span></label>
					<div class="col-md-8">
					
						<div class="row">
							<div class="col-md-6">
								<input class="form-control" value="{{ old('startDate')}}" id="experience-start" name="startDate" placeholder="dd-mm-yy" type="text">
								<p class="help-block">From</p>
							</div>
							<div class="col-md-6">
								<input class="form-control seeker-emp-end" id="experience-end" value="{{ old('endDate')}}" name="endDate" placeholder="dd-mm-yy" type="text">
								<p class="help-block">To</p>
							</div>							
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input id="seeker-working" type="checkbox"> Currently Working
								</label>
							</div>						
						</div>
					</div>
				</div>

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a href="#" class="btn btn-default" id="close-experience">Close</a>
				<button class="btn btn-success" name="submit" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>
	$(function(){
	/*
	* Open Experience Form Datepicker
	*/		
		$("#experience-start").datepicker({
			dateFormat: "dd-mm-yy"
		});
		
		$("#experience-end").datepicker({
			dateFormat: "dd-mm-yy"
		});		
		
	});
	
	/*
	* Experience Create Form 
	*/		
	$("#seeker-working").change(function(e){

		var attr = $(".seeker-emp-end").attr('readonly');

		if (typeof attr !== typeof undefined && attr !== false) {
			
			$(".seeker-emp-end").removeAttr('readonly').val('');

		} else{

			$(".seeker-emp-end").val('Continuing').attr('readonly','readonly');

		}

	});	
	
	
	/*
	* Experience Create Form 
	*/	
	$('#experience-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#experience-res').html('');
		
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

			$('#experience-res').html(res.success);
			
			//window.setTimeout(function(){location.reload()},500);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#experience-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-experience').click(function() {
		
		location.reload();
		
	});	
	

</script>