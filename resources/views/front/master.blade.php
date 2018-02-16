<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ url('img/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ App\Section::getValue('title') }} - {{ App\Section::getValue('subtitle') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('css/paper-kit-lite.css?v=2.1.0') }}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('css/custom.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('css/nucleo-icons.css') }}" rel="stylesheet" />
</head>

<body class="presentation-page loading">
    @include('front.navbar')
    <div class="wrapper">
        @include('front.header')
        <div class="main">
            @include('front.about') @include('front.portfolio') @include('front.blogposts') @include('front.contact')
        </div>
    </div>
    <footer class="footer footer-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/') }}">Blog</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>
                        made with <i class="fa fa-heart heart"></i> crafted by <a href="https://kesatriakeyboard.com">Kesatria Keyboard</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Core JS Files -->
<script src="{{ url('js/jquery-3.2.1.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/popper.js') }}" type="text/javascript"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Switches -->
<script src="{{ url('js/bootstrap-switch.min.js') }}"></script>

<!--  Plugins for Slider -->
<!--script src="{{ url('js/nouislider.js') }}"></script-->

<!--  Plugins for DateTimePicker -->
<!--script src="{{ url('js/moment.min.js') }}"></script>
<script src="{{ url('js/bootstrap-datetimepicker.min.js') }}"></script-->

<!--  Paper Kit Initialization and functons -->
<script src="{{ url('js/paper-kit.js?v=2.1.0') }}"></script>

<!--  Google Map functions -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKrdkZVJbquNPCfa3MYM8LeLn18NrxSsc"></script>
<script type="text/javascript">
    $().ready(function() {
        examples.initContactUsMap();
    });
</script>

</html>