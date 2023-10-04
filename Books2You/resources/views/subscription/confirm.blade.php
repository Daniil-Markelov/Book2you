@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Subscription') }}</div>

                <div class="card-body">
                    <h2>{{ $box->name }}</h2>
                    <p>{{ $box->description }}</p>
                    <p>Price: €{{ $box->Price }}</p>

                    {{-- Subscription Confirmation Form --}}
                    <form method="POST" action="{{ route('subscribe.process', $box) }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Subscription') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection