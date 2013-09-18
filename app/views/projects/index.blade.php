@extends(theme_view('layout'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($projects as $project)
                    @include('projects.inc.project')
                @endforeach
            </div>
        </div>
    </div>
@stop