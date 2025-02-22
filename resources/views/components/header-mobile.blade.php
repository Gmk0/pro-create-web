<div class="th-menu-wrapper">
    <div class="text-center th-menu-area">
        <!-- Bouton pour fermer le menu mobile -->
        <button class="th-menu-toggle">
            <i class="fal fa-times"></i>
        </button>

        <!-- Logo pour la version mobile -->
        <div class="mobile-logo">
            <a href="/">
                <img src="/assets/img/logo_p.png" alt="">
            </a>
        </div>

        <!-- Menu mobile -->
        <div class="th-mobile-menu">
            <ul class="space-y-4">
                <li>
                    <a href="/" class="block hover:text-gray-400">Accueil</a>
                </li>
                <li>
                    <a href="/services" class="block hover:text-gray-400">Nos Services</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="block hover:text-gray-400">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="block hover:text-gray-400">Contact</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block hover:text-gray-400">À propos de nous</a>
                </li>
            </ul>
        </div>
    </div>
</div>
