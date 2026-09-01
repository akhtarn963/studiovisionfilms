<header id="header" class="header header-desktop {{ request()->routeIs('home') ? 'header-overlay' : '' }} header-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                <div class="header-left">
                    <a href="{{ route('home') }}" id="branding_logo">
                        @if(request()->routeIs('home'))
                            <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Logo" title="Studio Vision Films" />
                        @else
                            <img class="logo" src="{{ asset('assets/images/logo_alt.png') }}" alt="Logo" title="Studio Vision Films" />
                        @endif
                        <img class="logo-alt" src="{{ asset('assets/images/logo_alt.png') }}" alt="Logo" title="Studio Vision Films" />
                    </a>
                </div>
            </div>
            <div class="col-md-9 p-0">
                <div class="header-right">
                    <nav id="menu" class="menu menu-primary">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}">
                                <a href="{{ route('about-us') }}">About</a>
                            </li>
                            <li class="dropdown {{ request()->routeIs('our-team') || request()->routeIs('our-services') || request()->routeIs('our-gallery') ? 'active' : '' }}">
                                <a href="#">Pages</a>
                                    <ul class="sub-menu">  
                                        <li>
                                            <a href="{{ route('bts-gallery') }}">BTS Gallery</a>
                                        </li>  
                                        <li>
                                            <a href="{{ route('audition') }}">Video Auditions</a>
                                        </li>                                      
                                        <li class="{{ request()->routeIs('our-team') ? 'active' : '' }}">
                                            <a href="{{ route('our-team') }}">Our Team</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('our-services') }}">Our Services</a>
                                        </li>                                                                               
                                    </ul>
                            </li>
                            <li>
                                <a href="{{ route('our-projects') }}">Productions</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="open-search" class="open-search top-search-btn"><i class="ion-ios-search-strong"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="header header-mobile">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                <div class="header-left">
                    <div id="open-left"><i class="ion-navicon"></i></div>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="header-center">
                    <a href="{{ route('home') }}" id="logo-2">
                        <img class="logo-image" src="{{ asset('assets/images/logo_alt.png') }}" alt="Studio Vision Films" />
                    </a>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="header-right">
                    <div id="open-search-2" class="open-search top-search-btn">
                        <i class="ion-ios-search-strong"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>