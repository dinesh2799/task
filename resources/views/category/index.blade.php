@extends('layouts.app')
@section('content')
    <a class="btn-primary" href="{{route('category.create')}}">Add Category</a>
    <div class="container">
        <div class="row">
            <ul>
                @foreach($categories as $category)
                    <li>{{$category->name}}</li>
                    @if(count($category->sub_categories))
                        @include('category.subcategory',['subcategories'=>$category->sub_categories])
                    @endif
                @endforeach
            </ul>
        </div>
    </div>


    @endsection