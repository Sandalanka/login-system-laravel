@extends('layout.main')
@section('tittle')
welcome
@endsection

@section('body')
<div class="row">
<div class="col-md-6">
<form method="post" action="{{route('singup')}}">
<h2 class="">Registation</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="fname"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text"name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
{{csrf_field()}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-6">
<h2>Login User</h2>
<form method="post" action="{{route('signin')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>


@endsection