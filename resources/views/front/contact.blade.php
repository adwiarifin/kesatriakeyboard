            <div class="section-white contactus section-image" style="background-image: url('{{ url('img/soroush-karimi.jpg') }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="card card-contact no-transition">
                                    <h3 class="card-title text-center">Contact Us</h3>
                                    <div class="row">
                                        <div class="col-md-5 ml-auto">
                                            <div class="card-body">
                                                <div class="info info-horizontal">
                                                    <div class="icon icon-info">
                                                        <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="description">
                                                        <h4 class="info-title">Find us at the office</h4>
                                                        <p> {!! nl2br(App\Section::getValue('address')) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="info info-horizontal">
                                                    <div class="icon icon-danger">
                                                        <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="description">
                                                        <h4 class="info-title">Give us a ring</h4>
                                                        <p> {!! nl2br(App\Section::getValue('contact')) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mr-auto">
                                            <form role="form" id="contact-form" method="post">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">First name</label>
                                                                <input type="text" name="name" class="form-control" placeholder="First Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Last name</label>
                                                                <input type="text" name="name" class="form-control" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email address</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your message</label>
                                                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="checkbox">
                                                                <input id="checkbox1" type="checkbox">
                                                                <label for="checkbox1">
                                                                    I'm not a robot !
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-primary pull-right">Send Message
                                                            </button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>