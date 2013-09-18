@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php $posts = Wardrobe::posts(); ?>
                    @foreach ($posts as $post)
                        @include(theme_view('inc.post'))
                    @endforeach

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
	</section>
@stop
