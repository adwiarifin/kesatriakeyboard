      <div class="section section-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h6 class="text-muted">Our work</h6>
              <h2 class="title">Some of Our Awesome Products</h2>
              <h5 class="description">{{ App\Section::getValue('our_products') }}</h5>
            </div>
          </div>
          <div class="space-top"></div>
          <div class="row">
            @foreach($works as $work)
            <div class="col-md-4">
              <div class="card card-plain">
                <div class="card-img-top">
                  <a href="{{ url('/portfolio/'.$work->slug) }}">
                    <img class="img" src="{{ $work->getImageUrl() }}" />
                  </a>
                </div>
                <div class="card-body">
                  <a href="{{ url('/portfolio/'.$work->slug) }}">
                    <h4 class="card-title">{{ $work->name }}</h4>
                  </a>
                  <h6 class="card-category text-muted">{{ $work->platform }}</h6>
                  <p class="card-description">
                    {{ $work->getSummary() }}
                    <a href="{{ url('/portfolio/'.$work->slug) }}"> Read More </a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="{{ url('/portfolio') }}" class="btn btn-danger btn-round">View All Our Works</a>
            </div>
          </div>
        </div>
      </div>