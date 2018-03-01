            <div id="contact" class="section-white contactus section-image" style="background-image: url('//res.cloudinary.com/duy7bgnk8/image/upload/c_scale,dpr_auto,fl_progressive,w_auto/v1519877493/soroush-karimi_tsbwxm.jpg')">
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
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Full Name</label>
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Your message</label>
                                                    <textarea id="content" name="content" class="form-control" rows="6" placeholder="Message Content" required></textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="response" class="" style="margin-top: 20px;">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <input id="robot" name="robot" type="checkbox" required>
                                                            <label for="robot">I'm not a robot !</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                                                    </div>
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