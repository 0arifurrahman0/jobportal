<!-- demo pannel start -->	
<section>
	<div class="demo_panel">
		<span id="open_panel" class="control-panel"><i class="fa fa-cog fa-spin fa-2x fa-fw"></i></span>
		<span style="display:none;" id="close_panel" class="control-panel"><i class="fa fa-times fa-spin fa-2x fa-fw"></i></span>
		<div class="color_change">
		
			<form action="/theme" class="form-horizontal" method="POST" id="change-theme">
			
				{{ csrf_field() }}
				
				<div class="form-group">
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="paper" type="radio">
							Default
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="flatly" type="radio">
							Flatly
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="darkly" type="radio">
							Darkly
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="journal" type="radio">
							Journal
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="lumen" type="radio">
							Lumen
						</label>
					</div>					
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="readable" type="radio">
							Readable
						</label>
					</div>				
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="sandstone" type="radio">
							Sandstone
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="slate" type="radio">
							Slate
						</label>
					</div>
					<div class="radio">
						<label>
							<input name="name" class="change-theme" value="solar" type="radio">
							Solar
						</label>
					</div>
				</div>
				<button class="btn btn-primary btn-sm" name="submit" type="submit">Change</button>
			</form> 		
	
		</div>
		<div class="background_change"></div>
	</div>	
</section>
<!-- demo pannel end -->

<footer class="well" style="margin-bottom:0px; margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social text-center">

					<a href="#"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>				

				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center" style="margin-bottom:0">
					<p>Laravel {{ config('app.name') }} &copy; {{ date('Y') }} by <a target="_blank" href="http://mdarifurrahman.com">Md Arifur Rahman</a></p>	
				</div>	
			</div>
		</div>
	</div>  
</footer>
<div id="loader"></div>

{{-- Scripts --}}
<!-- <script src="{{ asset('js/jquery.js') }}"></script> -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/ui.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


<script>
$(document).ready(function(){

	$("#open_panel").click(function(){
		$(".demo_panel").animate({'left': '0px'}, 'slow');
		$(this).hide();
		$("#close_panel").css('display','block');
	});	
	$("#close_panel").click(function(){
		$(".demo_panel").animate({'left':'-200px'}, 'slow');
		$(this).hide();
		$("#open_panel").css('display','block');
	});

	
	$('#change-theme').on('submit', function(e){
		
		e.preventDefault(e);
		
		var method = $(this).attr('method');
		
		var url = $(this).attr('action');
		
		var data = $(this).serialize();

		$.ajax({
			
			method: method,
			url: url,
			data: data,
			dataType: 'json',
			cache: false
			
		}).done(function(res){

			window.setTimeout(function(){location.reload()},10); 

			
		}).fail(function(res){
			
			console.log(res); 
		});
		
	});	
	
});
</script>
