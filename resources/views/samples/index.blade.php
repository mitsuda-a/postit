@extends('layouts.app')

@section('content') 
    @if(Auth::check())
        @if (count($samples) > 0)
                <ul id ="sortable">
                    @foreach ($samples as $sample )
                                <li class="ui-state-default">
                                <div class="wf-nicomoji">{{ $sample->content }}</div>
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
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Post It</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif    

@endsection