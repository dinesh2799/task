@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('product.add_product')}}">
            {{csrf_field()}}
            <input type="text" class="form-control" name="name">
            <input type="hidden" class="form-control" name="category_id" value="{{$category_id}}">
            <button type="submit">save</button>
        </form>
    </div>
@endsection