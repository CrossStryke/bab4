@extends('layouts/contentNavbarLayout')

@section('title', 'Asset Records')
<link rel="stylesheet" href="/assets/css/main.css">

@section('content')
<div class="card">
  <h5 class="card-header">Asset Records</h5>
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
      @foreach($main as $asset)
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
  </div>
</div>
@endsection
