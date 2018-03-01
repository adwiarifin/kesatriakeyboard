
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ url('img/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/apple-icon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">

	<title>{{ App\Section::getValue('title') }} - {{ App\Section::getValue('subtitle') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ url('css/paper-kit-lite.css?v=2.1.0') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    @include('front.navbar')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('//res.cloudinary.com/duy7bgnk8/image/upload/c_scale,dpr_auto,fl_progressive,w_auto/v1519938571/login-image_wumpkm.jpg');">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Welcome</h3>
								<div class="social-line text-center">
                                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
									<a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
										<i class="fa fa-twitter"></i>
									</a>
                                </div>
                                <form class="register-form" method="post" action="{{ url('/auth/login') }}">
                                    {{ csrf_field() }}
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email">

                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <button class="btn btn-danger btn-block btn-round">Login</button>
                                </form>
                                <div class="forgot">
                                    <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="footer register-footer text-center" style="position: relative;">
	                    <h6>
	                        © <script>document.write(new Date().getFullYear())</script>
	                        made with <i class="fa fa-heart heart"></i> crafted by <a href="https://kesatriakeyboard.com">Kesatria Keyboard</a>
	                    </h6>
					</div>
                </div>
        </div>
    </div>
</body>

<!-- Core JS Files -->
<script src="{{ url('js/jquery-3.2.1.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/popper.js') }}" type="text/javascript"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Switches -->
<!--script src="{{ url('js/bootstrap-switch.min.js') }}"></script-->

<!--  Paper Kit Initialization snd functons -->
<!--script src="{{ url('js/paper-kit.js?v=2.0.1') }}"></script-->

</html>