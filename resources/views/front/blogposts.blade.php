            <div class="section section-white blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Latest Blogposts</h2>
                            <br />
                            @php $odd = true @endphp
                            @foreach($posts as $post)
                            <div class="card card-plain card-blog">
                                @if($odd)
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
                                @else
                                <div class="row">
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
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ Storage::url($post->image) }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @php $odd = !$odd @endphp
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('/blog') }}" class="btn btn-danger btn-round">Go to Blog</a>
                        </div>
                    </div>
                </div>
            </div>