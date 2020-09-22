@extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Create Carousel Image</h2>
            {!!Form::open(['action' => 'RrlcCarouselController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                <div class="form-group">    
                    {{Form::label('title','TITLE')}}
                    {{Form::text('title',' ',['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('image', 'IMAGE')}}<br>
                    {{Form::file('image', null) }}
                </div>
                <div class="form-group">
                    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    @endsection