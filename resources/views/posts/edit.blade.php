@extends('layout.layout')

@section('title')
    Edit: 
@endsection

@section('content')
<section class="create_post_container">
        <div>
            <form action="{{route('update', ['update_post_id' => $editPost->id])}}" method="POST">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" value="{{$editPost->title}}">
                    @error('title')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{$editPost->description}}</textarea>
                    @error('description')
                        <small class="error_msg">{{$message}}</small>
                    @enderror
                </div>
                <div>
                    <button class="submit_btn" type="submit" name="update" value="Update"><i class="far fa-share-square"></i> Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection