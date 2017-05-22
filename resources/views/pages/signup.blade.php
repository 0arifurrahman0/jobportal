@extends('layouts.master')

@section('title','Search')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="box-md">
			<h3 class="text-center">
				Let's get started! <br />
				First, tell us what you're looking for.	
			</h3>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<i class="fa fa-smile-o fa-5x" aria-hidden="true"></i>
				<h4>I'm looking for work</h4>
				<p>Find your best work and <br /> grow your career.</p>
				<a href="{{ route('register') }}" class="btn btn-success">Work</a>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
				<h4>I want to hire expert</h4>
				<p>Find, collaborate with, <br /> and pay an expert.</p>
				<a href="{{ route('employer.register') }}" class="btn btn-success">Hire</a>					
			</div>
		</div>		
	</div>
</div>

@endsection