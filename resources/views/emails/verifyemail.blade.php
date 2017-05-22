@component('mail::message')
#Email address verification needed.

Welcome, {{ $user->name }}

Thank you for taking the time to sign up with {{ config('app.name') }}! To get things going we need to verify that this is a valid email address. Please click the button below to confirm your email account.

<p style="text-align:center;">
	<a style="background-color: #2196f3; border-color: #2196f3; border-radius: 3px; border-style: solid; border-width: 10px 18px; box-sizing: border-box; color: #fff; display: inline-block; font-family: Avenir,Helvetica,sans-serif; text-decoration: none;" href="{{ route("verifyEmail", ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}">
		Confirm Registration
	</a>
</p>

We are happy trying to create the best possible job items for you and look forward to keeping in touch with you! 

Enjoy your browsing,<br>
{{ config('app.name') }}
@endcomponent

