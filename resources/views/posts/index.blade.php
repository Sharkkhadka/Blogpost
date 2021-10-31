@extends('layout.layout')

@section('title')
    Post page
@endsection

@section('content')
    <section class="home_container">
        @foreach($posts as $post)
            <div class="home_content">
                <!-- *All the data will be displayed here*<br>

                **************************<br> -->
                <div class="title">
                    <a href="{{route('show', ['post_id' => $post->id])}}" class="title-bold">{{$post->title}}</a> 
                </div>
                <div class="time">
                    <p><i class="far fa-clock"></i> {{$post->created_at}}</p>
                </div>
                <div class="desc">
                    {{$post->description}}
                </div>
            </div>
        @endforeach
    </section>
@endsection