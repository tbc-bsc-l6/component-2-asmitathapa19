@extends('dashboard')
@section('content')
<div class = "col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-info">Add Products</h2>
<form action="insertData" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
      <input type="text" placeholder="Enter Product Name" class="form-control" name="PName" id="">
  </div>
  <select class="form-select mb-2" aria-label="Default select example" id="Category" name="PCategory">
       <option selected>Category</option>
       <option value="Men">TV</option>
       <option value="Women">Computer</option>
       <option value="Kids">Mobiles</option>
  </select>
  <div class="mb-2">
      <input type="text" placeholder="Enter Product Price" class="form-control" name="PPrice" id="">
  </div>
  <div class="mb-2">
      <input type="file" class="form-control" name="PImage" id="">
  </div>
  <button type="submit" class="btn btn-outline-secondary fw-bold fs-5 ">Add Product</button>
</form>
</div>
@endsection