<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function confirm(Box $box)
{
    return view('subscription.confirm', compact('box'));
}

public function processSubscription(Request $request, Box $box)
{
    $user = Auth::user();
    // Create a new subscription record
    $subscription = new Subscription();
    $subscription->subscriber_id = $user->id;
    $subscription->box_id = $box->id;
    $subscription->save();

    return redirect()->route('dashboard')->with('success', 'Subscription confirmed successfully!');
}

public function destroy(Subscription $subscription)
{
    
    $subscription->delete();

    return redirect()->route('dashboard')->with('status', 'Subscription deleted successfully');
}
}

