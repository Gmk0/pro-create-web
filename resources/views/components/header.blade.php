



<header class="th-header  header-layout4 header-absolute">
    <div class="sticky-wrapper">
        <!-- Zone du Menu Principal -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="col-auto">
                        <div class="header-logo ">
                            <a href="/" class="text-center">
                                <img src="/assets/img/logo_p.png" height="15" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Menu Principal -->
                    <div class="col-auto">
                        <nav class="main-menu style2 d-none d-lg-inline-block">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Bouton d'appel à l'action -->
                    <div class="col-auto">
                        <div class="header-button">
                            <a href="{{route('contact')}}" class="th-btn style5">Commencer Maintenant</a>
                            <button type="button" class="th-menu-toggle d-block d-lg-none">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

