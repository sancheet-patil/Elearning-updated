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
                                    <th>User</th>
                                    <th>Course</th>
                                    <th>Total Amount</th>
                                    <th>Course Fee</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $key => $subscription)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $subscription->user->name }}</td>
                                        <td>
                                            {{ $subscription->course ? $subscription->course->course_name : '' }}
                                        </td>
                                        <td>{{ $subscription->total_amount . ' ' . $subscription->currency }}</td>
                                        <td>{{ $subscription->course_fees }}</td>
                                        <td>{{ $subscription->order_create_date ? date('d M Y', strtotime($subscription->order_create_date)) : '' }}
                                        </td>
                                    </tr>
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
