@props(['title','secondtitle'=>null])

<div class="breadcumb-wrapper background-image" style="background-image: url(/assets/img/bg/breadcumb-bg.jpg);">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$title}}</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Accueil</a></li>

                @empty(!$secondtitle)
                    <li><a href="/{{$secondtitle}}">{{$secondtitle}}</a></li>
                @endempty
               <li>{{ substr($title, 0, 10) }}...</li>
            </ul>
        </div>
    </div>
</div>
