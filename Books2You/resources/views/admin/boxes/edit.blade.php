<form action="{{ route('admin.boxes.update', ['id' => $box->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $box->name }}" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ $box->description }}</textarea>

    <button type="submit">Update</button>
</form>
