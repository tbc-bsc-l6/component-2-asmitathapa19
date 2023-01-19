<x-app-layout>
    @extends('layout')
    @section('layout')
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <a href="{{url('addproduct')}}" class="btn btn-success mt-2 p-2">Add Product</a>
    @endif
    <div class="align-items-center justify-content-center mt-4">
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author First Name</th>
                        <th scope="col"> Author Last Name</th>
                        <th scope="col">Product Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Page No/Play Length</th>
                        <?php $admin = Auth::user();?>
                        @if(auth()->check() && auth()->user()->is_admin == 1)
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->title}}</td>
                            <td>{{$product->first_name}}</td>
                            <td>{{$product->last_name}}</td>
                            <td>{{$product->product_type}}</td>             
                            <td>{{$product->price}}</td>
                            <td>{{$product->pages_playlength}}</td>
                            @if(auth()->check() && auth()->user()->is_admin == 1)
                                <td>
                                    <a href="{{url('updateForm',$product->id)}}" class="btn btn-primary mt-2 p-2">Update</a>
                                    <form action="{{url('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger mt-2 p-2">Delete</button>
                                    </form>

                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$products->links()}}
</x-app-layout>