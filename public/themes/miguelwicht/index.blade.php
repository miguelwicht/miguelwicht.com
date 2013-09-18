@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
    <section class="home">

        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead text-center">Hi, I am Miguel dos Santos Vaz Dias Wicht and I am a student at the University of Applied Sciences Darmstadt where I study "Leadership in the Creative Industries".</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Recent Posts</h3>
                    <table class="table">
                    @foreach ($posts as $post)
                    <tr>
                        <td class="no-padding-left"><a href="{{ wardrobe_url('posts/'.$post->slug) }}">{{ $post->title }}</a></td>
                        <td class="no-padding-right text-right hidden-xs">{{ date("M/d/Y", strtotime($post->publish_date)) }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
	</section>
@stop
