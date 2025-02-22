

<?php

use Livewire\Volt\Component;
use App\Models\Blog;

new class extends Component {

    public  $blog;
    public $categories;
    public $othersBlog;
    public function mount($category,$slug)
    {
        $this->blog=Blog::findBySlug($slug);

        $this->categories=\App\Models\Category::all();

        $this->othersBlog=Blog::where('slug','!=',$slug)->latest()->take(3)->get();

        if($this->blog==null)
        {
            return redirect(route('blog'));
        }


    }
    //
}; ?>

<div>

    <x-breadcumb-wrapper secondtitle="Blog" title="{{$blog->title}}" />

<!--==============================
        Blog Area
    ==============================-->
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container px-6 md:px-10 ">
        <div class="flex flex-col grid-cols-12 gap-4 md:grid">
            <div class="lg:col-span-7 xl:col-span-8">
                <div class="th-blog blog-single">
                    @php
                    $media = $blog->getMedia('blog');
                    @endphp

                    @if ($media->count() > 1)
                    <div class="blog-img th-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($media as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image->getUrl() }}" alt="Blog Image">
                            </div>
                            @endforeach
                        </div>
                        <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                        <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                    @else
                    <div class="blog-img">
                        <img src="{{ $blog->getFirstMediaUrl('blog') }}" alt="Blog Image">
                    </div>
                    @endif
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-calendar"></i>24 Feb , 2024</a>
                            <a class="author" href="blog.html"><i class="far fa-user"></i>By Webtek</a>
                        </div>


                        <h2 class="blog-title">{{$blog->title}} </h2>


                        <article class="prose">
                            {!! tiptap_converter()->asHTML($blog->content) !!}
                        </article>


                     {{--
                        <p class="blog-desc">One of the primary benefits of managed IT services is cost savings. Small
                            businesses
                            typically have limited budgets and resources to dedicate to IT infrastructure and support.
                            By working with a managed IT services provider, small businesses can leverage the provider's
                            economies of scale to access enterprise-level IT solutions at a fraction of the cost of
                            building and maintaining an in-house IT team. Managed IT services providers also offer
                            flexible pricing models, which allow small businesses to pay only for the services they
                            need, when they need them.</p>
                        <p class="blog-desc">Another benefit of managed IT services is improved security and compliance.
                            Small businesses
                            are increasingly vulnerable to cyber attacks, and failing to comply with industry
                            regulations can result in significant financial and legal consequences. Managed IT services
                            providers offer advanced security solutions, such as firewalls, anti-virus software</p>
                        <blockquote>
                            <p>Managed IT services are becoming incedingly popular among small businesses due to their
                                numerous benefits.</p>
                            <cite>William Benjamin</cite>
                            <span class="author">Top Author</span>
                        </blockquote>
                        <p class="mt-5 mb-5 blog-desc">Managed IT services providers offer access to a team of IT
                            experts with
                            specialized knowledge and experience in a wide range of IT solutions and technologies. This
                            enables small businesses to leverage the expertise of the managed IT services provider to
                            develop and implement the best IT solutions for their unique needs. It also ensures that
                            small businesses are always up-to-date with the latest IT trends and technologies. hey
                            proactively monitor IT systems and networks, identifying and resolving issues before they
                            cause disruptions. They also provide regular maintenance and updates, ensuring that IT
                            infrastructure is running at peak performance. This enables small businesses to focus on
                            their core competencies, without having to worry about IT issues.</p>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="/assets/img/blog/blog_inner_1.jpg" alt="Blog Image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="/assets/img/blog/blog_inner_2.jpg" alt="Blog Image">
                                </div>
                            </div>
                        </div>
                        <p class="blog-desc">Quickly build covalent data after turnkey content. Distinctively
                            reconceptualize customized growth strategies via prospective potentialities. Professionally
                            pursue cutting-edge web-readiness vis-a-vis just in time infrastructures. Conveniently
                            target client-based systems with turnkey sources.</p>
                        <p class="blog-desc"> Collaboratively syndicate focused opportunities for interactive
                            deliverables. Assertively initiate client-based infomediaries through collaborative
                            mindshare create bleeding-edge meta-services</p>--}}

                        <div class="clearfix share-links ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">Advice</a>
                                        <a href="blog.html">Author</a>
                                        <a href="blog.html">Consulting</a>
                                        <a href="blog.html">Business</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="author-widget-wrap">
                                <div class="avater">
                                    <img src="/assets/img/blog/author_1.jpg" alt="avater">
                                </div>
                                <div class="avater-content">
                                    <div class="author-info">
                                        <h4 class="name"><a class="text-inherit" href="#">William Benjamin</a></h4>
                                        <span class="text">Author</span>
                                    </div>
                                    <p class="author-bio">Re-engineer multimedia based internal or "organic" sources for
                                        progressive vortals. Assertively leverage existing economically sound total
                                        linkage whereas global best practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="th-comments-wrap ">
                            <h2 class="blog-inner-title h4"> Comments (03)</h2>
                            <ul class="comment-list">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="/assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="">
                                                <span class="commented-on">15 Jun, 2024</span>
                                                <h3 class="name">Daniel Adam</h3>
                                            </div>
                                            <p class="text">Empower multifunctional e-commerce for prospective
                                                applications. Seamlessly productivate plug-and-play markets whereas
                                                synergistic scenarios.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn">Reply<i
                                                        class="fa-sharp fa-light fa-reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="th-comment-item">
                                            <div class="th-post-comment">
                                                <div class="comment-avater">
                                                    <img src="/assets/img/blog/comment-author-2.jpg"
                                                        alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="">
                                                        <span class="commented-on">20 Jun, 2024</span>
                                                        <h3 class="name">Zenelia Lozhe</h3>
                                                    </div>
                                                    <p class="text">Empower multifunctional e-commerce for prospective
                                                        applications. Seamlessly productivate plug-and-play markets</p>
                                                    <div class="reply_and_edit">
                                                        <a href="blog-details.html" class="reply-btn">Reply<i
                                                                class="fa-sharp fa-light fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="/assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="">
                                                <span class="commented-on">25 Jun, 2024</span>
                                                <h3 class="name">Jhon Smith</h3>
                                            </div>
                                            <p class="text">Empower multifunctional e-commerce for prospective
                                                applications. Seamlessly productivate plug-and-play markets whereas
                                                synergistic scenarios.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn">Reply<i
                                                        class="fa-sharp fa-light fa-reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment end -->
                        <!-- Comment Form -->
                        <div class="th-comment-form ">
                            <div class="row">
                                <h3 class="mb-4 blog-inner-title h4">Leave a Reply</h3>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Name*" class="form-control">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email*" class="form-control">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" placeholder="Website" class="form-control">
                                    <i class="far fa-globe"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="mb-0 col-12 form-group">
                                    <button class="th-btn btn-fw">Submit Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-4 lg:col-span-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search ">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget ">
                        <h3 class="widget_title">Derniers Posts</h3>
                        <div class="recent-post-wrap">

                            @forelse ($othersBlog as $blog)
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">
                                        <img src="{{$blog->getFirstMediaUrl("blog")}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">{{$blog->title}}</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="{{ route('blog.detail',['category'=>$blog->category->slug,'slug'=>$blog->slug]) }}">{{$blog->published_at}}</a>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse


                        </div>
                    </div>
                    <div class="widget widget_categories ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>

                            @foreach ($categories as  $category)
                            <li>
                                <a href="{{route('blog')}}">{{$category->title}}</a>
                                <i class="fa-regular fa-arrow-right"></i>
                            </li>

                            @endforeach


                        </ul>
                    </div>
                    <div class="widget ">
                        <h3 class="widget_title">Blog Gallerie</h3>
                       @if ($media->isNotEmpty())
                    <div class="sidebar-gallery">
                        @foreach ($media as $image)
                        <div class="gallery-thumb">
                            <img src="{{ $image->getUrl() }}" alt="Gallery Image">
                            <a href="{{ $image->getUrl() }}" class="gallery-btn popup-image">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
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
