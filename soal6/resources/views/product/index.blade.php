@extends('app')
@section('judul', 'Data Product')
@section('content')
<a class="btn btn-primary my-1" href="/product/tambah">Tambah</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $value)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$value->cashier->name}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->category->name}}</td>
                        <td>{{$value->price}}</td>
                        <td>
                            <a href="/product/edit/{{$value -> id}}" class="btn btn-info">Edit</a>
                            <a href="#deleteModal_{{ $value -> id }}" data-toggle="modal" class="btn btn-flat btn-danger">Delete</a>
                            @include('product.delete')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection