@extends('layouts.app')

@section('content')

<h1>PostIt list</h1>


@if (count($samples) > 0)
    @foreach ($samples as $sample )
            <div id="drag1" class="drag">
                {{ $sample->content }}
            </div>
            <div class="drop"></div>
    @endforeach
@endif



@endsection