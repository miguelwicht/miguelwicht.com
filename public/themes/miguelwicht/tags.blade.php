@extends(theme_view('layout'))

@section('title')
Archives
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Example of All Tags</h2>
                <ul>
                @foreach (Wardrobe::posts() as $item)
                    <li>{{ $item['title']}}</li>
                @endforeach
                </ul>
                <ul>
                @foreach (Wardrobe::tags() as $item)
                    @if ($item['tag'] != "")
                        <li><a href="{{ wardrobe_url('/tag/'.$item['tag']) }}">{{ $item['tag'] }}</a></li>
                    @endif
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
