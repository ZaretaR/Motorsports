<form method="post" action="/contact" novalidate>
    @csrf

    @if (session('status'))
        <p class="status">{{ session('status') }}</p>
    @endif

    <div>
        Naam:
        <br>
        @error('naam')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="naam" placeholder="Naam" value="{{ old('naam') }}">
    </div>
    <div>
        Voornaam:
        <br>
        @error('voornaam')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="voornaam" placeholder="Voornaam" value="{{ old('voornaam') }}">

    </div>
    <div>
        Email:
        <br>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="email" placeholder="johndoe@example.com" value="{{ old('email') }}">

    </div>
    <div>
        Bericht:
        <br>
        @error('bericht')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <textarea name="bericht" id="bericht" cols="30" rows="10" value="{{ old('bericht') }}"></textarea>
    </div>
    <div>
        <br>
        <input type="submit" value="Verzenden" class="verzenden">
    </div>
</form>
