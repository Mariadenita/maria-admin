@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="d-flex flex-column container">
  <h6 class="p-3">Category-Mangement</h6>
      <div class="d-flex justify-content-end py-3">
      <a href="{{ route('addcategory') }}" class="btn pri-btn text-white"> <i class="fas fa-plus me-2"></i>ADD NEW CATEGORY</a>
    </div>
</div>
<div class="container">

<table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Category Button</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Rows will be dynamically added here -->
            </tbody>
        </table>

</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/category-managementt.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/category-management.js') }}"></script>
@endsection