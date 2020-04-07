@extends('lyout.master')
@section('title',"add product")

@section('content')
<h3>add product</h3>

<form method="POST">
@csrf
<div class="form-group">
    <label for="name">Product name</label>
    <input type="text" class="form-control" id="name" name="name" >
   
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
  <div class="form-group">
    <label for="exp">exp</label>
    <input type="text" class="form-control" id="exp" name="exp">
  </div>
  <div class="form-group">
    <label for="code">code</label>
    <input type="text" class="form-control" id="code" name="code">
  </div>
  <br>
  <div class="form-check">
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
