
@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('books') }}"  method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>title</label></br>
        <input type="text" name="title" id="title" class="form-control" required></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control" required></br>
        <label>image</label></br>
        <input type="file" name="image" id="image" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success">
        <a class="btn btn-primary" href="{{url('books')}}">back<a>
</br>
    </form>
  
  </div>
</div>
</body>
</html>
@endsection