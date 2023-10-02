@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        @foreach($boxes as $box)
    <a href="{{ route('admin.boxes.edit', $box) }}"> {{ $box->name }}</a>
@endforeach
    </div>
@endsection
