@extends('app')
@section('judul', 'Tambah Data')
@section('content')
    <form method="POST" action="/product">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="Cashiers">Cashier Name</label>
                <select class="form-control" name="cashier" id="Cashiers" required>
                    <option value=""> -- </option>
                    @foreach($cashiers as $cashier)
                        <option value="{{$cashier->id}}">{{$cashier->name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="Product">Product</label>
            <input type="text" class="form-control" id="Product" name="name" placeholder="Product" required>
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
                <select class="form-control" name="category" id="Category" required>
                    <option value=""> -- </option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" class="form-control" id="Price" name="price" placeholder="Price" required>
        </div>
        <hr/>         
        <input type="submit" class="btn btn-primary" value="Submit">        
        <a href="/product" class="btn btn-danger">Back</a>
    </form>
@endsection