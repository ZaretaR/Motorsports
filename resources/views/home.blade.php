<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRT Motorsports</title>
    @vite(['resources/css/layout.css', 'resources/js/app.js'])
</head>

<body>
    @include('includes/home-nav')
    @include('includes/motorsport')
    @include('includes/trackday')
    @include('includes/footer')
</body>

</html>
