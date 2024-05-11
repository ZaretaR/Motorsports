<div>
    Titel:
    @error('title')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>


<div>
    Afbeelding uploaden <br>
    <input type="file" id="picture" name="picture" accept="image/*">
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
    <input class="toevoegen" type="submit" name="toevoegen" id="toevoegen" value="Toevoegen">
</div>
