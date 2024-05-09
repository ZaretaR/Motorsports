<div>
    Titel <br>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
    @error('title')
        <span>{{ $message }}</span>
    @enderror
</div>


<div>
    Afbeelding uploaden <br>
    <input type="file" id="picture" name="picture" accept="image/*">
</div>

<div>
    Beschrijving <br>
    <input type="text" name="description" id="description" value="{{ old('description', $post->description) }}">
    @error('description')
        <span>{{ $message }}</span>
    @enderror
</div>

<div><br>
    <input type="submit" name="toevoegen" id="toevoegen" value="{{ $buttonText ?? 'Toevoegen' }}">
</div>
