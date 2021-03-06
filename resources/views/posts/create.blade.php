@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

   <!-- Čuvanje objava u DB
   Instaliranje Laravel Collective
   composer require laravelcollective/html -->



   {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   <div class = "form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    <br>
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}

   </div>

   <div class="form-group">
       {{Form::file('cover_image')}}
   </div>

   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
    {!! Form::close() !!}


@endsection