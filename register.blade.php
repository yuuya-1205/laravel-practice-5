@extends('layout.index')


@section('content')


<form action="#" method="post">
  <p>Register</p>
    <p>Name：<input type="text" name="name"></p>
    <p>E-mail Adress:<input type="text" name="mailadress"></p>
  <p>Password：<input type="text" name="password"></p>
  <p>Confirm Password：<input type="text" name="confirmpassword"></p>
  <p><input type="submit" value="Register"></p>
</form>

@endsection
 

