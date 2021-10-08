<ul>
    @foreach($subcategories as $subcategory)
        <li>
            {{$subcategory->name}}
        </li>
        @if(count($subcategory->sub_categories))
            @include('category.subcategory',['subcategories'=>$subcategory->sub_categories])
        @endif
        @endforeach
</ul>