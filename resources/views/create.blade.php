@extends('layouts.app')
        
        
        @section('content')
        @include('partials.navbar')     
<div class="container">

  <h4>Creer un article</h4>
 
  <form method="POST" action="{{ route('post.store')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" class="form-control" name ="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <textarea  id="emailHelp" name ="content" class=" border-gray-600 border-2"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
@endsection