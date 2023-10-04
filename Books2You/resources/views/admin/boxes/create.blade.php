@extends('layouts.appwfooter')

@section('content')
<div class="container">
    <h1>Create New Box</h1>

    <form method="POST" action="{{ route('admin.boxes.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Box Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre ID</label>
            <input type="number" class="form-control" id="genre_id" name="genre_id" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Image Path</label>
            <input type="text" class="form-control" id="image_path" name="image_path" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Box</button>
    </form>
</div>
@endsection