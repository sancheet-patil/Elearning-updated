@extends('layouts.teacher')

@section('css')
<style>
.progress-container {
  width: 100%;
}  

.stepped-progress {
    display: table;
    width: 100%;
    height: 80px; }

    .stepped-progress::before {
        content: "";
        display: table-cell;
        width: 14px; }

    .stepped-progress::after {
        content: "";
        display: table-cell;
        width: 28px; }

    .stepped-progress .step-grid {
      display: table-cell;
      width: 18px; }
    .stepped-progress .bar-grid {
      display: table-cell;
      width: auto; }

    .stepped-progress .step-grid .circle {
      position: absolute;
      width: 34px;
      height: 34px;
      border-radius: 34px;
      background: #d7d7d7;
      vertical-align: top; }
      .stepped-progress .circle .label {
        display: inline-block;
        position: relative;
        width: 26px;
        height: 26px;
        line-height: 26px;
        border-radius: 26px;
        font-size: 14px;
        font-weight: bold;
        color: #808080;
        background: #e4e4e4;
        margin-top: 4px;
        margin-left: 4px;
        text-align: center;
        z-index: 3; }
      .stepped-progress .circle .title {
        font-size: 13px;
        font-weight: normal;
        margin: 10px 0 0 -15px;
        display: block;
        width: 60px;
        text-align: center; }
    .stepped-progress .circle.check-mark .label {
      color: #669900;
      font-size: 18px; }
      .claims-pay .stepped-progress .circle.check-mark .label p {
        left: -7px;
        position: relative; }
    .stepped-progress .circle.done .label {
      color: #FFF;
      background: #48cae4; }
    .stepped-progress .bar {
      display: inline-block;
      position: relative;
      width: 100%;
      height: 16px;
      border-radius: 0;
      top: 5px;
      vertical-align: top;
      border-top: 4px solid #d7d7d7;
      border-bottom: 4px solid #d7d7d7;
      margin-left: 8px;}
      .stepped-progress .bar .bar-inner {
        display: inline-block;
        position: absolute;
        height: 100%;
        width: 100%;
        background: #e4e4e4;
        z-index: 2; }
    .stepped-progress .bar.done .bar-inner {
      background: #48cae4; }



</style>

@stop

@section('teacher')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>


<!-- progress bar -->
<div class="progress-container">
  <div class="stepped-progress">
    <!--<div class="left-bumper"></div> -->
    <div class="step-grid">
    @if($status->status > 0)
        <div class="circle done">
    @else
        <div class="circle">
    @endif
        <span class="label">1</span>
        <span class="title">Signup</span>
      </div>
    </div>
    <div class="bar-grid">
    @if($status->status > 1)
      <div class="bar done">
    @else
    <div class="bar">
    @endif
        <span class="bar-inner"></span>
      </div>
    </div>
    <div class="step-grid">
    @if($status->status > 1)
        <div class="circle done">
    @else
        <div class="circle">
    @endif
        <span class="label">2</span>
        <span class="title"> Demo video review</span>
      </div>
    </div>
    <div class="bar-grid">
    @if($status->status > 2)
      <div class="bar done">
    @else
    <div class="bar">
    @endif
        <span class="bar-inner"></span>
      </div>
    </div>
    <div class="step-grid">
    @if($status->status > 2)
        <div class="circle done">
    @else
        <div class="circle">
    @endif
        <span class="label">3</span>
        <span class="title">Course request</span>
      </div>
    </div>
    <div class="bar-grid">
    @if($status->status > 3)
      <div class="bar done">
    @else
    <div class="bar">
    @endif
        <span class="bar-inner"></span>
      </div>
    </div>
    <div class="step-grid">
    @if($status->status > 3)
        <div class="circle done">
    @else
        <div class="circle">
    @endif
        <span class="label">4</span>
        <span class="title">Approved course request</span>
      </div>
    </div>
    <div class="bar-grid">
    @if($status->status > 4)
      <div class="bar done">
    @else
    <div class="bar">
    @endif
        <span class="bar-inner"></span>
      </div>
    </div>
    <div class="step-grid">
    @if($status->status > 4)
        <div class="circle done check-mark">
    @else
        <div class="circle">
    @endif
        <span class="label">5</span>
        <span class="title">Paid teacher</span>
      </div>
    </div>
  </div>
</div><br><br>

<!-- /progress bar -->




















    <!-- /Page Header -->





@if($status->status > 3)
    <div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-book"></i>
										</span>
                        <div class="dash-count">
                            <h3>{{$assigned_course}}</h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h6 class="text-muted">Sub-courses Assigned</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
                        <div class="dash-count">
                            <h3>{{$pending_course}}</h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">

                        <h6 class="text-muted">Pending Request</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@stop
