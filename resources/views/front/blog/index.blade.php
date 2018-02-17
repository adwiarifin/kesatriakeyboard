@extends('front.master')

@section('content')
            <div class="section-white blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Latest Blogposts</h2>
                            <br />
                            @foreach($posts as $post)
                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <img class="img" src="{{ Storage::url($post->image) }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-category text-info">{{ $post->category->name }}</h6>
                                            <h3 class="card-title">
                                                <a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a>
                                            </h3>
                                            <p class="card-description">
                                                {{ $post->getSummary() }}
                                                <a href="{{ url('/blog/'.$post->slug) }}"> Read More </a>
                                            </p>
                                            <p class="author">
                                                by <a href="{{ url('/author/'.str_slug($post->user->name)) }}"><b>{{ $post->user->name }}</b></a>, {{ $post->published_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
@endsection