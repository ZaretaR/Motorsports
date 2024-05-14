<div class="profiel-pagina">
    <section class="inlog-formulier" id="inlog-formulier">
        <form action="{{ route('login') }}" method="post" novalidate>
            @csrf
            Gebruikersnaam:
            @error('username')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="username" name="username" id="username" value="{{ old('username') }}">
            <br>
            Wachtwoord:
            @error('password')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <input type="password" name="password" id="password">

            <input type="submit" class="inloggen" name="inloggen" id="inloggen" value="inloggen">
    </section>

    <section class="geen-account">
        <p>Nog geen account?
            <button class="aanmeld-knop">
                <a href="{{ route('register') }}">Aanmelden</a>
            </button>
        </p>
    </section>
</div>
