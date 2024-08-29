@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-6 p-5 ani-form ">
    <form action="">
    <div class="upload-box large-upload-box mb-3" id="largeUploadBox" onclick="triggerUpload('largeImageInput')">
                <span class="plus-symbol" id="largePlusSymbol">+</span>
                <input type="file" id="largeImageInput" name="large_image" class="form-control" accept="image/*" onchange="previewImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn')">
                <img id="largeImagePreview" src="#" alt="Image Preview">
                <button type="button" class="delete-btn" id="largeDeleteBtn" onclick="removeImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn', event)">&times;</button>
    </div>
    <div class="mb-3">
        <label for="slider" class="mb-1">Slider</label>
        <input type="text" class="form-control border-black" id="slider" name="slider">
    </div>
    <div class="button_name">
        <label for="usr" class="mb-1"> Button Name</label>
        <input type="text" class="form-control border-black" id="button_name" name="button_name">
    </div>
    <div class="mb-3">
        <label for="nav_link" class="mb-1">Nav link</label>
        <input type="text" class="form-control border-black" id="nav_link"  name="nav_link">
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary px-5 custom">Save</button>
  </div>
    </form>
</div>
</div>
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/addslider.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/addslider.js') }}"></script>
@endsection