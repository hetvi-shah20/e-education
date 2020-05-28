<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Charts</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">Charts with Laravel</h1>
    <br>
    {!! $chart->html() !!}

    {!! $chart2->html() !!}
    
</div>

{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $chart2->script() !!}
</body>
</html>