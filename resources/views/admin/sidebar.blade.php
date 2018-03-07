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
                    <li class="nav-item {!! (str_contains(url()->current(), '/messages')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/messages') }}">
                            <i class="nc-icon nc-email-85"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li class="nav-item {!! (str_contains(url()->current(), '/works')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/works') }}">
                            <i class="nc-icon nc-briefcase-24"></i>
                            <p>Works</p>
                        </a>
                    </li>
                    <li class="nav-item {!! (str_contains(url()->current(), '/posts')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/posts') }}">
                            <i class="nc-icon nc-paper"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item {!! (str_contains(url()->current(), '/terminal')) ? 'active' : '' !!}">
                        <a class="nav-link" href="{{ url('/admin/terminal') }}">
                            <i class="nc-icon nc-tv-2"></i>
                            <p>Terminal</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>