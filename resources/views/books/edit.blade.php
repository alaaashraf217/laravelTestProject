@extends('books.layout')
@section('content')
<div class="card container">
  <div class="card-header">edit page</div>
  <div class="card-body">
      
  <form action="{{ url('books/' .$books->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="title" id="title" value="{{$books->title}}" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="description" id="description" value="{{$books->description}}" class="form-control" required></br>
        <label>image</label></br>
        <input type="file" name="image" id="image" value="{{$books->image}}" class="form-control" required></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a class="btn btn-primary" href="{{url('books')}}">back<a>
</br>
    </form>
  
  </div>
</div>
@stop  
 
