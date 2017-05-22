<div class="panel-body career-update">
	
	<div id="secareer-res">
		
	</div>
	
	<form class="form-horizontal" id="career-update" action="/seeker/career" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">
				<input type="hidden" value="{{ $profile->user_id }}" />
				<div class="form-group">

					<label for="seObjective" title="Required" class="col-md-3 control-label">
						Objective<span class="required">&#42;</span>
						<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="A resume objective is a short summary of your career growth. Objective should be carefully written to fit the job you are applying for." data-original-title="" title="What is objective?"></i>
					</label>
					<div class="col-md-9">
						<textarea required class="form-control" rows="4" name="seObjective" placeholder="Write here your objective.">{{ $profile->seObjective or old('seObjective')}}</textarea>
						<p class="help-block">
							View Example
							<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="To secure a position with a well-established organization with a stable environment that will lead to a lasting relationship in the field of HealthCare. To obtain a position that will enable the use of my strong organizational skills, Microsoft expertise, and ability to work well with people." data-original-title="" title="Good Example"></i>
						</p>
					</div>
				</div>	

				<div class="form-group">
					<label for="seCareerSummary" class="col-md-3 control-label">
						Career Summary
						<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="The career summary section is an optional customized section of a resume that lists key achievements, skills, and experience relevant to the position for which you are applying.The career summary section of your resume focuses on your relevant experience and lets the prospective employer know that you have taken the time to create a resume that shows how you are qualified for the job." data-original-title="" title="What is career summary?"></i>
					</label>
					<div class="col-md-9">
						<textarea class="form-control" rows="4" name="seCareerSummary" placeholder="Write here your career summary.">{{ $profile->seCareerSummary or old('seCareerSummary')}}</textarea>
						<p class="help-block">
							View Example
							<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="01.Your Job title 02.Professional Profile 03.Areas of Expertise" data-original-title="" title="Good Example"></i>
						</p>						
					</div>
				</div>

				<div class="form-group">
					<label for="seSpecialQualification" class="col-md-3 control-label">
						Special Qualification
						<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="Special Qualifications (Replacing the Objective) is 3-5 concise sentences on a resume. It is a summary of your most pertinent experience and qualifications that is customized for the position in which you are applying. " data-original-title="" title="What is Special Qualification?"></i>
					</label>
					<div class="col-md-9">
						<textarea class="form-control" rows="4" name="seSpecialQualification" placeholder="Write here your special qualification.">{{ $profile->seSpecialQualification or old('seSpecialQualification')}}</textarea>
						<p class="help-block">
							View Example
							<i class="fa fa-question-circle-o text-primary cursor" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="top" data-content="Three years experience working in the_______ (fill in the blank) industry Competent at managing responsibilities in a high-volume atmosphere Skilled at interacting with customers of all socioeconomic backgrounds Hard worker, quick learner, and ability to assume responsibility" data-original-title="" title="Good Example"></i>
						</p>						
					</div>
				</div>				
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">

				<div class="form-group">
					<label for="sePresentSalary" class="col-md-5 control-label">Present Salary</label>
					<div class="col-md-7">
						<input class="form-control" value="{{ $profile->sePresentSalary or old('sePresentSalary')}}" name="sePresentSalary"  placeholder="40,000" type="text">
						<p class="help-block">TK/Month</p>
					</div>
				</div>	
				
				<div class="form-group">
					<label for="seJobLevel" class="col-md-5 control-label">Looking for (Job Level)</label>
					<div class="col-md-7">
						<div class="radio">
							<label>
								<input name="seJobLevel" value="Entry" type="radio" {{ ($profile->seJobLevel == 'Entry') ? 'checked' : '' }} >
								
								Entry Level
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seJobLevel" value="Mid" type="radio" {{ ($profile->seJobLevel == 'Mid') ? 'checked' : '' }}>
								Mid Level
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seJobLevel" value="Top" type="radio" {{ ($profile->seJobLevel == 'Top') ? 'checked' : '' }}>
								Top Level
							</label>
						</div>						
					</div>
				</div>					
				
			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label for="seExpectedSalary" class="col-md-5 control-label">Expected Salary</label>
					<div class="col-md-7">
						<input class="form-control" value="{{ $profile->seExpectedSalary or old('seExpectedSalary')}}" name="seExpectedSalary"  placeholder="50,000" type="text">
						<p class="help-block">TK/Month</p>
					</div>
				</div>

				
				<div class="form-group">
					<label for="seAvailable" class="col-md-5 control-label">Available for (Job Nature)</label>
					<div class="col-md-7">
						<div class="radio">
							<label>
								<input name="seAvailable" value="Full time" type="radio" {{ ($profile->seAvailable == 'Full time') ? 'checked' : '' }} >
								
								Full time
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seAvailable" value="Part time" type="radio" {{ ($profile->seAvailable == 'Part time') ? 'checked' : '' }}>
								Part time
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="seAvailable" value="Contract" type="radio" {{ ($profile->seAvailable == 'Contract') ? 'checked' : '' }}>
								Contract
							</label>
						</div>						
					</div>
				</div>	
				
			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<a href="#" class="btn btn-default" id="career-btn">Close</a>
				<button class="btn btn-success" name="seCareer" type="submit">Update</button>
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
	$('#career-update').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#secareer-res').html('');
		
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

			$('#secareer-res').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#secareer-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#career-btn').click(function() {
		
		location.reload();
		
	});	
	
</script>