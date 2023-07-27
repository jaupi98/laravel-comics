<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
   @include('partials.header')
    <main class="bg-light">
       <div class="container">
            <div class="row">
                @foreach($comics as $comic)
                    <div class="col-12 col-lg-2">
                        <div class="series">
                            <a href="#" >
                                <div class="thumb">
                                    <img src="https://picsum.photos/id/237/200/300" alt="">
                                </div>
                                <p class="text-uppercase">
                                    {{$comic['series']}}
                                </p>
                            </a>                      
                        </div>                       
                    </div>
                @endforeach

            </div>
       </div>
    </main>

</body>

</html>