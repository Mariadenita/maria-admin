@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="d-flex flex-column container">
  <h6 class="p-3">Category-Mangement</h6>
  
  <div class="row justify-content-center p-3">
    <div class="col-md-6 p-5 ani-form rounded-5">
        <form  class="row" action=" " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4 text-center">
            <span class="mb-3">Upload Image</span>
            <div class="d-flex justify-content-center">
                <div class="upload-box large-upload-box my-3 text-center" id="largeUploadBox" onclick="triggerUpload('largeImageInput')">
                        <span class="plus-symbol" id="largePlusSymbol">+</span>
                        <input type="file" id="largeImageInput" name="category_image" class="form-control" accept="image/*" onchange="previewImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn')">
                        <img id="largeImagePreview" src="#" alt="Image Preview">
                        <button type="button" class="delete-btn" id="largeDeleteBtn" onclick="removeImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn', event)">&times;</button> 
                </div>
            </div>
        </div>
            <div class="col-md-8 position-relative">
                <div class="mb-3">
                <label for="slider" class="mb-3">Category Name</label>
                <input type="text" class="form-control border-black" id="category" name="category">
                </div>  
                <div class="text-center position-absolute top-100 end-0">
                    <button type="submit" class="btn btn-primary px-5 custom">Save</button>
                </div>
            </div>
        
        </form>
    </div>
  </di>  

</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/addcategory.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/addcategory.js') }}"></script>
@endsection