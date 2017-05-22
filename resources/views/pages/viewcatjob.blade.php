@extends('layouts.master')

@section('title','Category')

@section('content')

<div class="row">
	<div class="col-md-9">
	
		@foreach($jobs as $job)
		
				<div class="panel panel-default">	
					<div class="panel-body">
					
						<div class="row">
							<div class="col-md-2">
								<a href="{{ $job->path() }}">
									<img class="media-object" src="{{ asset('images/brand') }}/{{ $job->creator->logo }}" alt="" />
								</a>							
							</div>
							<div class="col-md-10">
							
								<a href="{{ $job->path() }}">{{ $job->title }}</a>
								
								<div class="row">
									<div class="col-md-9">
										<p><strong>{{ $job->creator->name }}</strong></p>
									</div>
									<div class="col-md-3">
										<span class="label label-info pull-right">Deadline: {{ $job->deadline }}</span>
									</div>
								</div>								
								
								<div class="row">
									<div class="col-md-3">
										<p>Education<span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-9">
										<p>{{ $job->qualification }}</p>							
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<p>Experience<span class="pull-right">&#58;</span></p>
									</div>
									<div class="col-md-9">
										<p>{{ $job->expFrom }} to {{ $job->expTo }} year(s) </p>
									</div>
								</div>								
							</div>
						</div>

					</div>
				</div>
		
		@endforeach

	</div>
</div>

@endsection