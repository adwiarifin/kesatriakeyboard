@extends('front.master')

@section('content')
            <div class="section section-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <div class="text-center">
                                <a href="javascrip: void(0);"><h3 class="title">{{ $post->title }}</h3></a>
                                <h6 class="title-uppercase">{{ $post->published_at->toFormattedDateString() }}</h6>
                            </div>
                        </div>
                        <div class="col-md-8 ml-auto mr-auto">
                            <!--img src="{{ Storage::url($post->image) }}" class="img"-->
                            <a href="javascrip: void(0);">
                                <div class="blog-card" data-radius="none" style="background-image: url('{{ Storage::url($post->image) }}');"></div>
                            </a>
                            <div class="article-content">
                                {!! $post->body !!}
                            </div>
                            <br/>
                            <div class="article-footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Tags:</h5>
                                            <span class="label label-default">Motivational</span>
                                            <span class="label label-default">Newsletter</span>
                                            <span class="label label-warning">Trending</span>
                                        </div>
                                        <div class="col-md-4 ml-auto">
                                            <div class="sharing">
                                                <h5>Spread the word</h5>
                                                <button class="btn btn-just-icon btn-twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                                <button class="btn btn-just-icon btn-facebook">
                                                    <i class="fa fa-facebook"> </i>
                                                </button>
                                                <button class="btn btn-just-icon btn-google">
                                                    <i class="fa fa-google"> </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="media">
                                        <a class="pull-left" href="#paper-kit">
                                            <div class="avatar big-avatar">
                                                <img class="media-object" alt="64x64" src="{{ url('/img/faces/kaci-baum-2.jpg') }}">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $post->user->name }}</h4>
                                            <div class="pull-right">
                                                <a href="#paper-kit" class="btn btn-default btn-round "> <i class="fa fa-reply"></i> Follow</a>
                                            </div>
                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                            <p> Don't forget, You're Awesome!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection