<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Subscription;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function subscriptions()
    {
        $subscriptions = Subscription::with('course','User')->paginate(20);
        return view('admin.subscriptions.subscriptions', compact('subscriptions'));
    }
}
