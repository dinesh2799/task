@extends('layouts.app')
@section('content')
    <a class="btn-primary" href="{{route('category.create')}}">Add Category</a>
    <div class="container">
        <div class="row">
            <ul>
                @foreach($categories as $category)
                    <div class="row">
                        <li>{{$category->name}}</li>
                        <a class="btn-success" href="{{route('category.create')}}">Add Product</a>
                    </div>
                    @if(count($category->sub_categories))
                        @include('category.subcategory',['subcategories'=>$category->sub_categories])
                    @endif
                @endforeach
            </ul>
        </div>
    </div>


    @endsection