@extends('crud')
@section('content')

<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success fw-bold fs-5 rounded mt-5" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
  Add Product
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
     <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
<div class= "mb-2">
    <input type= "text" placeholder="Enter Product Name" class="form-control" name="pname" id= "">
</div>
<div class= "form-group mb-2">
<select id='category' class="form-control" style="width: 200px" name="pcategory">
                    <option value="">All Categories:</option>
                    <option value="Television">Television</option>
                    <option value="Computer">Computers</option>
                    <option value="Mobiles">Mobiles</option>
                    <option value="Cameras">Cameras</option>
                    <option value="Home Audio and Theater">Home Audio and Theater</option>
                </select>
</div>
<div class= "mb-2">
    <input type= "text" placeholder="Enter Product Price" class="form-control" name="pprice" id= "">
</div>
<div class= "mb-2">
    <input type= "file" class="form-control" name="pimage" id= "">
</div>
<button type= "submit" class= "btn btn-outline-success fw-bold fs-5 rounded"> Add  </button>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-4">
    <thead class= "bg-secondary text-white fw-bold">
    <th>ID </th>
        <th>Product Name </th>
        <th> Product Category</th>
        <th> Product Price </th>
        <th> Product Image </th>
        <th> Action</th>
        <th></th>
        
    </thead>
    <tbody class="text-secondary fs-5">
        @foreach($data as $item)
        <tr>
          <form action="updatedelete" method="get">
            <td class= "pt-5"><input type="hidden" name="id" value="{{$item['Id']}}">{{$item['Id']}}</td>
            <td class= "pt-5"><input type="hidden" name="name" value="{{$item['PName']}}">{{$item['PName']}}</td>
            <td class= "pt-5"><input type="hidden" name="category" value="{{$item['PCategory']}}">{{$item['PCategory']}}</td>
            <td class= "pt-5"><input type="hidden" name="price" value="{{$item['PPrice']}}">{{$item['PPrice']}}</td>
            <td class= "pt-5"><img src="pimages/{{$item['PImage']}}"  width="100px" height="100px"  alt=""></td>
            <td class= "pt-5"><input type="submit" class="btn btn-primary  rounded" name="update" value="Update"></td>
            <td class= "pt-5"><input type="submit" class="btn btn-danger  rounded" value="Delete"></td>
          </form>
        </tr>
        @endforeach
</tbody>
</table>
</div>
@endsection