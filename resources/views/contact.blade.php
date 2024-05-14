<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    @include('includes/nav')

    <div class="contact-formulier">
        <h3>Contact formulier</h3>
        @include('includes/contact-form')
    </div>

    @include('includes/footer')

</body>

</html>
