@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="d-flex flex-column container">
  <h6 class="p-3">Product-management</h6>
      <div class="d-flex justify-content-end pt-3">
      <a href="{{ route('addproduct') }}" class="btn pri-btn text-white"> <i class="fas fa-plus me-2"></i>ADD NEW PRODUCT</a>
      </div>
      <div class="d-flex justify-content-end py-3">
      <a href="{{ route('category') }}" class="btn sec-btn rounded-3">Category Management </a>
      </div>
</div>

    
    <div class="container text-center" id="product-container">
    <div class="row align-items-center gx-3" id="product-row">
      <!-- Product items will be appended here dynamically -->
    </div>
    <!-- Pagination Controls -->
    <div class="pagination-controls my-3">
      <button class="btn border-0 bg-white" id="prev-btn" onclick="prevPage()">&#8592;</button>
      <div id="pagination-numbers">
        <!-- Page numbers will be generated here dynamically -->
      </div>
      <button class="btn border-0 bg-white" id="next-btn" onclick="nextPage()">&#8594;</button>
    </div>
  </div>

  <!-- Bootstrap Modal for Delete Confirmation -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Alert</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Do you want to Delete?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-secondary" id="confirmDeleteBtn">Confirm</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product-management.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product-management.js') }}"></script>
@endsection