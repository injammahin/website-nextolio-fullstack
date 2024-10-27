<header id="header" class="{{ request()->routeIs('home') ? 'transparent-header' : 'solid-header fixed-header' }}">
    <div class="navbar-default">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">


                        <a data-mdb-button-init class="navbar-toggler " data-mdb-collapse-init
                            data-mdb-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2"
                            aria-expanded="false" aria-label="Toggle navigation">
                        </a>


                        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
                            <div class="navbar-header navbar-header-custom">
                                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-start">

                                    @if ($siteLogo)
                                        <img src="{{ asset($siteLogo) }}" alt="Site Logo" class="img-fluid logo p-1"
                                            style="height: 3.5rem; width:10rem !important;">
                                    @else
                                        <span class="navbar-brand">Site Name</span>
                                    @endif
                                </a>
                            </div>


                            <ul class="navbar-nav ms-auto" id="navbarNav" style="display: none;">
                                <li class="main"><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="main"><a href="{{ route('frontend.about') }}">Who we are</a></li>

                                <li><a class="main" href="{{ route('frontend.services') }}">Services</a>
                                    <ul>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.adaptive-software-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.adaptive-software-development') }}">Software
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.it-consulting-services') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.it-consulting-services') }}">IT
                                                Consulting</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.cybersecurity-companies') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.cybersecurity-companies') }}">Cybersecurity
                                                Services</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.web-application-development-services') ? 'active' : '' }}">
                                            <a
                                                href="{{ route('frontend.services.web-application-development-services') }}">Web
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.mobile-app-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.mobile-app-development') }}">Mobile
                                                App Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.software-quality-and-assurance') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.software-quality-and-assurance') }}">Quality
                                                Assurance and Testing</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.api-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.api-development') }}">API
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.enterprise-resource-planning-systems') ? 'active' : '' }}">
                                            <a
                                                href="{{ route('frontend.services.enterprise-resource-planning-systems') }}">ERP
                                                Solution</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.uiux-design-agencies') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.uiux-design-agencies') }}">UI/UX
                                                Design</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.digital-transformation') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.digital-transformation') }}">Digital
                                                Transformation Consultant</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.build-ecommerce-websites') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.build-ecommerce-websites') }}">E-commerce
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.digital-marketing-agency') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.digital-marketing-agency') }}">Digital
                                                Marketing</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class=" {{ request()->routeIs('frontend.product.index') ? 'active' : '' }}">
                                    <a class="main" href="{{ route('frontend.product.index') }}">Products</a>
                                    <ul>
                                        @foreach ($newProducts as $product)
                                            <li
                                                class="{{ request()->is('products/' . $product->slug) ? 'active' : '' }}">
                                                <a href="{{ route('frontend.product.details', $product->slug) }}"
                                                    class="product-link" data-id="{{ $product->id }}"
                                                    data-title="{{ $product->name }}"
                                                    data-navmenu-image="{{ asset('media/new_product/navmenu_images/' . $product->navmenu_image) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>




                                <li class="main"><a href="{{ route('frontend.blog') }}">Article</a></li>
                                <li class="main"><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
                                <li class="main"><a href="{{ route('frontend.career') }}">Career</a></li>
                                <li class="main"><a href="{{ route('frontend.contract_us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script></script>
