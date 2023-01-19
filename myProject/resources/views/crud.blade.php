
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- <center><h1>Footwear</h1></center> -->
  
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-outline-secondary fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Product
</button> -->



<div class = "container-fluid">
@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-3">

    </div>
<div class="col-8">
    <div class="text-center"><h1>Foot Wear</h1></div>
<table class = "table mt-5">
  <thead class="bg-info text-white fw-bold">
    <th>Product Names</th>
    <th>Category</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Update</th>
    <th>Delete</th>


  </thead>
  <tbody class = "text-secondary bg-light fs-4">
  @foreach($data as $item)
    <tr>
      <td>{{$item->PName}}</td>
      <td>{{$item->PCategory}}</td>
      <td>{{$item->PPrice}}</td>
      <td><img src="/pimages/{{$item->PImage}}" alt=""></td>
      <td class="pt-5"><a href="updateForm/{{$item->Id}}">update</a></td>
      <td class="pt-5"><input type="submit" class = "btn btn-outline-secondary rounded-pill" value="Delete"></td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- pagination ko next page ko lagii -->
<p>{{$data->links()}}</p>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>