<?php
use function Livewire\Volt\{state,with, title,usesPagination};


usesPagination(theme: 'bootstrap');





with(fn() => [
    'projects' => \App\Models\Project::paginate(6),

]);
//

?>


<div>

    <x-breadcumb-wrapper title="Nos projets" />
        <!--==============================
        Team Area
        ==============================-->
        <section class="space">
            <div class="container">
                <div class="row gy-30">

                    @forelse ($projects as $project)


                    <div class="col-md-6">
                        <div class="course-card">
                            <div class="course-card_overlay" data-bg-src="{{$project->getFirstMediaUrl('projects')}}"></div>
                            <div class="course-card_img">
                                <img src="{{$project->getFirstMediaUrl('projects')}}" alt="Image">
                            </div>
                            <div class="course-card_content">
                                <h3 class="box-title"><a href="{{route('project.detail',['slug'=>$project->slug])}}">{{$project->title}}</a></h3>
                                <a href="" class="line-btn">Voir plus<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse




                </div>
                <div class="mb-0 text-center th-pagination mt-80">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
</div>
