@extends('questions/layout')

@section('content')

<section id="banner">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="questions">
    <div class="container">
        {!! Form::open(['action' => 'QuestionController@store']) !!}

        <div class="form-row">
            <label>Title:
                {!! Form::text('title') !!}
            </label>
        </div>

        <div class="form-row">
            <label>Text:
                {!! Form::text('text') !!}
            </label>
        </div>

        <div class="form-row">
            <label>Text:
                {!! Form::submit('Place a question') !!}
            </label>
        </div>
        {!! Form::close() !!}
    </div>
</section>
@endsection