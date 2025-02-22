

<?php
use function Livewire\Volt\{state,with};








with(fn() => [
    'projects' => \App\Models\Project::latest()->take(6)->get(),

]);
//

?>




<div class="px-6 mb-6 overflow-hidden bg-white space">
    <div class="container max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row ">
            <div class="w-auto md:w-4/12">
                <div class="text-center title-area md:text-start">
                    <span class="sub-title style1">Études de cas</span>
                    <h2 class="text-2xl font-semibold sec-title">Nos projets qui inspirent confiance</h2>
                </div>
                <div class="project-btn">
                    <a href="{{route('project')}}" class="th-btn blue-border">Voir tous les projets</a>
                </div>
            </div>
            <div class="w-auto md:w-8/12">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider has-shadow" id="projectSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                        <div class="swiper-wrapper">

                            @forelse ($projects as $project)
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="{{$project->getFirstMediaUrl('projects')}}" alt="Projet 1">
                                    </div>
                                    <div class="project-content">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="{{route('project.detail',['slug'=>$project->slug])}}">{{$project->title}}</a></h3>
                                            <div class="project-tags">

                                                @forelse ($project->tags as $tag)
                                                <a href="">{{$tag}}</a>

                                                @empty

                                                @endforelse


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse
                            <!-- Exemple 1 -->


                        </div>
                    </div>
                    <button data-slider-prev="#projectSlider1" class="slider-arrow slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#projectSlider1" class="slider-arrow slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
