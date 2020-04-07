@extends('lyout.master')
@section('title',"product index")


@section('content')

 <h2>html store</h2>

 
<table class="table table-hover">
  <tr>
    <th>No</th>
    <th>Name product</th>
    <th>code</th>
    <th>price</th>
    <th>image</th>
    <th>action</th>
   
  </tr>

@foreach ($products as $k=>$v)
    <tr>
      <td>{{$k+1}}</td>
      <td>{{$v->name}}</td>
      <td>{{$v['code']}}</td>
      <td>{{$v->price}}</td>
      <td><img width="50px" src="/imges/{{$v->path}}" > </td>

      <th>
      <a class="btn btn-primary" href="/products/{{$v->id}}/edit" role="button">edit</a>
      <form> 
     
        @csrf
        <input type="hidden" name="id" value="{{$v->id}}">
        <button type="button" class="btn btn-outline-primary">Delete</button>
      </form>
      </th>
   </tr>

  @endforeach
</table>
@endsection



</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


