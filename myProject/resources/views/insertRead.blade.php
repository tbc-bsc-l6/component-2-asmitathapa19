@extends('crud')
@section('content')

<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success fw-bold fs-5 rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form action="">
<div class= "mb-2">
    <input type= "text" placeholder="Enter Product Name" class="form-control" name="" id= "">
</div>
<div class= "mb-2">
    <input type= "text" placeholder="Enter Product Price" class="form-control" name="" id= "">
</div>
<div class= "mb-2">
    <input type= "file" class="form-control" name="" id= "">
</div>
<button type= "submit" class= "btn btn-outline-success fw-bold fs-5 rounded"> Add Record </button>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</center>
@endsection