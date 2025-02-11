<?php

use function Livewire\Volt\{state,with};




with(fn() => [
    'blogs' => \App\Models\Blog::latest()->paginate(10),
]);

?>

<div class="p-6 overflow-hidden space-bottom" id="blog-sec" data-bg-src="/assets/img/blog/blog_bg_1.png">
    <div class="container ">
        <div class="text-center title-area">
            <span class="sub-title">Derniers Articles</span>
            <h2 class="sec-title">Découvrez nos dernières actualités et insights</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider4"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <!-- Article 1 -->

                    @forelse ($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="blog-box style2">
                            <div class="blog-img">
                                <img width="420" height="260" src="{{$blog->getFirstMediaUrl('blog')}}" alt="Image de l'article">
                            </div>
                            <div class="blog-box_content">
                                <p class="blog-tag">{{$blog->category->title}}</p>
                                <h3 class="box-title"><a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{$blog->title}}</a></h3>
                                <p class="blog-text">{{$blog->description}}.</p>
                                <div class="blog-meta">
                                    <span><a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{$blog->published_at}}</a></span>
                                    <span>Par <a class="author" href="blog.html">VotreEntreprise</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty

                    @endforelse


                   {{-- <!-- Article 2 -->
                    <div class="swiper-slide">
                        <div class="blog-box style2">
                            <div class="blog-img">
                                <img src="/assets/img/blog/blog_4_2.jpg" alt="Image de l'article">
                            </div>
                            <div class="blog-box_content">
                                <p class="blog-tag">Sécurité Informatique</p>
                                <h3 class="box-title"><a href="blog-details.html">5 Conseils pour protéger votre
                                        entreprise des cybermenaces</a></h3>
                                <p class="blog-text">Apprenez à protéger vos données et à renforcer la sécurité de
                                    votre infrastructure IT.</p>
                                <div class="blog-meta">
                                    <span><a href="blog.html"> 12 Décembre 2024</a></span>
                                    <span>Par <a class="author" href="blog.html">VotreEntreprise</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="swiper-slide">
                        <div class="blog-box style2">
                            <div class="blog-img">
                                <img src="/assets/img/blog/blog_4_3.jpg" alt="Image de l'article">
                            </div>
                            <div class="blog-box_content">
                                <p class="blog-tag">Marketing Digital</p>
                                <h3 class="box-title"><a href="blog-details.html">Augmentez vos ventes grâce à une
                                        stratégie marketing ciblée</a></h3>
                                <p class="blog-text">Des techniques éprouvées pour booster votre visibilité et
                                    atteindre votre audience idéale.</p>
                                <div class="blog-meta">
                                    <span><a href="blog.html"> 20 Novembre 2024</a></span>
                                    <span>Par <a class="author" href="blog.html">VotreEntreprise</a></span>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                    <!-- Ajoutez d'autres articles ici -->
                </div>
            </div>
            <button data-slider-prev="#blogSlider4" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider4" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</div>
