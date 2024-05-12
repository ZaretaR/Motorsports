<div>
    Titel:
    @error('title')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>

<div>
    Afbeelding uploaden:
    @error('image')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <input type="file" id="image" name="image" value="{{ old('image') }}">
</div>

<div>
    Beschrijving:
    @error('description')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <input type="text" name="description" id="description" value="{{ old('description', $post->description) }}">
</div>

<div>
    <input class="opslaan" type="submit" name="opslaan" id="opslaan" value="Opslaan">
</div>
