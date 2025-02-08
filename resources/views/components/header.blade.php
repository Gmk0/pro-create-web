  <header class="th-header header-layout4 header-absolute">
        <div class="sticky-wrapper">
            <!-- Zone du Menu Principal -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="col-auto">
                            <div class="header-logo ">
                                <a href="accueil.html">

                                  <h5 class="">PRO CREATE</h5>


                                </a>
                            </div>
                        </div>
                        <!-- Menu Principal -->
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block">
                                <ul>
                                    <li class="">
                                        <a href="/">Accueil</a>

                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">Nos Services</a></li>
                                            <li><a href="details-service.html">Détails Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{route('blog')}}">Blog</a>

                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">A propos de nous </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
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

