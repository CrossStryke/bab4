@extends('layouts/contentNavbarLayout')

@section('title', 'Main Page')
<!-- Head Title -->

<link rel="stylesheet" href="/assets/css/main.css">
@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Tester</h5>
            <p class="mb-4">Inventory Administrator</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title" style="color: #8766EE">Time</h5>
            <div class="clock">
              <div class="time" id="time">00:00</div>
              <div class="ampm" id="ampm">AM</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title" style="color: #8766EE">Calendar</h5>
          <div class="calendar">
            <!-- Calendar Code Starts Here -->
            <div class="month">
              <div class="prev" onclick="prevMonth()">&#10094;</div>
              <div class="date" id="date">July 2023</div>
              <div class="next" onclick="nextMonth()">&#10095;</div>
            </div>
            <div class="weekdays">
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
              <div>Sun</div>
            </div>
            <div class="days" id="days"></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
  <div class="card">
  <h5 class="card-header">Asset Records</h5><!-- Get 5 latest action -->
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Bil</th>
          <th>Serial Number</th>
          <th>Name</th>
          <th>Price</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>ss</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  </div>
  <!--/ Total Revenue -->
</div>
<script src="assets/js/dashboard.js"></script>
@endsection
