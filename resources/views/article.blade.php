@extends('layouts.app')
        
        
        @section('content')
        @include('partials.navbar')     
<div class="container">

  <h4> {{$post->content}}</h4>
  <span> {{$post->image ? $post->image->path : "Pas d'image ici!"}} </span>
  <hr>

  @forelse($post->comments as $comment)
<div>
  {{ $comment->content }} | créé le {{ $comment->created_at->format('d m y')}}
</div>
  @empty
<span> Aucun commentaire pour ce post.</span>
@endforelse

  </div>
@endsection