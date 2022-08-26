<h1>Login Form</h1>
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->
<form action="users" method="POST">
@csrf
<input type="text" name="username" placeholder="Enter Name" >
<br>
<span style="color: red;">@error('username'){{$message}}@enderror</span>
<br>
<input type="password" name="password" placeholder="Enter Password">
<span style="color:red">@error('password'){{$message}}@enderror</span><br>
<button type="submit">Login</button>
</form>
