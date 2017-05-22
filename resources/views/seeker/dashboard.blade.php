<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

	<head>
		@include('layouts.head')
		
		@yield('style')
	</head>

  <body>

	{{-- Navigation --}}
    @include ('layouts.nav')

	<section id="seeker">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="btn-group-vertical left-sidebar">
						<a href="#" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
						
						
						<a href="{{ route('viewResume') }}" class="btn btn-default"><i class="fa fa-address-card-o" aria-hidden="true"></i>View Resume</a>
						<a href="{{ route('seekeredit') }}" class="btn btn-default"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Resume</a>
						<a href="#" class="btn btn-default"><i class="fa fa-cloud-upload" aria-hidden="true"></i>Upload Resume</a>
						<a href="#" class="btn btn-default"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Email Resume</a>
						<a href="#" class="btn btn-default"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete Resume</a>
						
						<a href="#" class="btn btn-primary">MY ACTIVITIES</a>
						<a href="#" class="btn btn-default">Online Application</a>
						<a href="#" class="btn btn-default">Emailed Resume</a>
						<a href="#" class="btn btn-default">Shortlisted Job</a>
						<a href="#" class="btn btn-default">Following Employer</a>
						
						<a href="#" class="btn btn-primary">EMPLOYER ACTIVITIES</a>
						<a href="#" class="btn btn-default">Employer Viewed Resume</a>
						<a href="#" class="btn btn-default">Employer Invitation</a>
						
						<a href="#" class="btn btn-primary">PERSONALIZATION</a>
						<a href="#" class="btn btn-default">Job Agent</a>
						<a href="#" class="btn btn-default">Block Employer</a>
						<a href="#" class="btn btn-default">Email Notification</a>
						<a href="#" class="btn btn-default">Trainings</a>
					</div>
				</div>
				<div class="col-md-9">
				
					@yield('seeker')
					
				</div>
			</div>
		</div>
	</section>

    @include('layouts.footer')

  </body>
</html>