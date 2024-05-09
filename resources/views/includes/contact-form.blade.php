<form method="post" action="/contact" novalidate>
    @csrf

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <div>
        Naam:
        @error('naam')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="naam" placeholder="Naam" value="{{ old('naam') }}"><br>
    </div>
    <div>
        Voornaam:
        @error('voornaam')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="voornaam" placeholder="Voornaam" value="{{ old('voornaam') }}"><br>
    </div>
    <div>
        Email:
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="email" placeholder="johndoe@example.com" value="{{ old('email') }}"><br>
    </div>
    <div>
        Bericht:
        @error('bericht')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <textarea name="bericht" id="bericht" cols="30" rows="10" value="{{ old('bericht') }}"></textarea><br>
    </div>
    <div>
        <input type="submit" value="Verzenden" class="verzenden">
    </div>
</form>
