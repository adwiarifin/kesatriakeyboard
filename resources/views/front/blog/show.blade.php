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
                <div class="blog-card" data-radius="none" style="background-image: url('{{ $post->getImageUrl() }}');"></div>
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
                      <!--span class="label label-default">Motivational</span>
                      <span class="label label-default">Newsletter</span>
                      <span class="label label-warning">Trending</span-->
                    </div>
                    <div class="col-md-4 ml-auto">
                      <div class="sharing">
                        <h5>Spread the word</h5>
                        <div class="sharethis-inline-share-buttons"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="media">
                      <a class="pull-left" href="#paper-kit">
                        <div class="avatar big-avatar">
                          <img class="media-object" alt="64x64" src="{{ Gravatar::src($post->user->email) }}">
                        </div>
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">{{ $post->user->name }}</h4>
                        {!! optional($post->user->profile)->bio !!}
                        <p>
                          @foreach($post->user->socials as $social)
                          <a href="{{$social->pivot->link}}" target="_blank"><i class="fa fa-{{$social->icon}}"></i></a>
                          @endforeach
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div id="disqus_thread"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('addon_script')
@if(App::environment() === 'production')
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59167a26ba33c30011148cd3&product=inline-share-buttons"></script>
<script>
var disqus_config = function () {
  this.page.url = '{{ url()->current() }}';
  this.page.identifier = 'blog-{{ $post->slug }}';
};
(function() {
  var d = document, s = d.createElement('script');
  s.src = 'https://kesatriakeyboard.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endif
@endsection