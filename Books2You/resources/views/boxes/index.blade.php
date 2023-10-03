@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center p-4 p-lg-5">
        <p class="fw-bold text-primary mb-2">Our beautiful selection of Boxes</p>
        <h1 class="fw-bold mb-4">Browse all of our Genres,<br />Then choose your Box Size</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($boxes as $box)
            <div class="col-md-4"> <!-- Adjust the column size as per your layout -->
                <div id="box-card" class="p-4 text-center shadow-lg m-5 rounded-5 box-card">
                    <img class="pt-2 w-50" src="{{ asset($box->Image) }}" alt="{{ $box->name }}" />
                    <h3 class="text-white text-center pt-2">{{ $box->name }}</h3>
                    <p class="fw-bold pt-1 text-white p-0 m-0">{{ $box->Price }}</p>
                    <p class="fw-light text-white m-0">{{ $box->description }}</p>
                    <hr class="text-white" />
                    <a class="btn btn-primary btn-box-home" role="button" href="#">Subscribe Now</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

 
@endsection