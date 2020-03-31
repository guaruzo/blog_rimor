@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>
            {{$post->name}}

        </h1>
        <div class="card" style="width:1000px"  >
            <div class="card-header">
                Categoría
                <a href="{{route('category', $post->category->slug)}}">
                    {{$post->category->name}}
                </a>
            </div>
            <div class="card" style="padding: 20px">
                @if($post->file)
                <img class="img-responsive" src="{{$post->file}}"/>
                @endif
					{{$post->excerpt}}
                <hr>
                {!!$post->body!!}
                <hr>
                Etiquetas
					@foreach($post->tags as $tag)
                <a href="#{{route('tag', '$tag->slug')}}">
                    {{$tag->name}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
