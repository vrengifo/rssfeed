@extends('layouts.app')

@section('content')
    <h1>RSS</h1>
    @if (count($items) > 0)
        @foreach ($items as $item)
            <div class="card m-2">
                <h2><a href="rss/{{ $item->id }}">{{ $item->title }}</a></h2>
                <h3>Publicated by <span>{{ $item->channel }}</span> at <span>{{ $item->pub_date }}</span></h3>
                <p>{{ $item->description }}</p>
            </div>
        @endforeach
    @endif
@endsection
