@extends('layouts.app')
        
        
        @section('content')

@include('partials.navbar')

<div class ="container">

@if ($posts -> count() > 0 )
<div class="card-group">
@foreach($posts as $post)

  <div class="card m-2">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('post.show', ['id' =>$post->id])}}">{{$post ->title}}</a></h5>
      <p class="card-text">{{$post ->content}}</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  @endforeach
  @else
  <h4>Il n'y a aucun post</h4>
  </div>
  @endif
  
  </div>

@endsection