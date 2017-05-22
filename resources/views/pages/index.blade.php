@extends('layouts.master')

@section('title','Home')

@section('content')

<div class="row">
	<div class="col-md-9">
		<div class="well" style="overflow: hidden;">
			<div class="col-md-12">
				<h3 style="font-size:24px;">Find the right job</h3>
			</div>
			<form class="">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="Company Name / Job Title..." />
					</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<select class="form-control">
							<option value="">Choose Location</option>
							<option value="1">Barisal</option>
							<option value="2">Chittagong</option>
							<option value="3">Dhaka</option>
							<option value="4">Khulna</option>
							<option value="8">Mymensingh</option>
							<option value="9">Outside Bangladesh</option>
							<option value="5">Rajshahi</option>
							<option value="7">Rangpur</option>
							<option value="6">Sylhet</option>
						</select>
					</div>	
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default btn-block">Search</button>
				</div>
			</form>
		</div>			
	</div>
	<div class="col-md-3">
		<img src="{{ asset('images/seeker01.jpg') }}" alt="" />
	</div>
</div>

<div class="row">
	<div class="col-md-9">
			<div class="well">
				<p><strong><i class="fa fa-list icon-margin" aria-hidden="true"></i>Browse Category</strong></p>
				<div class="category">
					<div class="row">
						<div class="col-md-12">
							<ul class="list-group homjobcat">
							
								@foreach($categories as $category)
								
									<li class="list-group-item">
										<span class="badge">{{ $category->totaljobs_count }}</span>
										<a href="/job/{{ $category->slug }}">{{ $category->name }}</a>
									</li>
								
								@endforeach

							</ul>				
						</div>
					</div>
				</div>
			</div>		
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">Latest Jobs</div>
			<div class="panel-body">
				@foreach($jobs as $job)
				
					<p><a href="{{ $job->path() }}">{{ $job->title }}</a></p>
				
				@endforeach
			</div>
		</div>	
	</div>
</div>

<div class="row">
			<div class="col-sm-12">
			
				<p>
					<strong>
						<i class="fa fa-briefcase icon-margin" aria-hidden="true"></i>Hot Jobs
					</strong>
				</p>
				<hr />			
			
			</div>
	<div class="col-md-9">
		<div class="hotJobs row">
			
			@foreach($jobs as $job)
			
				<div class="col-sm-4">
					<div class="media well">
						<div class="pull-left">
							<a href="{{ $job->path() }}">
								<img class="media-object" src="{{ asset('images/brand') }}/{{ $job->creator->logo }}" alt="{{ $job->creator->name }}" />
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">
								<a href="{{ $job->path() }}">{{ $job->creator->name }}</a>
							</h4>
							{{ $job->title }} <br />

							{{ $job->created_at->diffForHumans() }}
						</div>
					</div>				
				</div>

			@endforeach

		</div>
	</div>
	<div class="col-md-3">
		<img src="{{ asset('images/seeker02.jpg') }}" alt="" />
	</div>
</div>

@endsection