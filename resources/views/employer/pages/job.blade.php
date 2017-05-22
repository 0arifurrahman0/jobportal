<div class="panel panel-default" id="">
	<div class="panel-body">
		<h3>Post a new job</h3>
		<hr />	
		<div id="jobRes"></div>
		<form class="form-horizontal" id="empJobPub" action="/employer/job" method="POST">
		
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="title" class="col-md-3 control-label" title="Required">Job Title<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ old('title')}}" name="title"  placeholder="Job title" type="text">
				</div>
			</div>	
			
			<div class="form-group">

				<label for="Category_id" class="col-md-3 control-label" title="Required">Job Category<span class="required">&#42;</span></label>
				
				<div class="col-md-9">
					<div class="checkbox checkbox-container">

						@forelse($categories as $category)
						
							<label>
								<input type="radio" name="category_id" value="{{ $category->id }}" {{ ( $profile->type == $category->name) ? 'checked' : '' }} /> {{ $category->name }} <br />
							</label>
							<br />

						@empty
						
							<p class="text-primary">No Category</p>
						
						@endforelse
			
					</div>
				</div>
			</div>	

			<div class="form-group">
				<label for="vacancie" class="col-md-3 control-label" title="Required">No. of Vacancies<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ old('vacancie')}}" name="vacancie"  placeholder="Vacancie" type="number">
				</div>
			</div>	

			<div class="form-group">
				<label for="instruction" class="col-md-3 control-label" title="Required">Apply Instruction(s)<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="instruction" placeholder="Apply instruction...">{{ old('instruction')}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="deadline" class="col-md-3 control-label" title="Required">Application Deadline<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<input class="form-control" value="{{ old('deadline')}}" name="deadline"  id="jobDeadline" placeholder="dd-mm-yy" type="text">
				</div>
			</div>	

			<div class="form-group">
				<label class="col-md-3 control-label" title="Required">How do you want to receive CV / Resume(s)<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<div class="radio">
						<label>
							<input name="cvType" value="Online CV/Resume" type="radio" {{ (old('cvType') == 'Online CV/Resume') ? 'checked' : '' }} >Online CV/Resume
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="cvType" value="Email Attachment" type="radio" {{ (old('cvType') == 'Email Attachment') ? 'checked' : '' }}>
							Email Attachment
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="cvType" value="Hard Copy CV" type="radio" {{ (old('cvType') == 'Hard Copy CV') ? 'checked' : '' }}>
							Hard Copy CV
						</label>
					</div>	
					<div class="radio">
						<label>
							<input name="cvType" value="Walk-in Interview" type="radio" {{ (old('cvType') == 'Walk-in Interview') ? 'checked' : '' }}>
							Walk-in Interview 
						</label>
					</div>					
				</div>
			</div>				
			
			<div class="form-group">
				<label for="ageRange" class="col-md-3 control-label">Age Range</label>
				<div class="col-md-9">
					<div class="row">
						<div class="col-sm-6">
							<select class="form-control" name="ageFrom">
								<option value="0"> Any </option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
							</select>
							<p class="help-block">From</p>
						</div>
						<div class="col-sm-6">
							<select class="form-control" name="ageTo">
								<option value="0"> Any </option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
							</select>	
							<p class="help-block">To</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="form-group">
				<label class="col-md-3 control-label" title="Required">Gender<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<div class="radio">
						<label>
							<input name="gender" value="Male" type="radio" {{ (old('gender') == 'Male') ? 'checked' : '' }} >
							
							Male
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="gender" value="Female" type="radio" {{ (old('gender') == 'Female') ? 'checked' : '' }}>
							Female
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="gender" value="any" type="radio" {{ (old('gender') == 'any') ? 'checked' : '' }}>
							Any
						</label>
					</div>						
				</div>
			</div>	

			<div class="form-group">
				<label for="jobLevel" class="col-md-3 control-label" title="Required">Job Nature<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<div class="radio">
						<label>
							<input name="jobLevel" value="Full Time" type="radio" {{ (old('jobLevel') == 'Full Time') ? 'checked' : '' }} >
							
							Full Time
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="jobLevel" value="Part Time" type="radio" {{ (old('jobLevel') == 'Part Time') ? 'checked' : '' }}>
							Part Time
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="jobLevel" value="Contractual" type="radio" {{ (old('jobLevel') == 'Contractual') ? 'checked' : '' }}>
							Contractual
						</label>
					</div>	

					<div class="radio">
						<label>
							<input name="jobLevel" value="Internship" type="radio" {{ (old('jobLevel') == 'Internship') ? 'checked' : '' }}>
							Internship
						</label>
					</div>					
				</div>
			</div>	

			<div class="form-group">
				<label for="qualification" class="col-md-3 control-label" title="Required">Educational Qualification<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="qualification" placeholder="Educational qualification...">{{ old('qualification')}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="context" class="col-md-3 control-label">Job Context</label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="context" placeholder="Job context...">{{ old('context')}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="responsibility" class="col-md-3 control-label" title="Required">Job Description / Responsibility<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="responsibility" placeholder="Job description/responsibility...">{{ old('responsibility')}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="require" class="col-md-3 control-label" title="Required">Additional Job Requirements<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="require" placeholder="Additional job requirements...">{{ old('require')}}</textarea>
				</div>
			</div>	

			
			
			
			<div class="form-group">
				<label for="experience" class="col-md-3 control-label">Total Years of Experience</label>
				<div class="col-md-9">
					<div class="radio">
						<label>
							<input id="expNo" name="experience" checked value="No" type="radio" {{ (old('salary') == 'Negotiable') ? 'checked' : '' }} >
							No Experience Required
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="experience" id="expReq" type="radio">
							Experience Required
						</label>
					</div>	
					<div class="row" style="display:none;" id="expRange">
						<div class="col-sm-6">
							<select class="form-control" name="expFrom">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<p class="help-block">From (year)</p>
						</div>
						<div class="col-sm-6">
							<select class="form-control" name="expTo">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>	
							<p class="help-block">To (year)</p>
						</div>
					</div>					
				</div>
			</div>			

			<div class="form-group">
				<label for="location" class="col-md-3 control-label" title="Required">Job Location<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<select class="form-control" name="location">
						<option value="0">Select</option>
						<option value="Anywhere" {{ (old('location') == 'Anywhere') ? 'selected' : '' }}>Anywhere</option>
						<option value="Dhaka" {{ (old('location') == 'Dhaka') ? 'selected' : '' }}>Dhaka</option>
						<option value="Barisal" {{ (old('location') == 'Barisal') ? 'selected' : '' }}>Barisal</option>
						<option value="Chittagong" {{ (old('location') == 'Chittagong') ? 'selected' : '' }}>Chittagong</option>
						<option value="Khulna" {{ (old('location') == 'Khulna') ? 'selected' : '' }}>Khulna</option>
						<option value="Mymensingh" {{ (old('location') == 'Mymensingh') ? 'selected' : '' }}>Mymensingh</option>
						<option value="Rajshahi" {{ (old('location') == 'Rajshahi') ? 'selected' : '' }}>Rajshahi</option>
						<option value="Rangpur" {{ (old('location') == 'Rangpur') ? 'selected' : '' }}>Rangpur</option>
						<option value="Sylhet" {{ (old('location') == 'Sylhet') ? 'selected' : '' }}>Sylhet</option>
						<option value="Outside" {{ (old('location') == 'Outside') ? 'selected' : '' }}>Outside</option>
					</select>
				</div>
			</div>	

			<div class="form-group">
				<label for="salary" class="col-md-3 control-label" title="Required">Salary Range<span class="required">&#42;</span></label>
				<div class="col-md-9">	
					<input list="salary-data" class="form-control" value="{{ old('salary')}}" name="salary" placeholder="10000" type="text">
					<p class="help-block">Tk. (thousand)</p>
					<datalist id="salary-data">
						<select name="salary" class="form-control">
							<option value="Negotiable">Negotiable</option>
						</select>					
					</datalist>
				</div>
			</div>			
			
			<div class="form-group">
				<label for="benefits" class="col-md-3 control-label" title="Required">Other Benefits<span class="required">&#42;</span></label>
				<div class="col-md-9">
					<textarea class="form-control"  rows="5" name="benefits" placeholder="Other benefits...">{{ old('benefits')}}</textarea>
				</div>
			</div>			

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<a href="#" class="btn btn-default" id="job-btn">Close</a>
					<button class="btn btn-success" name="submit" type="submit">Update</button>
				</div>
			</div>
			
		</form>
	</div>
</div>
<script>
	$(function(){
	
		$("#jobDeadline").datepicker({
			dateFormat: "dd-mm-yy"
		});
		
		$("#expReq").click(function(){
			
			$("#expRange").show();
			
		});
		
		$("#expNo").click(function(){
			
			$("#expRange").hide();
			
		});		
		
	});
	
	
	$('#empJobPub').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#jobRes').html('');
		
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

			$('#jobRes').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#jobRes' ).html( errorsHtml );
			}			
			
			
		});
		
	});	
	
	$('#job-btn').click(function() {
		
		location.reload();
		
	});		
	
</script>