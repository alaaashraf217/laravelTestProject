
@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header">info show</div>
  <div class="card-body">
   
 
        <div class="card-body row m-5">
          <div class="col-md-6">
        <h3 class="card-title">title : {{ $books->title }}</h3>
       <h3> <p class="card-text">description : {{ $books->description }}</p><h3>
</div>
       <div class="col-md-6">

        <p ><img src="/{{$books->image}}" width="200px" height="150px"></p>
  </div>
       <a class="btn btn-primary" href="{{url('books')}}">back<a>
    </hr>
  
  </div>
</div>@endsection