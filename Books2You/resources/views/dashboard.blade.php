@extends('layouts.appwfooter')

@section('content')
<div class="container">
    <h2>Your Dashboard</h2>
    <!-- profile update -->
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="accordion" id="dashboardAccordion">
        
        <div class="card">
            <div class="card-header" id="section1">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                        Edit Your Profile
                    </button>
                </h2>
            </div>
            <div id="collapse1" class="collapse" data-parent="#dashboardAccordion">
                <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
    <div class="card-header" id="section2">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3">
                Change Password
            </button>
        </h2>
    </div>
    
    <div id="collapse3" class="collapse" data-parent="#dashboardAccordion">
        <div class="card-body">
            <form method="POST" action="{{ route('profile.password.update') }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>
</div>
        
        <div class="card">
            <div class="card-header" id="section3">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2">
                        View and Cancel Subscriptions
                    </button>
                </h2>
            </div>
            <div id="collapse2" class="collapse" data-parent="#dashboardAccordion">
                <div class="card-body">
                    @if ($user->subscriptions->count() > 0)
                        <ul>
                            @foreach ($user->subscriptions as $subscription)
                            <li class="mt-4">
                                {{ $subscription->box->name }} - {{ $subscription->start_date }} to {{ $subscription->end_date }}
                                <form method="POST" action="{{ route('subscriptions.delete', $subscription) }}">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger mt-2">Cancel</button>
                                </form>
                                </li>
                                
                            @endforeach
                            <button class="btn btn-primary mt-3" onclick="window.location.href='{{ route('boxes.index') }}'">
                             Browse More Boxes
                            </button>
                        </ul>
                    @else
                        <p>You have no subscriptions.</p>
                        <button class="btn btn-primary" onclick="window.location.href='{{ route('boxes.index') }}'">
                        Browse and Subscribe to a Box Today
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

