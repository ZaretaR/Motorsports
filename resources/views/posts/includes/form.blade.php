<div>
    Titel:
    <br>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"><br>
    @error('title')
        <span>{{ $message }}</span>
    @enderror
</div>

<div>
    <br>
    Afbeelding uploaden:
    <br>
    <input type="file" id="image" name="image" value="{{ old('image') }}"><br>
    @error('image')
        <span>{{ $message }}</span>
    @enderror
</div>

<div>
    <br>
    Beschrijving:
    <br>
    <input type="text" name="description" id="description" value="{{ old('description', $post->description) }}"><br>
    @error('description')
        <span>{{ $message }}</span>
    @enderror
</div>

<div>
    <br>
    <input class="opslaan" type="submit" name="opslaan" id="opslaan" value="Opslaan">
</div>
