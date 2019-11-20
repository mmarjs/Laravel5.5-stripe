@foreach($parent->children->chunk(floor(round($parent->children->count() / 4))) as $childChunk)
    <div class="col-sm-3">
        <ul class="category-sub-list">
            @foreach($childChunk as $_child)
                @if($_child->children->count())
                    <li><a href="{{ route('category.show', $_child->slug) }}">{{ $_child->name }}</a></li>
                @else
                    <li>{{ $_child->name }}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endforeach