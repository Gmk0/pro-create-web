<?php



use function Livewire\Volt\{state,with, title,usesPagination};


usesPagination(theme: 'bootstrap');

state(['search' => ''])->url();



with(fn() => [
    'blogs' => \App\Models\Blog::when($this->search, function ($query) {
        $query->where('title', 'like', '%' . $this->search . '%')
              ->orWhere('description', 'like', '%' . $this->search . '%');
    })->paginate(2),
    'categories' => \App\Models\Category::all(),
]);

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

                   @foreach ($blogs as $blog)
                <div class="th-blog blog-single has-post-thumbnail">
                    @php
                    $media = $blog->getMedia('blog');
                    @endphp

                    @if ($media->count() > 1)
                    <div class="blog-img th-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($media as $image)
                            <div class="swiper-slide">
                                <a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">
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
                        <a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">
                            <img src="{{ $blog->getFirstMediaUrl('blog') }}" alt="Blog Image">
                        </a>
                    </div>
                    @endif

                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-calendar"></i>{{ $blog->published_at }}</a>
                            <a class="author" href="blog.html"><i class="far fa-user"></i>By Webtek</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{ $blog->title }}</a></h2>
                        <p class="blog-text">{{ $blog->description }}</p>
                        <a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}" class="th-btn btn-sm">Read More <i
                                class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                @endforeach

                    <div class="row">

                       <div class="col-md-12 col-lg-6">
                        {{ $blogs->links() }}
                       </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search ">
                            <form class="search-form">
                                <input type="text" wire:model.live.debounce.500ms="search" placeholder="mot clés">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>

                                @foreach ($categories as $category)
                                <li>
                                    <a href="{{route('blog')}}">{{$category->title}}</a>
                                    <i class="fa-regular fa-arrow-right"></i>
                                </li>

                                @endforeach


                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Advice</a>
                                <a href="blog.html">Author</a>
                                <a href="blog.html">Consulting</a>
                                <a href="blog.html">Webteck</a>
                                <a href="blog.html">Family</a>
                                <a href="blog.html">Health</a>
                                <a href="blog.html">Judge</a>
                                <a href="blog.html">Solution</a>
                            </div>
                        </div>
                    </aside>
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
