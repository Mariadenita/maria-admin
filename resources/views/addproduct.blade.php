@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="p-3">
    <span class="mb-3">Product Management > Add product</span>
    <!-- Error Display Block -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="row justify-content-center">
    <div class="col-md-5 p-5 ani-form rounded-5">
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" id="name" name="name" class="form-control  border-black @error('name') is-invalid @enderror" >
    @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="modelnum" class="form-label">Model Number</label>
    <input type="text" class="form-control  border-black @error('modelnum') is-invalid @enderror" id="modelnum" name="modelnum">
  </div>
  
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select id="category" class="form-select  border-black @error('category') is-invalid @enderror" name="category">
      <option selected></option>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <!-- Add more options as needed -->
    </select>
  </div>
  
  <div class="mb-3">
    <label for="product_details" class="form-label">Product Details</label>
    <textarea  class="form-control  border-black @error('product_details') is-invalid @enderror"  id="product_details" rows="3" name="product_details"></textarea>
    @error('product_details')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="how_to_use" class="form-label">How to Use</label>
    <textarea 
        class="form-control  border-black @error('how_to_use') is-invalid @enderror" 
        id="how_to_use" 
        rows="3" 
        name="how_to_use"></textarea>
    
    <!-- Display error message if 'how_to_use' input is invalid -->
    @error('how_to_use')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
  
  <div class="mb-3">
    <label for="shipping_details" class="form-label">Shipping Details</label>
    <textarea 
        class="form-control  border-black @error('shipping_details') is-invalid @enderror" 
        id="shipping_details" 
        rows="3" 
        name="shipping_details"></textarea>

    <!-- Display error message if 'shipping_details' input is invalid -->
    @error('shipping_details')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
  
<div class="container mt-5">
        <div class="mb-3">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>QTY of a box</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td><input type="text" class="form-control  border-0" name="price" id="price"></td>
                        <td><input type="text" class="form-control  border-0" name="weight" id="weight"></td>
                        <td><input type="text" class="form-control  border-0" name="quantity" id="quantity"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mb-3">
            <button id="addRowBtn" class="btn custom px-5 w-100 text-white">+</button>
        </div>
    </div>
  <div class="container mb-3">
    <h5 class="text-center mb-3">Upload Image</h5>
    <div class="row">
        <!-- Large Upload Box -->
        <div class="col-md-8">
            <div class="upload-box large-upload-box" id="largeUploadBox" onclick="triggerUpload('largeImageInput')">
                <span class="plus-symbol" id="largePlusSymbol">+</span>
                <input type="file" id="largeImageInput" name="large_image" class="form-control" accept="image/*" onchange="previewImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn')">
                <img id="largeImagePreview" src="#" alt="Image Preview">
                <button type="button" class="delete-btn" id="largeDeleteBtn" onclick="removeImage('largeImageInput', 'largeImagePreview', 'largePlusSymbol', 'largeDeleteBtn', event)">&times;</button>
            </div>
        </div>
        
        <!-- Smaller Upload Boxes -->
        <div class="col-md-4 d-flex flex-column justify-content-between">
            <div class="upload-box small-upload-box" id="smallUploadBox1" onclick="triggerUpload('smallImageInput1')">
                <span class="plus-symbol" id="smallPlusSymbol1">+</span>
                <input type="file" id="smallImageInput1" name="small_image1" class="form-control"  accept="image/*" onchange="previewImage('smallImageInput1', 'smallImagePreview1', 'smallPlusSymbol1', 'smallDeleteBtn1')">
                <img id="smallImagePreview1" src="#" alt="Image Preview">
                <button type="button" class="delete-btn" id="smallDeleteBtn1" onclick="removeImage('smallImageInput1', 'smallImagePreview1', 'smallPlusSymbol1', 'smallDeleteBtn1', event)">&times;</button>
            </div>

            <div class="upload-box small-upload-box" id="smallUploadBox2" onclick="triggerUpload('smallImageInput2')">
                <span class="plus-symbol" id="smallPlusSymbol2">+</span>
                <input type="file" id="smallImageInput2" name="small_image2" class="form-control" accept="image/*" onchange="previewImage('smallImageInput2', 'smallImagePreview2', 'smallPlusSymbol2', 'smallDeleteBtn2')">
                <img id="smallImagePreview2" src="#" alt="Image Preview">
                <button type="button" class="delete-btn" id="smallDeleteBtn2" onclick="removeImage('smallImageInput2', 'smallImagePreview2', 'smallPlusSymbol2', 'smallDeleteBtn2', event)">&times;</button>
            </div>

            <div class="upload-box small-upload-box" id="smallUploadBox3" onclick="triggerUpload('smallImageInput3')">
                <span class="plus-symbol" id="smallPlusSymbol3">+</span>
                <input type="file" id="smallImageInput3" name="small_image3" class="form-control" accept="image/*" onchange="previewImage('smallImageInput3', 'smallImagePreview3', 'smallPlusSymbol3', 'smallDeleteBtn3')">
                <img id="smallImagePreview3" src="#" alt="Image Preview">
                <button type="button" class="delete-btn" id="smallDeleteBtn3" onclick="removeImage('smallImageInput3', 'smallImagePreview3', 'smallPlusSymbol3', 'smallDeleteBtn3', event)">&times;</button>
            </div>
        </div>
    </div>
</div>

  
  <div class="text-center">
    <button type="submit" class="btn btn-primary px-5 custom">Save</button>
  </div>
</form>

    </div>
    </div>
</div>

<h1 class="demoText__heading">Bye</h6>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/addproduct.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/addproduct.js') }}"></script>
@endsection