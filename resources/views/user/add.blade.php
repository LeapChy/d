@extends('lyout.master')
@section('title',"Add Product")
 
@endsection
@section('content')

<h2>html forms</h2>


<form methode="post">

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
  
</form> 

@endsection


