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
                                        <img class="img" src="{{ Storage::url($work->image) }}" />
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

                        <!--div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-img-top">
                                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro">
                                                    <img class="img" src="{{ url('img/work2.jpg') }}" />
                                                </a>
                                </div>
                                <div class="card-body">
                                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                        <h4 class="card-title">Light Bootstrap Dashboard </h4>
                                    </a>
                                    <h6 class="card-category text-muted">Premium template</h6>
                                    <p class="card-description">
                                        Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-img-top">
                                    <a href="https://www.creative-tim.com/product/get-shit-done-pro">
                                                    <img class="img" src="{{ url('img/work3.jpg') }}" />
                                                </a>
                                </div>
                                <div class="card-body">
                                    <a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                        <h4 class="card-title">Get Shit Done Kit Pro</h4>
                                    </a>
                                    <h6 class="card-category text-muted">Premium UI kit</h6>
                                    <p class="card-description">
                                        Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements.
                                    </p>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('/works') }}" class="btn btn-danger btn-round" target="_blank">View All Our Works</a>
                        </div>
                    </div>
                </div>
            </div>