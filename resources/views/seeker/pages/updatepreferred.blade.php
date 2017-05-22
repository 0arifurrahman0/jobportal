<div class="panel-body career-update">
	
	<div id="sepreferred-res">
		
	</div>
	
	<form class="form-horizontal" id="preferred-update" action="/seeker/preferred" method="POST">
	
		{{ csrf_field() }}

		<div class="row">
			<div class="col-md-6">
				<div class="col-sm-12">
					<div class="form-group">

						<label for="sePreferredCat" class="control-label" title="Required">Preferred Job Categories<span class="required">&#42;</span></label>
						<p class="help-block">Preferred job categories represents your desired sector(s) to work ( select at least 1 category)</p>
						<div class="checkbox checkbox-container">

							@forelse($categories as $category)
							
								<label>
									<input type="radio" name="sePreferredCat" value="{{ $category->name }}"> {{ $category->name }} <br />
								</label>
								<br />

							@empty
							
								<p class="text-primary">No Category</p>
							
							@endforelse
				
						</div>
					</div>				
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-sm-12">
					<div class="form-group">
						<label class="control-label">Preferred Job Location</label>
						<p class="help-block">Preferred Job Location defines the geographical place where you prefer to work.</p>				
					</div>	
					<div class="form-group">
						<label for="seInsideBd">Inside Bangladesh</label>
						<input class="form-control" value="{{ $profile->seInsideBd or old('seInsideBd')}}" name="seInsideBd"  placeholder="District Name" type="text">
					</div>
					<div class="form-group">
						<label for="seOutsideBd">Outside Bangladesh</label>
						<input class="form-control" value="{{ $profile->seOutsideBd or old('seOutsideBd')}}" name="seOutsideBd"  placeholder="Country Name" type="text">
					</div>					
				</div>
			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-12">
				<a href="#" class="btn btn-default" id="preferred-btn">Close</a>
				<button class="btn btn-success" name="sePersonal" type="submit">Update</button>
			</div>
		</div>	

	</form>
	
</div>

<script>
	$(function(){
	/*
	* Career Update Form popover
	*/		
		$('[data-toggle="popover"]').popover()
		
	});
	
	/*
	* Personal Update Form 
	*/	
	$('#preferred-update').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#sepreferred-res').html('');
		
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

			$('#sepreferred-res').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#sepreferred-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#preferred-btn').click(function() {
		
		location.reload();
		
	});	
	
</script>