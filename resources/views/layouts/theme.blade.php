@if ($theme[0]->name == 'flatly')

    <link href="{{ asset('css/colors/flatly.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'darkly')

    <link href="{{ asset('css/colors/darkly.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'journal')

    <link href="{{ asset('css/colors/journal.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'lumen')

    <link href="{{ asset('css/colors/lumen.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'readable')

    <link href="{{ asset('css/colors/readable.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'sandstone')

    <link href="{{ asset('css/colors/sandstone.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'slate')

    <link href="{{ asset('css/colors/slate.css') }}" rel="stylesheet">

@elseif ($theme[0]->name == 'solar')

    <link href="{{ asset('css/colors/solar.css') }}" rel="stylesheet">   

@else

    <link href="{{ asset('css/colors/paper.css') }}" rel="stylesheet">

@endif

