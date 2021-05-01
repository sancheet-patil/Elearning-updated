@extends('layouts.admin')
@section('admin')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Subscriptions</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Receipt ID</th>
                                    <th>Order ID</th>
                                    <th>User</th>
                                    <th>Course</th>
                                    <th>Total Amount (INR)</th>
                                    <th>Course Fee</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $key => $subscription)
                                    @if ($subscription->user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $subscription->recp_id }}</td>
                                            <td>{{ $subscription->razor_order_id }}</td>
                                            <td>
                                                {{ $subscription->user->first_name . ' ' . $subscription->user->last_name }}
                                            </td>
                                            <td>
                                                {{ $subscription->course ? $subscription->course->course_name : '' }}
                                            </td>
                                            <td>
                                                {{ $subscription->total_amount * 0.01 }}
                                            </td>
                                            <td>{{ $subscription->course_fees * 0.01 }}</td>
                                            <td>{{ $subscription->is_payment_done == 1 ? 'Not Done' : 'Done' }}</td>
                                            <td>
                                                {{ $subscription->order_create_date ? date('d M Y', strtotime($subscription->order_create_date)) : '' }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        {{ $subscriptions->links() }}
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->
        </div>
    </div>
@stop
