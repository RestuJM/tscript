@extends('layouts.login')

@section('content')
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset class="form-group position-relative has-icon-left">
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    placeholder="Username or Email" autocomplete="email" value="{{ old('email') }}" autofocus required>
                <div class="form-control-position">
                    <i class="ft-user"></i>
                </div>
                @error('email')
                    <span class="invalid-feedback text-danger " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </fieldset>
            <fieldset class="form-group position-relative has-icon-left">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                    placeholder="Password" required>
                <div class="form-control-position">
                    <i class="fa fa-key"></i>
                </div>
                @error('password')
                    <span class="invalid-feedback text-danger " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </fieldset>
            <div class="form-group row">
                <div class="col-md-6 col-12 text-center text-sm-left">
                    <fieldset>
                        <input type="checkbox" id="remember" name="remember" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember-me"> Remember Me</label>
                    </fieldset>
                </div>
                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                    <a href="{{ route('password.request') }}" class="card-link">
                        Forgot Password?
                    </a>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
        </form>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endsection
