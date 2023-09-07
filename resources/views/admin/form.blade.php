@extends('layouts/contentNavbarLayout')

@section('title', 'New Asset')
<link rel="stylesheet" href="/assets/css/main.css">

@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Register New Asset</h5>
      </div>
      <div class="card-body">
        <form method="post" action="/admin">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Serial Number</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text">AC</span>
                <input type="text" class="form-control" name="serial" placeholder="2569">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input type="text" name="name" class="form-control" placeholder="Dell Optiplex 3000" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">MSRP</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class='bx bx-dollar-circle'></i></span>
                <input type="text" id="basic-icon-default-email" class="form-control" placeholder="3000.00" name="price" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Date Received</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class='bx bx-calendar'></i></span>
                <input type="date" name="date" class="form-control phone-mask" placeholder="20/09/1987" />
              </div>
            </div>
          </div>
          <br>
          <div class="row justify-content-end">
            <div class="col-sm-10">
            <button type="submit" class="btn rounded-pill btn-primary">
                <span class="tf-icons bx bxs-plus-circle"></span>&nbsp; Register
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
