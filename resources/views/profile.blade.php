<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    @include('includes/nav')
    @include('auth/login')
    @include('includes/footer')
</body>

</html>
