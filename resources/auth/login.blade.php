<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign-In</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<br><br><br><br><br><br>
<div class="login-form">

    @if($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type ="button" class ="close" data-dismiss="alert">
        </button>
        <strong>{{$message}}</strong>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </div><br />
    @endif
    <form method="GET" action="/SuccessfulLogIn">
        <h2 class="text-center">Login</h2>
        <div class="form-group has-error">
            <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off"
                value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
        <p><a href="#">Lost your Password?</a></p>
    </form>
    <p class="text-center small">Don't have an account? <a href="http://localhost:8000/showFormRegister">Sign up
            here!</a></p>
</div>