@extends('layouts.appwfooter')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        
        <div class="accordion" id="myAccordion">
    <div class="card">
        <div class="card-header" id="section1">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                    Edit Boxes
                </button>
            </h2>
        </div>
        <div id="collapse1" class="collapse" data-parent="#myAccordion">
            <div class="card-body">
                @foreach($boxes as $box)
                <div>
                    <a href="{{ route('admin.boxes.edit', $box) }}">{{ $box->name }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card">
                <div class="card-header" id="section2">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3">
                            Create New Box
                        </button>
                    </h2>
                </div>
                <div id="collapse3" class="collapse" data-parent="#myAccordion">
                    <div class="card-body">
                        <a href="{{ route('admin.boxes.create') }}" class="btn btn-success">Create New Box</a>
                    </div>
                </div>
            </div>
    <div class="card">
        <div class="card-header" id="section3">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2">
                    View And Edit Users
                </button>
            </h2>
        </div>
        <div id="collapse2" class="collapse" data-parent="#myAccordion">
            <div class="card-body">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">View All Users</a>
            </div>
        </div>
    </div>
</div>

</div>

@endsection
