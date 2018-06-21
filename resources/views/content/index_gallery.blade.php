<div class="relative">
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                    <a href="#" class="filter active cl-effect-14" data-filter="*">All works</a>
                    <?php $exhibitions = App\Project::with('exhibition_f')->get()->sortByDesc('id')->groupBy('exhibition')->translate(config('global.lang_trans'));?>
                    @foreach($exhibitions as $exhibition)
                     <a href="#{{ $exhibition[0]->exhibition_f->name}}" class="filter cl-effect-14" data-filter=".{{ $exhibition[0]->exhibition_f->name}}">{{ $exhibition[0]->exhibition_f->name}}</a>
                     @endforeach
                       
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                    <?php $projects = App\Project::with('exhibition_f')->get()->sortByDesc('id')->take(8)->translate(config('global.lang_trans'));$delay=0; ?>

@foreach($projects as $project) 
<?php $delay=$delay+0.1;?>
                        <!-- Work Item (Lightbox) block to duplicate send id related to the slide-->
                        <li class="work-item mix {{ $project->exhibition_f->name}} wow fadeIn" data-wow-delay=" {{ $delay }}s">
                           
                            <a class='iframe group1'  href="project/{{ $project->name }}" title="{{ $project->name }}">
                                <div class="work-img">
                                    <img src="{{ Voyager::image( $project->image ) }}" alt="{{ $project->name }}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $project->name }}</h3>
                                    <div class="work-descr">
                                    {{ $project->exhibition_f->name}}
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        @endforeach 
                       
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>