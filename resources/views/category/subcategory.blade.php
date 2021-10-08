<ul>
    @foreach($subcategories as $subcategory)
            <div class="row">
                    <li>
                            {{$subcategory->name}}
                            <button>Add Product</button>
                    </li>
            </div>
        @if(count($subcategory->sub_categories))
            @include('category.subcategory',['subcategories'=>$subcategory->sub_categories])
        @endif
        @endforeach
</ul>