<form method="post" action="/contact" novalidate>
    @csrf

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <div>
        Naam:
        <br>
        <input type="text" name="naam" placeholder="Naam" value="{{ old('naam') }}"><br>
        @error('naam')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <br>
        Voornaam:
        <br>
        <input type="text" name="voornaam" placeholder="Voornaam" value="{{ old('voornaam') }}"><br>
        @error('voornaam')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <br>
        Email:
        <br>
        <input type="text" name="email" placeholder="johndoe@example.com" value="{{ old('email') }}"><br>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <br>
        Bericht:
        <br>
        <textarea name="bericht" id="bericht" cols="30" rows="10" value="{{ old('bericht') }}"></textarea><br>
        @error('bericht')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <br>
        <input type="submit" value="Verzenden" class="verzenden">
    </div>
</form>
