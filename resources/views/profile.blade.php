<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <!-- <button class="inlog-knop">Inloggen</button> -->


    @include('profile/inlog-section')
    <section class="geen-account">
        <p>Nog geen account?
            <button class="aanmeld-knop">
                <a href="{{ route('aanmelden') }}">Aanmelden</a>
            </button>
        </p>
    </section>

    @include('includes/footer')
</body>

</html>
