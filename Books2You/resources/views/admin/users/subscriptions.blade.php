@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Subscriptions</h1>
    
    @if ($subscriptions)
        <table class="table">
            <thead>
                <tr>
                    <th>Box Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->box->name }}</td>
                        <td>{{ $subscription->start_date }}</td>
                        <td>{{ $subscription->end_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No subscriptions available for this user.</p>
    @endif
</div>
@endsection
