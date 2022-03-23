<li><a href="/{{$slug}}/{{$children->slug}}">{{$children->title}}</a></li>
@if ($children->childrens)
    <ul>
        @if(count($children->childrens) > 0)
            @foreach ($children->childrens as $grandChildren)
                @include('pages/children', ['children' => $grandChildren, 'slug' => $slug."/".$children->slug])
            @endforeach
        @endif
    </ul>
@endif