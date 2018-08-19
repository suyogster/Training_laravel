
@extends('main')
@section('title', '| login page')

@section('content')
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
                  </form>
@endsection                  	
		