<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.js')}}
    {{HTML::style('css/bootstrap.css')}}

</head>

<body>
<div class="row-fluid">
    <div class="span12 well">
        <h2>Some website</h2>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-list">
           @if(Auth::user())
                <li class="row-header">{{ ucwords(Auth::user()=>username) }}</li>
            @else
            <li>{{ HTML::link('login', 'Login') }}</li>
            @endif
        </ul>
    </div>
    <div class="span9">
        @yield('content')
    </div>
</div>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>