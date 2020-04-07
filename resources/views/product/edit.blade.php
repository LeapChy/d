@extends('lyout.master')
@section('title',"product index")
@section('content')


<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">product name</label>
    <input type="text" class="form-control" id="name"  value="{{$product->name}}">
    </div>

    <div class="form-group">
    <label for="name">product code</label>
    <input type="text" class="form-control" id="code"  value="<?php echo $product->code; ?>">
    </div>

    <div class="form-group">
    <label for="name">product EXP</label>
    <input type="text" class="form-control" id="exp" value="<?php echo $product->exp; ?>">
    </div>

    <div class="form-group">
    <label for="name">product price</label>
    <input type="text" class="form-control" id="price" value="<?php echo $product->price; ?>">
    </div>

    <div class="form-group">
    <label for="name">image</label>
    <input type="text" class="form-control" id="img"  value="<?php echo $product->img; ?>">
    </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>