<div>
    Titel <br>
    <input type="text" name="titel" id="titel" value="{{ old('title', $post->title) }}">
    @error('titel')
        <span>{{ $message }}</span>
    @enderror
</div>

<div>
    Afbeelding uploaden <br>
    <input type="file" id="afbeelding" name="afbeelding" accept="image/*">
</div>

<div>
    Beschrijving <br>
    <input type="text" name="beschrijving" id="beschrijving" value="{{ old('beschrijving', $post->description) }}">
    @error('beschrijving')
        <span>{{ $message }}</span>
    @enderror
</div>

<div><br>
    <input type="submit" name="toevoegen" id="toevoegen" value="{{ $buttonText ?? 'Toevoegen' }}">
</div>
