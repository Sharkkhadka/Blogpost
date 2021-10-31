@extends('layout.layout')

@section('title')
    Register
    @endsection

@section('content')

    <section class="register_container">
    <div>
            <form action="{{route('register.store')}}" method="POST">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name">
                    @error('name')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    @error('email')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    @error('password')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <button class="submit_btn" type="submit" name="submit" value="Submit"><i class="far fa-share-square"></i> Register</button>
                </div>
            </form>
        </div>
    </section>

@endsection