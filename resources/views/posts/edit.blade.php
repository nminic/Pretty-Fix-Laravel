@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

   <!-- Izmena objava
   Instaliranje Laravel Collective
   composer require laravelcollective/html -->



   {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   <div class = "form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    <br>
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}

   </div>

   <div class="form-group">
    {{Form::file('cover_image')}}
</div>
   {{Form::hidden('_method', 'PUT')}} <!-- Za update je metoda PUT, a za create POST -->
   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
    {!! Form::close() !!}


@endsection