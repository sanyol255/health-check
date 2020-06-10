<!DOCTYPE html>
<html lang="uk-UA">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar')
    <div class="container-fluid">@yield('content')</div>    
    @include('partials.footer')
</body>
</html>