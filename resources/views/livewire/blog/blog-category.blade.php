<?php
use App\Models\Blog;
use App\Models\Category;
use function Livewire\Volt\{mount, state};

// Définir les états
state(['category' => null]);


mount(function ($category) {
$this->category = Category::where('slug', $category)->first();

if (is_null($this->category)) {
return redirect()->route('blog');
}

//
});


?>



<div>
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Lists View</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-web-agency.html">Home</a></li>
                    <li>Blog Lists View</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">


                <div class="col-xxl-8 col-lg-7">

                    @empty(!$category->blogs)

                    @foreach ($category->blogs as $blog)
                    <div class="th-blog blog-single has-post-thumbnail">
                        @php
                        $media = $blog->getMedia('blog');
                        @endphp

                        @if ($media->count() > 1)
                        <div class="blog-img th-slider swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($media as $image)
                                <div class="swiper-slide">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                        <img src="{{ $image->getUrl() }}" alt="Blog Image">

                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        @else
                        <div class="blog-img">
                            <a href="{{ route('blog.detail', $blog->slug) }}">
                                <img src="{{ $blog->getFirstMediaUrl('blog') }}" alt="Blog Image">
                            </a>
                        </div>
                        @endif

                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-calendar"></i>{{ $blog->published_at }}</a>
                                <a class="author" href="blog.html"><i class="far fa-user"></i>By Webtek</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title
                                    }}</a></h2>
                            <p class="blog-text">{{ $blog->description }}</p>
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="th-btn btn-sm">Read More <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                    @endforeach

                    <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>

                    @endempty
                </div>




            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var sliders = document.querySelectorAll('.swiper-container');
            sliders.forEach(slider => {
                new Swiper(slider, {
                    loop: true,
                    navigation: {
                        nextEl: '.slider-next',
                        prevEl: '.slider-prev',
                    },
                });
            });
        });
    </script>
</div>
