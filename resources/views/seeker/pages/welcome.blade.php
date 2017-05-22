@extends('seeker.dashboard')

@section('title','Welcome')

@section('seeker')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
{{-- Indicators --}}
  <ol class="carousel-indicators">
	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  {{-- Wrapper for slides --}}
  <div class="carousel-inner" role="listbox">
	<div class="item active">
	  <img src="{{ asset('images/seeker01.jpg') }}" alt="">
	  <div class="carousel-caption">

	  </div>
	</div>
	<div class="item">
	  <img src="{{ asset('images/seeker02.jpg') }}" alt="">
	  <div class="carousel-caption">

	  </div>
	</div>
	<div class="item">
	  <img src="{{ asset('images/seeker03.jpg') }}" alt="">

	</div>    
  </div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default margin-top">
			<div class="box-md">
				<h4>Admin Tips</h4>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default margin-top">
			<div class="box-md">
				<h4>Admin Tips</h4>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
		</div>			
	</div>
</div>

@endsection