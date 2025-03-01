<header class="home-3 header quote-page-header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontend.index') }}">
                    <img src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}" href="{{ route('frontend.index') }}"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.about') ? 'active' : '' }}" href="{{ route('frontend.about') }}"> About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.faqs') ? 'active' : '' }}" href="{{ route('frontend.faqs') }}">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.services') ? 'active' : '' }}" href="{{ route('frontend.services') }}">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>