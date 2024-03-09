<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <section class="jumbotron">
    </section>
    <section class="wrapper flex flex-column position-relative">
        <div class="row">
            @foreach ($comics=config('comics') as $comic)                
            <div class="card">
                <div class="card-img">
                    <img src="{{asset($comic['thumb'])}}" alt="{{$comic['series']}}">
                </div>
                <div class="card-text">{{$comic['series']}}</div>
            </div>
            @endforeach
        </div>
        <a href="" class="btn btn-more">LOAD MORE</a>
        <div class="btn btn-label"> CURRENT SERIES</div>
    </section>
</main>
</body>
</html>
