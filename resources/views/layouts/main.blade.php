<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="/js/app.js"></script>
</head>
<body>
 @include('includes.header')    
 @include('includes.jumbotron')    
<main>
@yield('content')
</main>
 @include('includes.services')    
 @include('includes.footer')    
 @include('includes.bottomfooter')    
</body>
</html>