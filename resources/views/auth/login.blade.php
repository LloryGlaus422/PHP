@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">

                        @csrf

                        <h2 class="text-center">Login</h2>
                        <div class="form-group has-error">
                            <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection