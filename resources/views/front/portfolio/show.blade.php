@extends('front.master')

@section('content')
            <div class="section section-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <div class="text-center">
                                <span class="label label-warning main-tag">{{ $work->platform }}</span>
                                <a href="javascrip: void(0);"><h3 class="title">{{ $work->name }}</h3></a>
                                <h6 class="title-uppercase">{{ $work->framework }}</h6>
                            </div>
                        </div>
                        <div class="col-md-8 ml-auto mr-auto">
                            <!--img src="{{ Storage::url($work->image) }}" class="img"-->
                            <a href="javascrip: void(0);">
                                <div class="blog-card" data-radius="none" style="background-image: url('{{ Storage::url($work->image) }}');"></div>
                            </a>
                            <div class="article-content">
                                {!! $work->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection