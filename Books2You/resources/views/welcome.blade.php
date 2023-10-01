@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="py-4 py-xl-5">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                                <div>
                                    <h2 class="text-uppercase fw-bold mb-3"><br>Curated, crafted, and delivered to you.<br><br></h2>
                                    <p class="mb-4">Unlock Your Next Chapter: Elevate Your Reading Experience with Handpicked Books Delivered Monthly. Discover Stories, Dive into Adventures, and Cultivate Your Love for Reading, One Page at a Time.</p>
                                    <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="{{ route('login') }}">{{ __('Sign Up') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection