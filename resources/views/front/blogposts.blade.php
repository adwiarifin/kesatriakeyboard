            <div class="section-white blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Latest Blogposts 3</h2>
                            <br />
                            @php $odd = true @endphp
                            @foreach($posts as $post)
                            <div class="card card-plain card-blog">
                                @if($odd)
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <img class="img" src="{{ url($post->image) }}" />
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
                                                <img class="img" src="{{ url('img/blog2.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @php $odd = !$odd @endphp
                            </div>
                            @endforeach

                            <!--div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-category text-danger">
                                                <i class="fa fa-free-code-camp" aria-hidden="true"></i> Trending
                                            </h6>
                                            <h3 class="card-title">
                                                <a href="#pablo">Uber acqui-hires social app studio Swipe Labs</a>
                                            </h3>
                                            <p class="card-description">
                                                These issues might be making it a bit harder for Uber to hire right now in the competitive Silicon Valley job market. Acqui-hiring companies like it’s doing here with Swipe Labs lets it roll up a bunch of good talent — and… <a href="#pablo"> Read More </a>
                                            </p>
                                            <p class="author">
                                                by <a href="#pablo"><b>Josh Constine</b></a>, 2 days ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('img/blog2.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('img/blog3.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-category text-success">
                                                Startups
                                            </h6>
                                            <h3 class="card-title">
                                                <a href="#pablo">HBO and Netflix lead this year’s nominations</a>
                                            </h3>
                                            <p class="card-description">
                                                Streaming services once again top the list of this year’s Emmy nominations – another indicator of the shift in how today’s consumers are watching TV. HBO, which has been available. <a href="#pablo"> Read More </a>
                                            </p>
                                            <p class="author">
                                                by <a href="#pablo"><b>Sarah Perez</b></a>, 14 Jul 2017
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>