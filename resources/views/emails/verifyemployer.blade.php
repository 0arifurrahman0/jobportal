@component('mail::message')
#Email address verification needed.

Welcome, {{ $employer->name }}

Thank you for taking the time to sign up with {{ config('app.name') }}! To get things going we need to verify that this is a valid email address. Please click the button below to confirm your email account.

<p style="text-align:center;">
	<a style="background-color: #2196f3; border-color: #2196f3; border-radius: 3px; border-style: solid; border-width: 10px 18px; box-sizing: border-box; color: #fff; display: inline-block; font-family: Avenir,Helvetica,sans-serif; text-decoration: none;" href="{{ route("verifyEmployer", ["email" => $employer->email, "verifyToken" => $employer->verifyToken]) }}">
		Confirm Registration
	</a>
</p>

We are happy trying to search the best possible expert worker for you and look forward to keeping in touch with you! 

Enjoy your browsing,<br>
{{ config('app.name') }}
@endcomponent

