@extends('layouts.app')
@section('content')
    <form action="{{route('category.add_category')}}">
        {{csrf_field()}}
        <input type="text" class="form-control" name="name">
{{--        <input type="text" class="form-control" name="category_id">--}}
        <select class="form-control" name="category_id">
            <option value="0">None</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button type="submit">save</button>
    </form>
    @endsection