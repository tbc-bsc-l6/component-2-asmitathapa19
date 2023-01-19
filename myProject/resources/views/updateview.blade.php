@extends ('dashboard')
@section('content')

<div class = "col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-info">Update Products</h2>
<form action="{{url('updateProduct',$products->id)}}" method="POST">
    
<div class="mb-2">
        <label for="">Product Name</label>
        <input type="text" name="PName" value="{{$products->PName}}" class="form-control" id="">
</div>

<div class="mb-2">
        <label for="">Product Price</label>
        <input type="text" name="PPrice" value="{{$products->PPrice}}" class="form-control" id="">
</div>
<br>
<input type="hidden" name = "Id" value = "{{$products->Id}}">
<button type="submit" class="btn btn-outline-secondary rounded pill">Update</button>
</form>
</div>
@endsection