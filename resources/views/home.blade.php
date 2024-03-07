<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME'), 'DC Comics'}} | Home</title>
</head>
<body>
<header>
        <li><a href="{{ route('header')}}">Header</a></li>
        <li><a href="{{ route('jumbotrone')}}">Jumbotrone</a></li>
        <li><a href="{{ route('main')}}">Main</a></li>
        <li><a href="{{ route('footer')}}">Footer</a></li>
    </header>
</body>
</html>
