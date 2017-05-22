<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>pdf</title>

	<style>
		body{
			background-color:#fff;
			line-height: 1.42857;
			font-size: 11px;
		}
		h3{
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
			margin:0px;
			color:#2c3e50;
		}
		p{
			margin-bottom:5px;
		}
		address {
			font-style: normal;
		}
		.row{
			width:100%;
		}
		.panel {
			background-color: #ffffff;
			border: 1px solid #ecf0f1;
			border-radius: 4px;
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			margin-bottom: 15px;
		}
		.panel-heading {
			background-color: #ecf0f1;
			border-color: #ecf0f1;
			color: #2c3e50;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			padding: 10px;
		}
		.panel-body {
			padding: 10px;
		}
		.table {
		  margin-bottom: 15px;
		  max-width: 100%;
		  width: 100%;
		  border-collapse: collapse;
		border-spacing: 0;
		}
		.table-bordered {
		  border: 1px solid #ecf0f1;
		}

		.table > thead > tr > th {
			vertical-align: bottom;
			padding: 5px;
			border-top: 0 none;
			text-align: left;
		}
		table-bordered > thead > tr > th, .table-bordered > thead > tr > th, table-bordered > tbody > tr > th, .table-bordered > tbody > tr > th, table-bordered > tfoot > tr > th, .table-bordered > tfoot > tr > th, table-bordered > thead > tr > td, .table-bordered > thead > tr > td, table-bordered > tbody > tr > td, .table-bordered > tbody > tr > td, table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > td{
			border: 1px solid #ecf0f1;
			padding: 5px;
			vertical-align: top;	
		}
		.pull-right {
			margin-right: 10px;
			font-weight:bold;
		}
		.page-break {
			page-break-after: always;
		}
	</style>	
</head>
<body>
	<div class="container">
		{{-- Experiences Section --}}
		@if($profile->seName)			
			<table style="width:100%; margin-bottom: 15px;">
				<tbody>
					<tr>
						<td style="width:70%; float:left;">
							<h3>{{ $profile->seName }}</h3>
							<address>
								<p><strong>Address:</strong> {{ $profile->sePresentAdd }}</p>
								<p><strong>Mobile:</strong> {{ $profile->seMobile }}</p>
								<p><strong>E-mail:</strong> {{ $profile->seEmail }}</p> 						
							</address>						
						</td>
						<td style="width:30%; text-align:right;">
							<img style="border-radius: 3px; width:105px;" src="images/avatars/{{ $user->avatar }}" alt="Avatar" />
						</td>
					</tr>
				</tbody>
			</table>
		@endif
		
		{{-- Experiences Section --}}
		@if($profile->seObjective)			
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Career Objective:</strong></div>
					<div class="panel-body">
						{{ $profile->seObjective }}
					</div>
				</div>	
			</div>
		@endif
		
		{{-- Experiences Section --}}
		@if($profile->seCareerSummary)			
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Career Summary:</strong></div>
					<div class="panel-body">
						{{ $profile->seCareerSummary }}
					</div>
				</div>	
			</div>
		@endif
		
		{{-- Experiences Section --}}
		@if( $profile->seSpecialQualification )
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Special Qualification:</strong></div>
					<div class="panel-body">
						{{ $profile->seSpecialQualification }}
					</div>
				</div>
			</div>
		@endif
		
		{{-- Experiences Section --}}
		@if($experiences)
			<div class="row">
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
		@endif

		{{-- Academics Section --}}
		@if( $academics )
			<div class="row">
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
											
											<td>&#45;</td>
											
										@endif
										
									</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>
				</div>
			</div>				
		@endif

		
		{{-- Training Section --}}
		@if( $trainings )			
			<div class="row">
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
		@endif

		
		{{-- Professional Section --}}
		@if( $professionals )			
			<div class="row">
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
		@endif

		{{-- Career and Application Information Section --}}
		@if( $profile->seJobLevel )				
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Career and Application Information:</strong></div>
					<div class="panel-body">
						<table class="table" style="margin-bottom: 0px;">
							<tbody>
								<tr>
									<td>Looking For</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seJobLevel }} level</td>
								</tr>
								<tr>
									<td>Available For</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seAvailable }}</td>
								</tr>
								<tr>
									<td>Present Salary</td>
									<td><span class="pull-right">&#58;</span>Tk. {{ $profile->sePresentSalary }}</td>
								</tr>
								<tr>
									<td>Expected Salary</td>
									<td><span class="pull-right">&#58;</span>Tk. {{ $profile->seExpectedSalary }}</td>
								</tr>
								<tr>
									<td>Preferred Job Category</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->sePreferredCat }}</td>
								</tr>
								<tr>
									<td>Preferred District</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seInsideBd }}</td>
								</tr>									
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif

		{{-- Language Section --}}
		@if( $languages )				
			<div class="row">
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
		@endif

		{{-- Personal Details Section --}}
		@if($profile->seName)			
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>Personal Details:</strong></div>
					<div class="panel-body">
						<table class="table" style="margin-bottom: 0px;">
							<tbody>
								<tr>
									<td>Father's Name</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seFName }}</td>
								</tr>
								<tr>
									<td>Mother's Name</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seMName }}</td>
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seBirthDate }}</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seGender }}</td>
								</tr>
								<tr>
									<td>Marital Status</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seMStatus }}</td>
								</tr>
								<tr>
									<td>Nationality</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seNationality }}</td>
								</tr>
								<tr>
									<td>National Id No.</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seNationalId }}</td>
								</tr>
								<tr>
									<td>Religion</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->seReligion }}</td>
								</tr>
								<tr>
									<td>Permanent Address</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->sePermanentAdd }}</td>
								</tr>
								<tr>
									<td>Permanent Address</td>
									<td><span class="pull-right">&#58;</span>{{ $profile->sePresentAdd }}</td>
								</tr>									
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif
		
		{{-- Reference Section --}}
		@if( $references )				
			<div class="row">
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
		@endif	
	</div>
</body>
</html>