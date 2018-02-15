		<div class="sidebar" data-image="{{ url('img/sidebar-5.jpg') }}" data-color="black">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ url('/') }}" class="simple-text">
                        {{ App\Section::getValue('title') }}
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item {!! (str_contains(url()->current(), '/dashboard')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                            <i class="nc-icon nc-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {!! (str_contains(url()->current(), '/sections')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/sections') }}">
                            <i class="nc-icon nc-layout-11"></i>
                            <p>Sections</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>