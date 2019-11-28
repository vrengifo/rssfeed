@extends('layouts.app')

@section('content')
    
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>
    <div class="card m-2">
        <h2><a href="rss/{{ $item->id }}">{{ $item->title }}</a></h2>
        <h3>Publicated by <span>{{ $item->channel }}</span> at <span>{{ $item->pub_date }}</span></h3>
        <p>{{ $item->description }}</p>
        <p>{{ $item->xml }}</p>
    </div>
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>

@endsection