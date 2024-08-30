@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="d-flex flex-column container">
  <h6 class="p-3">Slider-management</h6>
      <div class="d-flex justify-content-end py-3">
      <a href="{{ route('addslider') }}" class="btn pri-btn text-white"> <i class="fas fa-plus me-2"></i>ADD NEW SLIDER</a>
      </div>
</div>
<div class="container p-3">

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
            <tbody id="tableBody">
                <!-- Rows will be dynamically added here -->
            </tbody>
        </table>

</div>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this slider?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn custom text-white" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/slider.js') }}"></script>
@endsection