<div class="panel-body">
	
	<div id="training-res">
		
	</div>
	
	<form class="form-horizontal" id="training-create" action="/seeker/training" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">

				<div class="form-group">
					<label for="title" class="col-md-4 control-label" title="Required">Training Title<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('title')}}" name="title"  placeholder="Training Title" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label for="topic" class="col-md-4 control-label">Topics Covered</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('topic')}}" name="topic" placeholder="Topics Covered" type="text">
						<p class="help-block">Which subjects or topics you are completed.</p>
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
					<label for="country" class="col-md-4 control-label" title="Required">Country<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('country')}}" name="country"  placeholder="Country" type="text">
						<p class="help-block">Geolocation the instituted country.</p>
					</div>
				</div>				

				<div class="form-group">
					<label for="year" class="col-md-4 control-label" title="Required">Training Year<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="year">
							<option value="0">Select</option>
							<option value="2017" >2017</option>
							<option value="2016" >2016</option>
							<option value="2015" >2015</option>
							<option value="2014" >2014</option>
							<option value="2013" >2013</option>
							<option value="2012" >2012</option>
							<option value="2011" >2011</option>
							<option value="2010" >2010</option>
							<option value="2009" >2009</option>
							<option value="2008" >2008</option>
							<option value="2007" >2007</option>
							<option value="2006" >2006</option>
							<option value="2005" >2005</option>
							<option value="2004" >2004</option>
							<option value="2003" >2003</option>
							<option value="2002" >2002</option>
							<option value="2001" >2001</option>
							<option value="2000" >2000</option>
							<option value="1999" >1999</option>
							<option value="1998" >1998</option>
							<option value="1997" >1997</option>
							<option value="1996" >1996</option>
							<option value="1995" >1995</option>
							<option value="1994" >1994</option>
							<option value="1993" >1993</option>
							<option value="1992" >1992</option>
							<option value="1991" >1991</option>
							<option value="1990" >1990</option>
							<option value="1989" >1989</option>
							<option value="1988" >1988</option>
							<option value="1987" >1987</option>
							<option value="1986" >1986</option>
							<option value="1985" >1985</option>
							<option value="1984" >1984</option>
							<option value="1983" >1983</option>
							<option value="1982" >1982</option>
							<option value="1981" >1981</option>
							<option value="1980" >1980</option>
							<option value="1979" >1979</option>
							<option value="1978" >1978</option>
							<option value="1977" >1977</option>
							<option value="1976" >1976</option>
							<option value="1975" >1975</option>
							<option value="1974" >1974</option>
							<option value="1973" >1973</option>
							<option value="1972" >1972</option>
							<option value="1971" >1971</option>
							<option value="1970" >1970</option>
							<option value="1969" >1969</option>
							<option value="1968" >1968</option>
							<option value="1967" >1967</option>
							<option value="1966" >1966</option>
							<option value="1965" >1965</option>
							<option value="1964" >1964</option>
							<option value="1963" >1963</option>
							<option value="1962" >1962</option>
							<option value="1961" >1961</option>
							<option value="1960" >1960</option>
						</select>
					</div>
				</div>				

				<div class="form-group">
					<label for="duration" class="col-md-4 control-label" title="Required">Duration(Year)</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('duration')}}" name="duration" placeholder="Year" type="number">
						<p class="help-block">Example: 2</p>
					</div>
				</div>		

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a href="#" class="btn btn-default" id="close-training">Close</a>
				<button class="btn btn-success" name="seTraining" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>

	/*
	* Training Create Form 
	*/	
	$('#training-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#training-res').html('');
		
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

			$('#training-res').html(res.success);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#training-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-training').click(function() {
		
		location.reload();
		
	});	
	

</script>