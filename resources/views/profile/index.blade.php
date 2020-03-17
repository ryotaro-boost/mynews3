@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->name, 30) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="body mx-auto">
                                <p class="gender mt-3">{{ str_limit($headline->gender, 30) }}</p>
                                <p>{{ str_limit($headline->introduction, 650) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div>
                                    {{ str_limit($post->name, 30) }}
                                </div>
                                <div class="gender mt-3">
                                    {{ str_limit($post->gender, 30) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>

@endsection