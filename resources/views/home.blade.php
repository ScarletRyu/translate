@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Name: {{Auth::user()->name}}<br>
                    Email: {{Auth::user()->email}}<br>
                    Rol: {{Auth::user()->rol}}<br>
                    You are logged in!
                    Wanna edit your profile?<br>
                    <a href="{{route('users.edit', Auth::user()->id)}}">Edit</a>
                    Try deleting your profile!<br>
                    <form action="{{route('users.destroy', Auth::user()->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
