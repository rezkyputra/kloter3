@extends('app')
@section('judul', 'Edit Data')
@section('content')
    <form method="POST" action="/product/{{ $id->id }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <div class="form-group">
            <label for="Cashiers">Cashier Name</label>
                <select class="form-control" name="cashier" id="Cashiers" required>
                        @foreach($cashiers as $cashier)
                            @if($id->id_cashier === $cashier->id)
                                <option value="{{$cashier->id}}" selected>{{$cashier->name}}</option>
                            @else
                                <option value="{{$cashier->id}}">{{$cashier->name}}</option>
                            @endif
                        @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="Product">Product</label>
            <input type="text" class="form-control" id="Product" value="{{ $id->name }}" name="name" placeholder="Product" required>
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
                <select class="form-control" name="category" id="Category" required>
                    <option value=""> -- </option>
                    @foreach($categories as $category)
                            @if($id->id_category === $category->id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" class="form-control" id="Price" value="{{ $id->price }}" name="price" placeholder="Price" required>
        </div>
        <hr/>
        <input type="submit" class="btn btn-primary" value="Submit">
        <a href="/product" class="btn btn-danger">Back</a>
    </form>
@endsection