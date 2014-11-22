@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                      $postRepository = new Wardrobe\Core\Repositories\DbPostRepository();
                      $posts = $postRepository->active(Config::get('core::wardrobe.per_page')); ?>
                    @foreach ($posts as $post)
                        @include(theme_view('inc.post'))
                    @endforeach

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
	</section>
@stop
