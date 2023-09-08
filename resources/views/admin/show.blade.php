@extends('layouts/contentNavbarLayout')

@section('title', 'Details')
<link rel="stylesheet" href="/assets/css/main.css">

@section('content')
<h1>Asset for {{ $asset->name  }}</h1>
@endsection