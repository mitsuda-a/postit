@extends('layouts.app')

@section('content') 
 


@if (count($samples) > 0)
        <ul id ="sortable">
            @foreach ($samples as $sample )
                        <li class="ui-state-default">
                        {{ $sample->content }}
                        {!! Form::model($sample,['route' => ['samples.destroy',$sample->id], 'method' => 'delete']) !!}
                        	<p><span><button id=button-pa><i class="fas fa-trash fa-xs" style="color:red;"></i></button></span></p>
                        {!! Form::close() !!}	
                        </li>
            @endforeach
        </ul>        
@endif
<div class="">
    <div class="">
        {!! Form::model($sample,['route' => 'samples.store']) !!}
            <div class="form-group">
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('PUT', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <p>&nbsp;</p>
    </div>
</div>
<br>

@endsection