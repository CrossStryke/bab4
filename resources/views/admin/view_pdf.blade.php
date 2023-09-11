@extends('layouts/contentNavbarLayout')

@section('title', 'Asset Records')
<link rel="stylesheet" href="/assets/css/main.css">

@section('content')
<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
            <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
            <div>
                <!-- This is left blank on purpose -->
                <h5>Asset Report</h5>
            </div>
        </div>
      </div>
  @if(count($results)>0)
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
      @foreach($results as $asset)
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $asset['serialID'] }}</td>
          <td>{{ $asset['name'] }}</td>
          <td>{{ $asset['price'] }}</td>
          <td><span class="
          @if($asset['status'] == 'Active')
          badge rounded-pill bg-label-success me-1
          @else
          badge rounded-pill bg-label-danger me-1
          @endif
          ">{{ $asset['status'] }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div>
        <p class="card-header">No records</p>
    </div>
    @endif
  </div>
</div>
@endsection