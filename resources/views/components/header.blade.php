

<header class="th-header header-layout4 header-absolute">
    <div class="sticky-wrapper">
        <!-- Zone du Menu Principal -->
        <div class="menu-area">
            <div class="container px-4 mx-auto">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <div class="header-logo">
                            <a href="/" class="flex justify-center h-13">
                                <img src="/assets/img/logo_p.png" height="15" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Menu Principal -->
                    <div class="hidden lg:flex">
                        <nav class="main-menu style2">
                            <ul class="flex space-x-6">
                                <li><a href="/" class="hover:text-gray-400">Accueil</a></li>
                                <li><a href="{{ route('services') }}" class="hover:text-gray-400">Services</a></li>
                                <li><a href="{{ route('blog') }}" class="hover:text-gray-400">Blog</a></li>
                                <li><a href="{{ route('about') }}" class="hover:text-gray-400">À propos de nous</a></li>
                                <li><a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Bouton d'appel à l'action -->
                    <div class="flex items-center">
                        <div class="header-button">
                            <a href="{{ route('contact') }}" class="hidden th-btn lg:block style5">Commencer Maintenant</a>
                            <button type="button" class="block th-menu-toggle lg:hidden">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
