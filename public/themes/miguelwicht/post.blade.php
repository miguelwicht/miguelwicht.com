@extends(theme_view('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post">
                    <h2 class="title">{{ $post->title }}</h2>
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

                    {{ $post->parsed_content }}

                </div>
            </div>
        </div>
    </div>
@stop

