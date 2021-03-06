<div class="post">
    @if(Request::is('posts'))
        <h2><a href="{{ wardrobe_url('posts/'.$post->slug) }}">{{ $post->title }}</a></h2>
    @elseif(Request::is('posts*'))
        <h1>{{ $post->title }}</h1>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <tr>
                    <td class="min-width">Date:</td>
                    <td>{{ date("M/d/Y", strtotime($post->publish_date)) }}</td>
                </tr>
                @if($post->tags->first()->tag != '')
                <tr>
                    <td class="min-width">Tags:</td>
                    <td>
                        @include(theme_view('inc.tags'))
                    </td>
                </tr>
                @endif
            </table>
        </div>
    </div>
    <div class="content">
      {{ $post->parsed_content }}
    </div>
</div>
