<?php
use App\Models\Blog;
use App\Models\Project;
use function Livewire\Volt\{mount, state};

// Définir les états
state(['project' => null,'next_project' => null, 'prev_project' => null]);


mount(function ($slug) {
$this->project = Project::where('slug', $slug)->first();



if (is_null($this->project)) {
return redirect()->route('project');
}

// Récupérer le projet suivant (le plus proche avec un ID supérieur)
$this->next_project = Project::where('id', '>', $this->project->id)
->orderBy('id', 'asc')
->first();

// Récupérer le projet précédent (le plus proche avec un ID inférieur)
$this->prev_project = Project::where('id', '<', $this->project->id)
    ->orderBy('id', 'desc')
    ->first();
//
});





?>
<div>

    <x-breadcumb-wrapper title="{{$project->title}}" secondtitle="projects" />
    <!--==============================
        Project Area
    ==============================-->
    <section class="overflow-hidden space">
        <div class="container">
            <div class="project-details">
                <div class="page-img">
                    <img class="th-anim" src="{{$project->getFirstMediaUrl('projects')}}" alt="Project Image">

                    <div class="project-info-wrap">
                        <h3 class="widget_title">Project Information</h3>
                        <div class="project-info">
                            <div class="project-info_icon"><i class="fa-solid fa-user"></i></div>
                            <div class="project-info_content">
                                <p class="project-info_subtitle">Clients:</p>
                                <h6 class="project-info_title">{{$project->client}}</h6>
                            </div>
                        </div>
                        <div class="project-info">
                            <div class="project-info_icon"><i class="fa-solid fa-layer-group"></i></div>
                            <div class="project-info_content">
                                <p class="project-info_subtitle">Categorie:</p>
                                <h6 class="project-info_title">{{$project->category}}</h6>
                            </div>
                        </div>
                        <div class="project-info">
                            <div class="project-info_icon"><i class="fa-solid fa-calendar-days"></i></div>
                            <div class="project-info_content">
                                <p class="project-info_subtitle">Date:</p>
                                <h6 class="project-info_title">{{$project->published_at}}</h6>
                            </div>
                        </div>
                        <div class="project-info">
                            <div class="project-info_icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                            <div class="project-info_content">
                                <p class="project-info_subtitle">Address:</p>
                                <h6 class="project-info_title">125 Berlin, Germany</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <h4 class="">{{$project->title}}</h4>


                <article id="article">
                    {!! tiptap_converter()->asHTML($project->content) !!}
                </article>

                    <div class="row gy-30">

                        @forelse ($project->media as $media)
                        <div class="col-md-4">
                            <div class="page-img th-anim">
                                <img src="{{$media->getUrl()}}" alt="Project Image">
                            </div>
                        </div>

                        @empty

                        @endforelse


                </div>
            </div>
          <div class="project-nav">
            @if($prev_project)
            <a href="{{ route('project.detail', ['slug' => $prev_project->slug]) }}" class="nav-btn">
                <i class="far fa-arrow-left icon-btn"></i>
                Projet Précédent
            </a>
            @endif

            @if($next_project)
            <a href="{{ route('project.detail', ['slug' => $next_project->slug]) }}" class="nav-btn">
                Projet Suivant
                <i class="far fa-arrow-right icon-btn"></i>
            </a>
            @endif
        </div>
        </div>
    </section>
</div>
