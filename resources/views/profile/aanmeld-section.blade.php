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

    <section class="aanmeld-formulier" id="aanmeld-formulier">
        <form action="/aanmelden" method="post" novalidate>
            @csrf
            Voornaam <br>
            <input type="text" name="first_name" id="first_name" value="">
            <br>
            Achternaam <br>
            <input type="text" name="name" id="name" value="">
            <br>
            Email <br>
            <input type="email" name="email" id="email" value="">
            <br>
            Wachtwoord <br>
            <input type="password" name="password" id="password" value="">
            <br>
            Wachtwoord bevestigen <br>
            <input type="password" name="password_confirmation" id="password_confirmation" value="">

            <input type="submit" class="aanmelden" name="aanmelden" id="aanmelden" value="Aanmelden">
    </section>

    <section class="wel-account">
        <p>Heeft u al account?
            <button class="inlog-knop">
                <a href="{{ route('profile') }}">Inloggen</a>
            </button>
        </p>
    </section>

    @include('includes/footer')
</body>

</html>
