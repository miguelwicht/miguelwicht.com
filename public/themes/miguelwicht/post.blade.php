@extends(theme_view('layout'))

@section('title')
{{ $post->title }}
@stop

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include(theme_view('inc.post'))
            </div>
        </div>
    </div>
</section>
@stop

