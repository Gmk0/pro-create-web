<?php

use App\Models\Service;
use function Livewire\Volt\{mount, state, with};

// Définir les états
state(['service' => null]);


mount(function ($slug) {
$this->service = Service::where('slug', $slug)->first();

if (is_null($this->service)) {
return redirect()->route('home');
}

});

with(fn() => [
'services' => \App\Models\Service::select('slug','title')->get(),
]);


?>

<div>

<x-breadcumb-wrapper title="{{$service->title}}"
    secondtitle="services"

    />
<!--==============================
    Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="mb-0 page-single">
                    <div class="page-img th-anim">



                        <img src="{{$service->media[1]->getUrl()}}" alt="{{$service->media[1]->name}}">






                    </div>
                    <div class="page-content">
                        <h4 class="sec-title page-title">{{$service->title}}</h4>

                        <article id="article">
                                {!! tiptap_converter()->asHTML($service->content) !!}
                            </article>



                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_categories style2 ">
                        <h3 class="widget_title">Tout les services</h3>
                        <ul>

                            @foreach ($services as $service)
                            <li>
                                <a href="{{route('service.details', $service->slug)}}">{{$service->title}}</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>

                            @endforeach

                            {{--<li>
                                <a href="blog.html">Business Intelligence</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>
                            <li>
                                <a href="blog.html">Artificial Intelligence</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>
                            <li>
                                <a href="blog.html">Resource Planning</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>
                            <li>
                                <a href="blog.html">UI/UX Design Services</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>--}}
                        </ul>
                    </div>
                   <div class="widget widget_call">
                    <div class="widget-call">
                        <h4 class="text-white box-title">Besoin d'aide ?</h4>
                        <p class="text-white">Nous sommes disponibles 24/7 pour vous assister</p>
                        <div class="widget_call">

                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <span class="info-box_subtitle">Appelez-nous</span>
                                    <p class="info-box_text">
                                        <a href="tel:+243813657847" class="info-box_link">+243 813657847</a>
                                    </p>
                                </div>
                            </div>

                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <span class="info-box_subtitle">Contactez-nous sur WhatsApp</span>
                                    <p class="info-box_text">
                                        <a href="https://wa.me/243813657847" class="info-box_link" target="_blank">+243 813657847</a>
                                    </p>
                                </div>
                            </div>

                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="info-box_subtitle">Envoyez-nous un e-mail</span>
                                    <p class="info-box_text">
                                        <a href="mailto:info@pro-create-drc.com" class="info-box_link">info@pro-create-drc.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="info-box d-none">
                                <div class="info-box_icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="info-box_subtitle">Adresse de notre bureau</span>
                                    <p class="info-box_text">125 Berlin, Allemagne</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </aside>
            </div>
        </div>
    </div>
</section>
</div>
