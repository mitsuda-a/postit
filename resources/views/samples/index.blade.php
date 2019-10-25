@extends('layouts.app')

@section('content') 
    @if(Auth::check())
        @if (count($user->samples) > 0)
                <ul id ="sortable">
                    @foreach ($user->samples as $sample )
                                <li class="ui-state-default">
                                <div class="wf-nicomoji">{{ $sample->content }}</div>
                                {!! Form::model($sample,['route' => ['samples.destroy',$sample->id], 'method' => 'delete']) !!}
                                	<p><span><button id=button-pa><i class="fas fa-trash fa-xs" style="color:red;"></i></button></span></p>
                                {!! Form::close() !!}	
                                </li>
                    @endforeach
                </ul>        
        @endif
        <div>
            <div>
                {!! Form::model($samples,['route' => 'samples.store']) !!}
                    <div class="form-group">
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('PUT', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <p>&nbsp;</p>
            </div>
        </div>
        <br>
        <footer>
            <nav class="navbar navbar-expand-sm navbar fixed-bottom navbar-dark bg-dark">
                <ul class="nav nav-pills nav-justified">
                      <li class="nav-item">
                        <a class="nav-link  active" href="#">Active</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">help</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
				</ul>
            </nav>
        </footer>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Post It</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif    

@endsection