<section class="inlog-formulier" id="inlog-formulier">
    <form action="/inloggen" method="post" novalidate>
        @csrf
        Gebruikersnaam <br>
        <input type="text" name="username" id="username" value="">
        <br>
        Wachtwoord <br>
        <input type="password" name="password" id="password" value="">
        <input type="submit" class="inloggen" name="inloggen" id="inloggen" value="Inloggen">
    </form>
</section>
