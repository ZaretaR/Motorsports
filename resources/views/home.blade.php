<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRT Motorsports</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <img src="images/achtergrond.jpg" alt="achtergrond">
        @include('includes/nav')
        <h1>GRT MOTORSPORTS</h1>
        <a href="{{ route('events') }}">Bekijk onze kalender</a>
        <i class="fa-solid fa-arrow-pointer" style="color: #ffffff;"></i>
    </header>

    @include('includes/motorsport')
    @include('includes/trackday')
    @include('includes/footer')
</body>

</html>
