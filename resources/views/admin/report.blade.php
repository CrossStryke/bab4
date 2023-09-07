@extends('layouts/contentNavbarLayout')

@section('title', 'Report')
<link rel="stylesheet" href="/assets/css/main.css">

@section('content')
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
            <div>
                <!-- This is left blank on purpose -->
                <label class=" col-form-label" for="basic-icon-default-company">Report on:</label>
                <input type="month" value="" class="form-control">
            </div>
            <div>
                <button class="btn btn-primary">Generate Report</button>
            </div>
        </div>
      </div>
      <div class="card-body">
        
      </div>
    </div>
  </div>
@endsection