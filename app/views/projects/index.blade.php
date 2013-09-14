@extends(theme_view('layout'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($projects as $project)
                <div class="project">
                    <div class="project-header">
                        <h2>{{ $project->title }}</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <tr>
                                        <td class="min-width">Year:</td>
                                        <td>{{ $project->years }}</td>
                                    </tr>
                                    @if(count($project->status))
                                    <tr>
                                        <td class="min-width">Status:</td>
                                        <td>{{ $project->status }}</td>
                                    </tr>
                                    @endif
                                    @if(count($project->collaborators))
                                    <tr>
                                        <td class="min-width">Team:</td>
                                        <?php $collaborators = ''; ?>
                                        @foreach($project->collaborators as $collaborator)
                                            @if($collaborator->website)
                                            <?php $collaborators .= link_to($collaborator->website, $collaborator->first_name . ' ' . $collaborator->last_name) . ', '; ?>
                                            @else
                                            <?php $collaborators .= $collaborator->first_name . ' ' . $collaborator->last_name . ', '; ?>
                                            @endif
                                        @endforeach
                                        <?php $collaborators_string = rtrim($collaborators, ", "); ?>
                                        <td>{{ $collaborators_string }}</td>
                                    </tr>
                                    @endif
                                    @if(count($project->tags))
                                    <tr>
                                        <td class="min-width">Tags:</td>
                                        <td>
                                            <ul class="tags">
                                                @foreach($project->tags as $tag)
                                                    <li>{{ $tag->tag }}</li>
                                                @endforeach

                                            </ul>
                                        </td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="project-description">
                        <h3>Project description</h3>
                        {{ md($project->description) }}
                    </div>

                    <div id="carousel-{{ $project->slug }}" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            <?php $imageCount = $project->project_images->count(); ?>
                            @for($i = 0; $i < $imageCount; $i++ )
                                @if($i == 0)
                                    <li data-target="#carousel-{{ $project->slug }}" data-slide-to="{{ $i }}" class="active"></li>
                                @else
                                    <li data-target="#carousel-{{ $project->slug }}" data-slide-to="{{ $i }}" class=""></li>
                                @endif
                            @endfor
                        </ol>
                        <div class="carousel-inner">
                            @foreach($project->project_images as $key => $project_image)
                            <?php $classes = 'item'; ?>
                                @if($key == 0)
                                    <?php $classes .= ' active'; ?>
                                @endif
                                <div class="{{ $classes }}">
                                        @if($key < 2 || $key == $imageCount - 1)
                                        <img src="{{ asset( 'img/' . $project_image->image ) }}" data-lazy-src="{{ asset( 'img/' . $project_image->image ) }}"/>
                                        @else
                                        <img src="" data-lazy-src="{{ asset( 'img/' . $project_image->image ) }}"/>
                                        @endif

                                        {{--
                                        @if($project_image->title != '' || $project_image->caption != '')
                                            <div class="carousel-caption">
                                                @if($project_image->title)
                                                    <h3>{{ $project_image->title }}</h3>
                                                @endif
                                                @if($project_image->caption)
                                                    <p>{{ $project_image->caption }}</p>
                                                @endif
                                            </div>
                                        @endif --}}
                                    </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#carousel-{{ $project->slug }}" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-{{ $project->slug }}" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
@stop