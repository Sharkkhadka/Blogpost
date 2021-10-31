@extends('layout.layout')

@section('title')
    {{$post->title}}
@endsection

@section('content')

    <section class="display_content">
        <p class="title_display">{{$post->title}}</p>
        <p>Posted By: {{$post->user->name}}</p>
        <p class="desc_display">{{$post->description}}</p>
        <div class="post_controls">
            <div class="edit_post">
                <a href="{{route('edit', ['edit_post_id'=>$post->id])}}"><i class="far fa-edit"></i> Edit</a>
            </div>
            <div class="delete_post">
                <a href="{{route('delete', ['delete_post_id'=>$post->id])}}"><i class="fas fa-trash-alt"></i> Delete</a>
            </div>
        </div>
    </section>

@endsection
