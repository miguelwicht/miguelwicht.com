@extends(theme_view('layout'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('projects.inc.project')
            </div>
        </div>
    </div>
@stop