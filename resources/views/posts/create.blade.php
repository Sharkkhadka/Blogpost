@extends('layout.layout')

@section('title')
    Create a Post
@endsection

@section('content')
    <section class="create_post_container">
        <div>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title">
                    @error('title')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    @error('description')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <button class="submit_btn" type="submit" name="submit" value="Submit"><i class="far fa-share-square"></i> Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection