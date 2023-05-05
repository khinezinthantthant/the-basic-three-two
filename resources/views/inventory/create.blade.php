@extends('layouts.master');

@section('title')
    Create Item
@endsection

@section('content')
    <h4>Create Item</h4>

    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div>
            <label class="form-label">Item Name</label>
            <input type="text" class=" form-control" name="name">
        </div>

        <div>
            <label class="form-label">Item Price</label>
            <input type="number" class=" form-control" name="price">
        </div>
        <div>
            <label class="form-label">Stock</label>
            <input type="number" class=" form-control" name="stock">
        </div>
        <button class="btn btn-primary mt-3">Save Item</button>
    </form>
@endsection
