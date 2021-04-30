@extends('layouts.app')
@section('title') Register
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 card">
            <div class="card-body">
                <form action="{{route('register')}}" method="Post">
                    @csrf
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Your Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" class="form-control" id="surname" name="username"  placeholder="Your Surname">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="Your Email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Your Password ">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  placeholder="Your Password Again">
                    </div>


                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection
