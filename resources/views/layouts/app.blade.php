<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body>
@if(session()->has('success'))
    {{ session('success') }}
@endif
<h1>@yield('title')</h1>
<div>
    @yield('content')
</div>
</body>
</html>
