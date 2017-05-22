@extends('seeker.dashboard')

@section('title','Edit')

@section('seeker')

<ul class="nav nav-tabs">

	<li class="active">
		<a href="#personal" data-toggle="tab" aria-expanded="false">
			<i class="fa fa-user-o icon-center" aria-hidden="true"></i> <br />
			Personal
		</a>
	</li>
	
	<li>
		<a href="#education" data-toggle="tab" aria-expanded="true">
			<i class="fa fa-graduation-cap icon-center" aria-hidden="true"></i> <br />
			Education
		</a>
	</li>
	
	<li>
		<a href="#employment" data-toggle="tab" aria-expanded="true">
			<i class="fa fa-briefcase icon-center" aria-hidden="true"></i> <br />
			 Employment
		</a>
	</li>
	
	<li>
		<a href="#information" data-toggle="tab" aria-expanded="true">
			<i class="fa fa-info icon-center" aria-hidden="true"></i> <br />
			 Other Information
		</a>
	</li>	
	
	<li>
		<a href="#photograph" data-toggle="tab" aria-expanded="true">
			<i class="fa fa-picture-o icon-center" aria-hidden="true"></i> <br />
			Photograph
		</a>
	</li>	
	
</ul>
<div id="myTabContent" class="tab-content margin-top">

	
	{{--  Personal  --}}
	<div class="tab-pane fade active in" id="personal">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		
			<div class="panel panel-default" >
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a class="anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-minus-square icon-margin icon-toggle" aria-hidden="true"></i>
							Personal Details
						</a>
					</h4>
				</div>
				
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div id="get-se-personal"></div>
					<div class="personal-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="personal-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-pencil-square-o" style="margin-right:5px;" aria-hidden="true"></i>Edit</a>
						</div>						
						<div class="panel-body">

							<table class="table table-striped table-hover table-responsive">
								<tbody>
									<tr>
										<td>Full Name<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seName }}</td>
									</tr>    
									<tr>
										<td>Father's Name<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seFName }}</td>
									</tr>
									<tr>
										<td>Mother's Name<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seMName }}</td>
									</tr>
									<tr>
										<td>Date of Birth<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seBirthDate }}</td>
									</tr>
									<tr>
										<td>Gender<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seGender }}</td>
									</tr>
									<tr>
										<td>Religion<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seReligion }}</td>
									</tr>
									<tr>
										<td>Marital Status<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seMStatus }}</td>
									</tr>
									<tr>
										<td>Nationality<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seNationality }}</td>
									</tr>
									<tr>
										<td>National Id No<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seNationalId }}</td>
									</tr>
									<tr>
										<td>Present Address<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->sePresentAdd }}</td>
									</tr>
									<tr>
										<td>Permanent Address<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->sePermanentAdd }}</td>
									</tr>	
									<tr>
										<td>Mobile No<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seMobile }}</td>
									</tr>
									<tr>
										<td>Alternate Mobile No<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seMobileAlt }}</td>
									</tr>
									<tr>
										<td>Email<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seEmail }}</td>
									</tr>
									<tr>
										<td>Alternate Email<span class="pull-right">&#58;</span></td>
										<td>{{ $profile->seEmailAlt }}</td>
									</tr>		
								</tbody>
							</table> 
						</div>					
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title">
					<a class="collapsed anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<i class="fa fa-plus-square icon-margin icon-toggle" aria-hidden="true"></i>
					  Career and Application Information
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div id="get-se-career"></div>
					<div class="se-career-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="se-career-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-pencil-square-o" style="margin-right:5px;" aria-hidden="true"></i>Edit</a>
						</div>	
						<div class="panel-body">
							<div class="form-group">
								<label class="bold">Objective</label>
								<p>{{ $profile->seObjective }}</p>
							</div>							
							<div class="form-group">
								<label class="bold">Career Summary</label>
								<p>{{ $profile->seCareerSummary }}</p>
							</div>
							<div class="form-group">
								<label class="bold">Special Qualification</label>
								<p>{{ $profile->seSpecialQualification }}</p>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="bold">Looking for (Job Level)</label>
										<p>{{ $profile->seJobLevel }}</p>
									</div>
									<div class="form-group">
										<label class="bold">Available for (Job Nature)</label>
										<p>{{ $profile->seAvailable }}</p>
									</div>								
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="bold">Present Salary</label>
										<p>Tk. {{ $profile->sePresentSalary}}</p>
									</div>
									<div class="form-group">
										<label class="bold">Expected Salary</label>
										<p>Tk. {{ $profile->seExpectedSalary}}</p>
									</div>								
								</div>
							</div>							
						</div>						
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title">
					<a class="collapsed anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<i class="fa fa-plus-square icon-margin icon-toggle" aria-hidden="true"></i>
					  Other Relevant Information
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div id="get-se-preferred"></div>
					<div class="se-preferred-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="se-preferred-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-pencil-square-o" style="margin-right:5px;" aria-hidden="true"></i>Edit</a>
						</div>	
						<div class="panel-body">
							<div class="form-group">
								<label class="bold">Preferred Job Categories</label>
								<p>{{ $profile->sePreferredCat }}</p>
							</div>															
							<div class="form-group">
								<label class="bold">Preferred Job Location</label> <br />
								
								<div class="row">
									<div class="col-md-6">
										<label>Inside Bangladesh&#58;</label>
										<p>{{ $profile->seInsideBd }}</p>									
									</div>
									<div class="col-md-6">
										<label>Outside Bangladesh&#58;</label>
										<p>{{ $profile->seOutsideBd }}</p>									
									</div>
								</div>

							</div>							
						</div>						
					</div>
				</div>
			</div>
			
		</div>  
	</div>
	
	
	{{--  Education  --}}
	<div class="tab-pane fade " id="education">
		<div class="panel-group" id="education-accordion" role="tablist" aria-multiselectable="true">
		
			<div class="panel panel-default" >
				<div class="panel-heading" role="tab" id="headingFour">
					<h4 class="panel-title">
						<a class="anchor" role="button" data-toggle="collapse" data-parent="#education-accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
							<i class="fa fa-minus-square icon-margin icon-toggle" aria-hidden="true"></i>
							Academic Qualifications 
						</a>
					</h4>
				</div>
				
				<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
					<div id="get-se-academic"></div>
					<div class="academic-body">
						<div class="panel-body">
							<span>Add your academic qualifications to make the profile 100&#37;</span>
							<a href="#" id="academic-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>						
						<div class="panel-body">

							@forelse ($academics as $academic)
							
								<table class="table table-striped table-hover table-responsive">
									<div class="row">
										<div class="col-md-6">
											<p class="bold">Academic Qualification {{ $loop->iteration }}</p>
										</div>
										<div class="col-md-6">
											<div class="pull-right">
												<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
											</div>
										</div>
									</div>
									<tbody>
										<tr>
											<td>Level of Education<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->eduLevel }}</td>
										</tr>    
										<tr>
											<td>Exam/Degree Title<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->examTitle }}</td>
										</tr>
										<tr>
											<td>Concentration/Major/Group<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->majorGroup }}</td>
										</tr>
										<tr>
											<td>Institute Name<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->instName }}</td>
										</tr>
										<tr>
											<td>Result<span class="pull-right">&#58;</span></td>
											
											@if ($academic->resultType === '1')
												
												<td>Marks {{ $academic->marks }} &#37;</td>
												
											@elseif ($academic->resultType === '2')
											
												<td>CGPA {{ $academic->cgpa }} Out of Scale {{ $academic->scale }}</td>
												
											@else
												
												<td>{{ $academic->resultType }}</td>
												
											@endif											
											
											
										</tr>
										<tr>
											<td>Year of Passing<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->passYear }}</td>
										</tr>
										<tr>
											<td>Duration<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->duration }} year(s)</td>
										</tr>
										<tr>
											<td>Achievement<span class="pull-right">&#58;</span></td>
											<td>{{ $academic->achievment }}</td>
										</tr>		
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-graduation-cap fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your academic qualification. </p>
								</div>							
							
							@endforelse
								
						</div>					
					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
					<h4 class="panel-title">
						<a class="collapsed anchor" role="button" data-toggle="collapse" data-parent="#education-accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<i class="fa fa-plus-square icon-margin icon-toggle" aria-hidden="true"></i>
						Training Summary
						</a>
					</h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					<div id="get-se-training"></div>
					<div class="training-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="training-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>
						<div class="panel-body">
							@forelse ($trainings as $training)
								<div class="row">
									<div class="col-md-6">
										<p class="bold">Training {{ $loop->iteration }}</p>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
											<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
										</div>
									</div>
								</div>							
								<table class="table table-striped table-hover table-responsive">

									<tbody>
										<tr>
											<td>Training Title<span class="pull-right">&#58;</span></td>
											<td>{{ $training->title }}</td>
										</tr>    
										<tr>
											<td>Topics Covered<span class="pull-right">&#58;</span></td>
											<td>{{ $training->topic }}</td>
										</tr>
										<tr>
											<td>Institute<span class="pull-right">&#58;</span></td>
											<td>{{ $training->institute }}</td>
										</tr>
										<tr>
											<td>Location<span class="pull-right">&#58;</span></td>
											<td>{{ $training->location }}</td>
										</tr>
										<tr>
											<td>Country<span class="pull-right">&#58;</span></td>
											<td>{{ $training->country }}</td>
										</tr>
										<tr>
											<td>Training Year<span class="pull-right">&#58;</span></td>
											<td>{{ $training->year }} year(s)</td>
										</tr>
										<tr>
											<td>Duration<span class="pull-right">&#58;</span></td>
											<td>{{ $training->duration }}</td>
										</tr>										
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-graduation-cap fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your training summary. </p>
								</div>							
							
							@endforelse							
						</div>							
					</div>
				</div>
			</div>

			
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSix">
					<h4 class="panel-title">
						<a class="collapsed anchor" role="button" data-toggle="collapse" data-parent="#education-accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							<i class="fa fa-plus-square icon-margin icon-toggle" aria-hidden="true"></i>
							Professional Certification 
						</a>
					</h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
					<div id="get-se-professional"></div>
					<div class="professional-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="professional-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>	
						<div class="panel-body">
							@forelse ($professionals as $professional)
								<div class="row">
									<div class="col-md-6">
										<p class="bold">Professional Qualification {{ $loop->iteration }}</p>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
											<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
										</div>
									</div>
								</div>							
								<table class="table table-striped table-hover table-responsive">
									<tbody>
										<tr>
											<td>Certification<span class="pull-right">&#58;</span></td>
											<td>{{ $professional->certification }}</td>
										</tr>    
										<tr>
											<td>Institute<span class="pull-right">&#58;</span></td>
											<td>{{ $professional->institute }}</td>
										</tr>
										<tr>
											<td>Location<span class="pull-right">&#58;</span></td>
											<td>{{ $professional->location }}</td>
										</tr>
										<tr>
											<td>Certification Period<span class="pull-right">&#58;</span></td>
											<td>{{ $professional->startDate }} <span style="font-weight: bold; margin: 0 10px;">To</span> {{ $professional->endDate }}</td>
										</tr>									
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-graduation-cap fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your professional qualification. </p>
								</div>							
							
							@endforelse							
						</div>						
					</div>
				</div>
			</div>			
			
		</div> 
	</div>	
	

	{{--  Employment  --}}
	<div class="tab-pane fade " id="employment">
		<div class="panel-group" id="employment-accordion" role="tablist" aria-multiselectable="true">
		
			<div class="panel panel-default" >
				<div class="panel-heading" role="tab" id="headingSeven">
					<h4 class="panel-title">
						<a class="anchor" role="button" data-toggle="collapse" data-parent="#employment-accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
							<i class="fa fa-minus-square icon-margin icon-toggle" aria-hidden="true"></i>
							Employment History 
						</a>
					</h4>
				</div>
				
				<div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven">
					<div id="get-se-employment"></div>
					<div class="employment-body">
						<div class="panel-body">
							<span>Add your employment history to make the profile 100&#37;</span>
							<a href="#" id="employment-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>						
						<div class="panel-body">

							@forelse ($experiences as $experience)
							
								<table class="table table-striped table-hover table-responsive">
									<div class="row">
										<div class="col-md-6">
											<p class="bold">Experience {{ $loop->iteration }}</p>
										</div>
										<div class="col-md-6">
											<div class="pull-right">
												<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
											</div>
										</div>
									</div>
									<tbody>
										<tr>
											<td>Company Name<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->company }}</td>
										</tr>    
										<tr>
											<td>Company Business<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->business }}</td>
										</tr>
										<tr>
											<td>Designation<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->position }}</td>
										</tr>
										<tr>
											<td>Department<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->department }}</td>
										</tr>										
										<tr>
											<td>Area of Experiences:<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->skill }}</td>
										</tr>
										<tr>
											<td>Responsibilities<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->duty }}</td>
										</tr>
										<tr>
											<td>Company Location<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->location }}</td>
										</tr>
										<tr>
											<td>Employment Period<span class="pull-right">&#58;</span></td>
											<td>{{ $experience->startDate }} <span style="font-weight: bold; margin: 0 10px;">To</span> {{ $experience->endDate }}</td>
										</tr>										
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-briefcase fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your employment history.</p>
								</div>							
							
							@endforelse
								
						</div>					
					</div>
				</div>
			</div>

		</div> 
	</div>
	
	
	{{--  Other Information  --}}
	<div class="tab-pane fade " id="information">
		<div class="panel-group" id="information-accordion" role="tablist" aria-multiselectable="true">
		
			<div class="panel panel-default" >
				<div class="panel-heading" role="tab" id="headingEight">
					<h4 class="panel-title">
						<a class="anchor" role="button" data-toggle="collapse" data-parent="#information-accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
							<i class="fa fa-minus-square icon-margin icon-toggle" aria-hidden="true"></i>
							Language Proficiency
						</a>
					</h4>
				</div>
				
				<div id="collapseEight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEight">
					<div id="get-se-language"></div>
					<div class="language-body">
						<div class="panel-body">
							<span>Add your language proficiency to make the profile 100&#37;</span>
							<a href="#" id="language-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>						
						<div class="panel-body">

							@forelse ($languages as $language)
							
								<table class="table table-striped table-hover table-responsive">
									<div class="row">
										<div class="col-md-6">
											<p class="bold">Language {{ $loop->iteration }}</p>
										</div>
										<div class="col-md-6">
											<div class="pull-right">
												<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
											</div>
										</div>
									</div>
									<tbody>
										<tr>
											<td>Language<span class="pull-right">&#58;</span></td>
											<td>{{ $language->language }}</td>
										</tr>    
										<tr>
											<td>Writing<span class="pull-right">&#58;</span></td>
											<td>{{ $language->writing }}</td>
										</tr>
										<tr>
											<td>Reading<span class="pull-right">&#58;</span></td>
											<td>{{ $language->reading }}</td>
										</tr>
										<tr>
											<td>Speaking<span class="pull-right">&#58;</span></td>
											<td>{{ $language->speaking }}</td>
										</tr>	
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-language fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your language proficiency.</p>
								</div>							
							
							@endforelse
								
						</div>					
					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingNine">
					<h4 class="panel-title">
						<a class="collapsed anchor" role="button" data-toggle="collapse" data-parent="#information-accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
							<i class="fa fa-plus-square icon-margin icon-toggle" aria-hidden="true"></i>
						References 
						</a>
					</h4>
				</div>
				<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
					<div id="get-se-reference"></div>
					<div class="reference-body">
						<div class="panel-body">
							<span>Fill&#45;up all the fields to make the profile 100&#37;</span>
							<a href="#" id="reference-edit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle icon-margin-sm" aria-hidden="true"></i>Add New</a>
						</div>
						<div class="panel-body">
							@forelse ($references as $reference)
								<div class="row">
									<div class="col-md-6">
										<p class="bold">Reference {{ $loop->iteration }}</p>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											<a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit</a>
											<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o icon-margin-sm" aria-hidden="true"></i>Del</a>									
										</div>
									</div>
								</div>							
								<table class="table table-striped table-hover table-responsive">

									<tbody>
										<tr>
											<td>Name<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->name }}</td>
										</tr> 
										<tr>
											<td>Organization<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->organization }}</td>
										</tr>										
										<tr>
											<td>Designation<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->designation }}</td>
										</tr>
										<tr>
											<td>Mobile<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->mobile }}</td>
										</tr>
										<tr>
											<td>Email<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->email }}</td>
										</tr>
										<tr>
											<td>Relation<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->relation }}</td>
										</tr>
										<tr>
											<td>Phone(Off)<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->phoneOffice }}</td>
										</tr>										
										<tr>
											<td>Address<span class="pull-right">&#58;</span></td>
											<td>{{ $reference->address }}</td>
										</tr>										
									</tbody>
								</table>							
							
							@empty
							
								<div class="pad-md text-center">
									<i class="fa fa-users fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i>
									<p>Currently no data exist! Please click on the <strong>Add New</strong> <br /> button to add your reference.</p>
								</div>							
							
							@endforelse							
						</div>							
					</div>
				</div>
			</div>

		</div> 
	</div>	
	
	{{--  Photograph  --}}
	<div class="tab-pane fade " id="photograph">
	
		<div id="avatar-report"></div>
		<div class="text-center well">
			<div class="seeker-image" style="height: 150px; margin: 0 auto 30px; width: 150px;">
				<img style="border-radius: 50%;" src="{{ asset('images/avatars') }}/{{ $user->avatar }}" alt="Avatar" />
			</div>
		
			<form action="/seeker/avatar" method="POST" enctype="multipart/form-data" id="upload-avatar">
			
				{{ csrf_field() }}
				
				<div class="form-group">
					<input style="display:inline-block;" name="avatar" type="file" />
					<p class="help-block">Maximum upload file size: 1 MB. <br /> Image width 300*300 px <strong>optional</strong></p>
				</div>                    
				<input class="btn btn-primary" type="submit" value="Upload"/>
			</form> 
			
		</div>
	</div>	

</div>

@endsection