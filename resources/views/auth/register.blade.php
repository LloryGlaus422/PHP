@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">

                        {{ csrf_field() }}
                        <h2>Register</h2>
                        <p class="hint-text">Create your account. It's free and only takes a minute.</p>
                        <div class="form-group">
                            <label>First Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                    autocomplete="off" value="{{ old('first_name') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('first_name'))
                                {{ $errors->first('first_name') }}
                                @endif
                            </span>
                            <label>Last Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                    autocomplete="off" value="{{ old('last_name') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('last_name'))
                                {{ $errors->first('last_name') }}
                                @endif
                            </span>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    autocomplete="off" value="{{ old('email') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </span>
                            <label>Age</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="age" placeholder="Age" autocomplete="off"
                                    value="{{ old('age') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('age'))
                                {{ $errors->first('age') }}
                                @endif
                            </span>

                            <div class="form-group">
                                <label>Gender</label>
                                <br>
                                <input type="radio" name="gender" value="1" autocomplete="off"
                                    value="{{ old('gender') }}"> Male
                                <input type="radio" name="gender" value="2" autocomplete="off"
                                    value="{{ old('gender') }}"> Female
                            </div>
                            <label>Address</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                    autocomplete="off" value="{{ old('address') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('address'))
                                {{ $errors->first('address') }}
                                @endif
                            </span>
                            <label>Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    autocomplete="off" value="{{ old('password') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('password'))
                                {{ $errors->first('password') }}
                                @endif
                            </span>
                            <label>Confirm Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirm Password" autocomplete="off" autocomplete="off"
                                    value="{{ old('password') }}">
                            </div>
                            <span class="error">
                                @if($errors->has('password_confirmation'))
                                {{ $errors->first('password_confirmation') }}
                                @endif
                            </span>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
