@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    <ul>
                    @if(count($pages) > 0)
                        @foreach ($pages as $page)
                        <li><a href="/{{$page->slug}}">{{$page->title}}</a></li>
                        <ul>
                        @if(count($page->childrens))
                            @foreach ($page->childrens as $children)
                                @include('pages/children', ['children' => $children, 'slug' => $page->slug ])
                            @endforeach
                        @endif
                        </ul>
                    @endforeach
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
