@extends('layouts.app')

@section('content')
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>book</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="py-4 py-xl-5">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                                <div><img class="img-fluid" src="{{ asset('images/box_2.jpg') }}" width="634" height="634" />
                                    <h2 class="text-uppercase fw-bold mb-3  mt-4"><br />Curated, crafted, and delivered to you.<br /><br /></h2>
                                    <p class="mb-4">Unlock Your Next Chapter: Elevate Your Reading Experience with Handpicked Books Delivered Monthly. Discover Stories, Dive into Adventures, and Cultivate Your Love for Reading, One Page at a Time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src="{{ asset('images/small_box.jpg') }}" />
                <h1 class="text-center mt-5">Regular Box Box</h1>
                <p class="text-center"><br />&quot;Discover a world of knowledge in one compact package! Our smaller box with just one book is perfect for those seeking an immersive reading experience. Dive into the captivating story within, explore its depths, and let your imagination soar. It&#39;s not about quantity; it&#39;s about the quality of the journey.&quot;<br /><a class="btn btn-primary btn-box-home" role="button"href="{{ route('boxes.index') }}">Button</a><br /></p>
            </div>
            <div class="col-md-6"><img class="img-fluid" src="{{ asset('images/big_box.jpg') }}" />
                <h1 class="text-center mt-5">Big Book Box</h1>
                <p class="text-center"><br />&quot;Experience the joy of literary exploration with our larger box, featuring three enthralling books! Dive into diverse worlds, meet intriguing characters, and embark on multiple adventures all in one bundle. Expand your horizons, savor the variety, and let your imagination roam free with our bigger box of literary treasures.&quot;<br /><a class="btn btn-primary btn-box-home" role="button" href="{{ route('boxes.index') }}">Button</a><br /></p>
            </div>
        </div>
    </div>
    
</body>

</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
