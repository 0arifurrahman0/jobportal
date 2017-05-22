<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input class="form-control" placeholder="Search" type="text">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			
			

			<ul class="nav navbar-nav navbar-right">

				<li><a target="_blank" href="http://forum.mdarifurrahman.com/">Forum</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Career Resources <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				
				@if(Auth::guest())
					
				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-sign-in" aria-hidden="true"></i>
							&nbsp;LOGIN
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('login') }}">Seeker</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('employer.login') }}">Employeer</a></li>
						</ul>						
					</li>
					<li>
						<a href="{{ route('signup') }}"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;SIGN UP</a>
					</li>
					

				@else

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

							<img src="{{ asset('images/avatars') }}/{{ Auth::user()->avatar }}" alt="&nbsp;" style=" border-radius: 50%; height: 20px; margin-right: 5px; width: 20px;" />
							{{ Auth::user()->name }} <span class="caret"></span>	

						</a>

						<ul class="dropdown-menu" role="menu">
						

								
								<li><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer icon-margin-sm" aria-hidden="true"></i>Dashboard</a></li>
								
								<li><a href="{{ route('seekeredit') }}"><i class="fa fa-pencil-square-o icon-margin-sm" aria-hidden="true"></i>Edit Account</a></li>	

								<li class="divider"></li>								

							
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									<i class="fa fa-sign-out icon-margin-sm" aria-hidden="true"></i>Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>

				@endif			

			</ul>	

		</div>
	</div>
</nav>