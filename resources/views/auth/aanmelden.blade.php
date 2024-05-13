<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/layout.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <section class="aanmeld-formulier" id="aanmeld-formulier">
        <form action="{{ route('register') }}" method="post" novalidate>
            @csrf
            Gebruikersnaam:
            @error('username')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            <br>
            Email:
            @error('email')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            <br>
            Wachtwoord:
            @error('password')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="password" name="password" id="password">
            <br>
            Wachtwoord bevestigen:
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="password" name="password_confirmation" id="password_confirmation">

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
