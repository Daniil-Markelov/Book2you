<form action="{{ route('admin.boxes.update', ['id' => $box->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $box->name }}" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ $box->description }}</textarea>

    <div class="form-group">
        <label for="genre_id">Genre</label>
        <select name="genre_id" id="genre_id" class="form-control">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ $box->genre_id == $genre->id ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Update</button>

</form>
<form action="{{ route('admin.boxes.destroy', ['id' => $box->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>


