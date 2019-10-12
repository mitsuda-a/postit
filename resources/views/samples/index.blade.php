@extends('layouts.app')

@section('content')
<br>
<br>
<h1>PostIt list</h1>


@if (count($samples) > 0)
    <ul id ="sortable">
        @foreach ($samples as $sample )
                    <li class="ui-state-default">{{ $sample->content }}</li>
        @endforeach
    </ul>    
@endif
<div class="row">
    <div class="col-6">
        {!! Form::model($sample,['route' => 'samples.store']) !!}
            <div class="form-group">
                {!! Form::label('content', 'post') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('PUT', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>



@endsection