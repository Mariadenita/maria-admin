@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="d-flex flex-column container">
  <h6 class="p-3">Slider-management</h6>
      <div class="d-flex justify-content-end py-3">
      <a href="{{ route('addslider') }}" class="btn pri-btn text-white"> <i class="fas fa-plus me-2"></i>ADD NEW SLIDER</a>
      </div>
</div>
<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Slider Image</th>
      <th scope="col">Slider Button</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr class="align-middle">
      <td>1</td>
      <td><img src="{{ asset('img/sliderimg1.png') }}" alt=""></td>
      <td>slider button</td>
      <td><a href=""><i class="fas fa-pencil-alt text-dark"></i></a></td>
      <td><a href=""><i class="fas fa-trash text-dark"></i></a></td>
    </tr>
    <tr class="align-middle">
      <td>2</td>
      <td><img src="{{ asset('img/sliderimg1.png') }}" alt=""></td>
      <td>slider button</td>
      <td><a href=""><i class="fas fa-pencil-alt text-dark"></i></a></td>
      <td><a href=""><i class="fas fa-trash text-dark"></i></a></td>
    </tr>
  </tbody>
</table>

</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/slider.js') }}"></script>
@endsection