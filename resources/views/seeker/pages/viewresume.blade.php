@extends('seeker.dashboard')

@section('title','Resume')

@section('seeker')

	<div class="panel panel-default">
		<div class="panel-heading"><i class="fa fa-eye icon-margin-sm" aria-hidden="true"></i>View Resume</div>
		<div class="panel-body">
		@if($profile->seName)
			<div class="row">
				<div class="col-md-12">
					<p>Download Resume as: <a title="Download pdf" style="margin-left:5px;" href="{{ route('pdf') }}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></p>
				</div>
			</div>
			
			{{-- Basic Information Section --}}
						
				<div class="row resume">
					<div class="col-md-9">
						<h3>{{ $profile->seName }}</h3>
						<address>
							<p><strong>Address:</strong> {{ $profile->sePresentAdd }}</p>
							<p><strong>Mobile:</strong> {{ $profile->seMobile }}</p>
							<p><strong>E-mail:</strong> {{ $profile->seEmail }}</p> 						
						</address>
					</div>
					<div class="col-md-3">
						<div class="resume-image text-right" style="float: right; margin: 15px auto 0; width: 110px;">
							<img style="border-radius: 3px;" src="{{ asset('images/avatars') }}/{{ $user->avatar }}" alt="Avatar" />
						</div>
					</div>
				</div>
			
			
			{{-- Objective Section --}}
			@if($profile->seObjective)			
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Career Objective:</strong></div>
							<div class="panel-body">
								{{ $profile->seObjective }}
							</div>
						</div>				
					</div>
				</div>
			@endif
			
			{{-- CareerSummary Section --}}
			@if($profile->seCareerSummary)			
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Career Summary:</strong></div>
							<div class="panel-body">
								{{ $profile->seCareerSummary }}
							</div>
						</div>				
					</div>
				</div>
			@endif
			
			{{-- SpecialQualification Section --}}
			@if( $profile->seSpecialQualification )
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Special Qualification:</strong></div>
							<div class="panel-body">
								{{ $profile->seSpecialQualification }}
							</div>
						</div>				
					</div>
				</div>
			@endif

			{{-- Experiences Section --}}
			@if( $experiences->count() > 0 )
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Employment History:</strong></div>
							<div class="panel-body">
								
								@foreach($experiences as $experience)
								
									<p>{{ $loop->iteration }}. <span style="text-decoration:underline;"><strong>{{ $experience->position }}</strong> ( {{ $experience->startDate }} - {{ $experience->endDate }})</span> </p>
									
									<strong>{{ $experience->company }}</strong> <br />
									
									Company Location: {{ $experience->location }} <br />
									
									<p>Department: {{ $experience->department }}</p>							
								
								@endforeach
								
							</div>
						</div>				
					</div>
				</div>
			@endif

			{{-- Academics Section --}}
			@if( $academics->count() > 0 )
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default" style="border: medium none;">
							<div class="panel-heading"><strong>Academic Qualification:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table table-bordered" style="margin-bottom: 0px;">
									<thead>
										<tr>
											<th>Exam Title</th>
											<th>Concentration/Major</th>
											<th>Institute</th>
											<th>Result</th>
											<th>Passing Year</th>
											<th>Duration</th>
										</tr>
									</thead>
									<tbody>
									
										@foreach($academics as $academic)
											<tr>
												<td>{{ $academic->examTitle }}</td>
												<td>{{ $academic->majorGroup }}</td>
												<td>{{ $academic->instName }}</td>
												
												@if ($academic->resultType === '1')
													
													<td>Marks {{ $academic->marks }} &#37;</td>
													
												@elseif ($academic->resultType === '2')
												
													<td>CGPA {{ $academic->cgpa }} Out of Scale {{ $academic->scale }}</td>
													
												@else
													
													<td>{{ $academic->resultType }}</td>
													
												@endif	
											
												<td>{{ $academic->passYear }}</td>
												
												
												@if( $academic->duration )
													
													<td>{{ $academic->duration }} year(s)</td>
													
												@else
													
													<td style="text-align: center;">&#45;</td>
													
												@endif
												
											</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>				
			@endif

			
			{{-- Training Section --}}
			@if( $trainings->count() > 0 )			
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default" style="border: medium none;">
							<div class="panel-heading"><strong>Training Summary:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table table-bordered" style="margin-bottom: 0px;">
									<thead>
										<tr>
											<th>Training Title</th>
											<th>Topics</th>
											<th>Institute</th>
											<th>Country</th>
											<th>Location</th>
											<th>Year</th>
											<th>Duration</th>
										</tr>
									</thead>
									<tbody>
										@foreach($trainings as $training)
										
											<tr>
												<td>{{ $training->title }}</td>
												<td>{{ $training->topic }}</td>
												<td>{{ $training->institute }}</td>
												<td>{{ $training->country }}</td>
												<td>{{ $training->location }}</td>
												<td>{{ $training->year }}</td>
												<td>{{ $training->duration }} year(s)</td>
											</tr>
											
										@endforeach
																			
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif

			
			{{-- Professional Section --}}
			@if( $professionals->count() > 0 )			
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default" style="border: medium none;">
							<div class="panel-heading"><strong>Professional Qualification:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table table-bordered" style="margin-bottom: 0px;">
									<thead>
										<tr>
											<th>Certification</th>
											<th>Institute</th>
											<th>Location</th>
											<th>From</th>
											<th>To</th>

										</tr>
									</thead>
									<tbody>
									
										@foreach($professionals as $professional)
										
											<tr>
												<td>{{ $professional->certification }}</td>
												<td>{{ $professional->institute }}</td>
												<td>{{ $professional->location }}</td>
												<td>{{ $professional->startDate }}</td>
												<td>{{ $professional->endDate }}</td>
											</tr>
											
										@endforeach
									
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif

			{{-- Career and Application Information Section --}}
			@if( $profile->seJobLevel )				
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Career and Application Information:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table" style="margin-bottom: 0px;">
									<tbody>
										<tr>
											<td>Looking For<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seJobLevel }} level</td>
										</tr>
										<tr>
											<td>Available For<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seAvailable }}</td>
										</tr>
										<tr>
											<td>Present Salary<span class="pull-right">&#58;</span></td>
											<td>Tk. {{ $profile->sePresentSalary }}</td>
										</tr>
										<tr>
											<td>Expected Salary<span class="pull-right">&#58;</span></td>
											<td>Tk. {{ $profile->seExpectedSalary }}</td>
										</tr>
										<tr>
											<td>Preferred Job Category<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->sePreferredCat }}</td>
										</tr>
										<tr>
											<td>Preferred District<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seInsideBd }}</td>
										</tr>									
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif

			{{-- Language Section --}}
			@if( $languages->count() > 0 )				
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default" style="border: medium none;">
							<div class="panel-heading"><strong>Language Proficiency:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table table-bordered" style="margin-bottom: 0px;">
									<thead>
										<tr>
											<th>Language</th>
											<th>Reading</th>
											<th>Writing</th>
											<th>Speaking</th>
										</tr>
									</thead>
									<tbody>
									
										@foreach($languages as $language)
										
											<tr>
												<td>{{ $language->language }}</td>
												<td>{{ $language->reading }}</td>
												<td>{{ $language->writing }}</td>
												<td>{{ $language->speaking }}</td>
											</tr>
											
										@endforeach
																			
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif

			{{-- Personal Details Section --}}
			@if($profile->seName)			
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Personal Details:</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table" style="margin-bottom: 0px;">
									<tbody>
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
											<td>Marital Status<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seMStatus }}</td>
										</tr>
										<tr>
											<td>Nationality<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seNationality }}</td>
										</tr>
										<tr>
											<td>National Id No.<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seNationalId }}</td>
										</tr>
										<tr>
											<td>Religion<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->seReligion }}</td>
										</tr>
										<tr>
											<td>Permanent Address<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->sePermanentAdd }}</td>
										</tr>
										<tr>
											<td>Permanent Address<span class="pull-right">&#58;</span></td>
											<td>{{ $profile->sePresentAdd }}</td>
										</tr>									
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif
			
			{{-- Reference Section --}}
			@if( $references->count() > 0 )				
				<div class="row resume">
					<div class="col-md-12">
						<div class="panel panel-default" style="border: medium none;">
							<div class="panel-heading"><strong>Reference (s):</strong></div>
							<div class="panel-body" style="padding: 0px;">
								<table class="table table-bordered" style="margin-bottom: 0px;">
									<thead>
										<tr>
											<th>Name</th>
											<th>Organization</th>
											<th>Designation</th>
											<th>Mobile</th>
											<th>Email</th>
											<th>Relation</th>
											<th>Phone(Off)</th>
											<th>Address</th>
										</tr>
									</thead>
									<tbody>
									
										@foreach($references as $reference)
										
											<tr>
												<td>{{ $reference->name }}</td>
												<td>{{ $reference->organization }}</td>
												<td>{{ $reference->designation }}</td>
												<td>{{ $reference->mobile }}</td>
												<td>{{ $reference->email }}</td>
												<td>{{ $reference->relation }}</td>
												<td>{{ $reference->phoneOffice }}</td>
												<td>{{ $reference->address }}</td>
											</tr>	
											
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>				
					</div>
				</div>
			@endif
			
		@else
			
			<div class="text-center pad-md">
				<i class="fa fa-briefcase fa-3x" style=" margin-bottom: 20px;" aria-hidden="true"></i> <br />
				<p>Currently no data exist! Please, <br /> 
					<a href="/seeker/edit">edit your profile to see the resume.</a>
				</p>
			</div>
		
		@endif
		</div>
	</div>
	
@endsection