<?php

use function Livewire\Volt\{state,with};




with(fn() => [
    'blogs' => \App\Models\Blog::latest()->paginate(10),
]);

?>


<div class="p-6 overflow-hidden bg-center bg-cover md:p-0 space-bottom"
    style="background-image: url('/assets/img/blog/blog_bg_1.png');" id="blog-sec">

    @empty(!$blogs)



    <div class="max-w-6xl p-4 mx-auto">
        <div class="text-center title-area">
            <span class="sub-title-custom">Derniers Articles</span>
            <h2 class="mt-4 text-2xl font-semibold sec-title md:text-2xl">Découvrez nos dernières actualités et insights</h2>
        </div>

        <div class="relative slider-area">
            <div class="">
                <button data-slider-prev="#blogSlider4"
                    class="transform -translate-y-1/2 border border-blue-400 shadow-lg slider-arrow slider-prev">
                    <i class="far fa-arrow-left"></i>
                </button>
                <button data-slider-next="#blogSlider4"
                    class="transform -translate-y-1/2 border border-blue-400 shadow-lg slider-arrow slider-next">
                    <i class="far fa-arrow-right"></i>
                </button>
            </div>
            <div class="swiper th-slider " id="blogSlider4"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                <div class="swiper-wrapper">
                    <!-- Articles dynamiques -->
                    @forelse ($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="blog-box min-h-[38rem] style2">
                            <div class="blog-img">
                                <img class="object-cover w-full h-64" src="{{$blog->getFirstMediaUrl('blog')}}"
                                    alt="Image de l'article">
                            </div>
                            <div class="p-4 blog-box_content">
                                <p class="blog-tag">{{$blog->category->title}}</p>
                                <h3 class="text-lg font-semibold box-title">
                                    <a
                                        href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{$blog->title}}</a>
                                </h3>
                                <p class="mt-2 text-gray-600 blog-text">{{$blog->description}}.</p>
                                <div class="mt-4 text-sm text-gray-500 blog-meta">
                                    <span><a
                                            href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{$blog->published_at}}</a></span>
                                    <span class="ml-4">Par <a class="text-blue-600 author"
                                            href="blog.html">VotreEntreprise</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-gray-500">Aucun article disponible pour le moment.</p>
                    @endforelse
                </div>
            </div>

            <!-- Flèches de navigation -->

        </div>
    </div>
    @endempty
</div>
