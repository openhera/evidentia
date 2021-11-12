@extends('home.main')

@section('title', 'Restablecer contraseña')

@section('content')

    <form action="{{route('password.reset_p',$instance)}}" method="post">
        @csrf

        <div class="form-group">
            <input name="email" required type="email" class="form-control" placeholder="Email"  autocomplete="username" autofocus>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
            Restablecer contraseña
        </button>

    </form>


@endsection
