@extends('layouts.master')

@section('title','Job')

@section('content')

<div class="row">
	<div class="col-md-10">
			
		<div class="panel panel-default">	
			<div class="panel-body">
			
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-2">
								<img class="media-object" src="{{ asset('images/brand') }}/{{ $job->creator->logo }}" alt="" />
							</div>
							<div class="col-md-10">
								<h4 class="text-success"><strong>{{ $job->title }}</strong></h4>
								<h5 class="text-info"><strong>{{ $job->creator->name }}</strong></h5>							
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							
								<div class="panel-body">
									<p><strong>Vacancy</strong></p>
									<p>{{ $job->vacancie }}</p>
								</div>
								
								<div class="panel-body">
									<p><strong>Job Description / Responsibility</strong></p>
									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										{{ $job->responsibility }}
									</p>									
									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										{{ $job->context }}
									</p>
								</div>

								<div class="panel-body">
									<p><strong>Educational Requirements</strong></p>
									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										{{ $job->qualification }}
									</p>
								</div>

								<div class="panel-body">
									<p><strong>Job Requirements</strong></p>
									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										{{ $job->instruction }}
									</p>
									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										Experience require {{ $job->expFrom }} to {{ $job->expTo }} year(s)
									</p>

									<p>
										<i class="fa fa-hand-o-right icon-margin-sm text-info" aria-hidden="true"></i>
										{{ $job->require }}
									</p>									
								</div>

								<div class="panel-body">
									<p><strong>Job Location</strong></p>
									<p>{{ $job->location }}</p>	
								</div>

								<div class="panel-body">
									<p><strong>Salary Range</strong></p>
									<p>{{ $job->salary }}</p>
								</div>	

								<div class="panel-body">
									<p><strong>Other Benefits</strong></p>
									<p>{{ $job->benefits }}</p>
								</div>								
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">Job Summary</div>
							<div class="panel-body">
							
								<div class="row">
									<div class="col-md-5">
										<p><strong>Published on</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->created_at->diffForHumans() }}</p>							
									</div>
								</div>

								<div class="row">
									<div class="col-md-5">
										<p><strong>Vacancy</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->vacancie }}</p>							
									</div>
								</div>	

								<div class="row">
									<div class="col-md-5">
										<p><strong>Job Nature</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->jobLevel }}</p>							
									</div>
								</div>	

								<div class="row">
									<div class="col-md-5">
										<p><strong>Experience</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->expFrom }} to {{ $job->expTo }} year(s)</p>							
									</div>
								</div>	

								<div class="row">
									<div class="col-md-5">
										<p><strong>Job Location</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->location }}</p>							
									</div>
								</div>		
								
								<div class="row">
									<div class="col-md-5">
										<p><strong>Salary Range</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->salary }}</p>							
									</div>
								</div>								
								
								<div class="row">
									<div class="col-md-5">
										<p><strong>Deadline</strong><span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-7">
										<p>{{ $job->deadline }}</p>							
									</div>
								</div>									
							</div>
						</div>												
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="text-center pad-md">
						
							<!--a href="/job/apply/form" class="btn btn-success">Apply Now</a-->
							
								<div id="apply-res"></div>
							
							@if (Auth::check()) 
								
								
								<form action="/jobs/{{ $job->id }}/apply" method="POST">
								
									{{ csrf_field() }}
									
									<button type="submit" class="btn btn-success" {{ $job->isApplied() ? 'disabled' : '' }}>
										
										Apply Now
										
									</button>
									
								</form>	
								

								<p style="margin-top:10px;">or</p>

								<p>Send your CV to {{ $job->creator->email }} or 
									<a href="mailto:{{ $job->creator->email }}" target="_top">Click here</a> 
									to Email CV from MY {{ config('app.name') }} account.
								</p>								
							
							@else
								
								<a style="margin-bottom:20px;" href="{{ route('login') }}" class="btn btn-success">Login to apply</a>

							@endif

									
							<p><strong>Application Deadline</strong> : {{ $job->deadline }}</p>
						
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="pad-md">
						
							<hr />
							
							<p><strong>Company Information</strong></p>
							
							<address>
							
								<p>{{ $job->creator->details }}</p>
								<p>{{ $job->creator->city }}</p>
								<p>{{ $job->creator->country }}</p>
								<p><a href="{{ $job->creator->url }}">{{ $job->creator->url }}</a></p>
							
							</address>
						
						</div>
					</div>
				</div>				
				
			</div>
		</div>
	

	</div>
	<div class="col-md-2"></div>
</div>


@endsection