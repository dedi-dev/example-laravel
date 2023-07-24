<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | Example</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{$styles}}
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container">
        {{$slot}}
    </div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>