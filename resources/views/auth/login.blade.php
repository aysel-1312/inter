@extends('layouts.app')
@section('title') Register
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 card">
            <div class="card-body">
                @if(session('status'))
                    {{session('status')}}
                    @endif
                <form action="{{route('login')}}" method="Post">
                    @csrf

                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"  placeholder="Your Email">

                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Your Password ">
                    </div>


                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember me </label>
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary">Register</button></div>
                </form>
            </div>
        </div>
    </div>

@endsection
