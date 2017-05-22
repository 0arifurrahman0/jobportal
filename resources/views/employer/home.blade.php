@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		
			<div class="btn-group btn-group-justified" style="margin-bottom:50px; margin-top:20px;">
				<a href="/employer/home" class="btn btn-primary">Home</a>
				<a id="employer-profile" class="btn btn-default">Edit account</a>
				<a id="postNewJob" class="btn btn-default">Post a new job</a>
				<a id="empPhoto-show" class="btn btn-default">Photograph</a>
			</div>
			
			{{--  Photograph  --}}
			<div class="" id="empPhoto" style="display:none;">
				<div id="empPhoto-report"></div>
				<div class="text-center well">
					<div class="seeker-image" style="height: 150px; margin: 0 auto 30px; width: 150px;">
						<?php 
						
						$id = auth()->id();

						$brand = \App\Employer::find($id)->profile;

						?>

						<img style="border-radius: 50%;" src="{{ asset('images/brand') }}/{{ $brand->logo }}" alt="No brand logo" />
					</div>
				
					<form action="/employer/logo" method="POST" enctype="multipart/form-data" >
					
						{{ csrf_field() }}
						
						<div class="form-group">
							<input style="display:inline-block;" name="logo" type="file" />
							<p class="help-block">Maximum upload file size: 1 MB. <br /> Image width 300*300 px <strong>optional</strong></p>
						</div>                    
						<input class="btn btn-primary" type="submit" value="Upload"/>
					</form>						
				</div>
			</div>
			
			<script>
				$("#empPhoto-show").click(function(e){
					
					var body = $('body');
					
					$('.employer-show').html('');

					body.find('#empPhoto').show();						
					
				});		
			</script>
			
        </div>
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="employer-show"></div>
		</div>
	</div>
</div>
@endsection
