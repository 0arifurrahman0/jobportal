{{-- Meta Tag --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Title --}}
<title>{{ config('app.name') }}-@yield('title')</title>

{{-- Favicon Icon --}}
<link rel="icon" href="">

{{-- Styles --}}
@include ('layouts.theme')

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/ui.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

{{-- Scripts --}}
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

