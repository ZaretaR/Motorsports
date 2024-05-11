@include('includes/nav')
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
