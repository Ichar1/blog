@extends('main')

@section('title', '|New Posts')

@section('stylesheets')
        {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
                <h1>Create New Posts</h1>
                <hr>

                {!! Form::open(array('route' => 'posts.store')) !!}
                        {{form::label('title','Title:')}}
                        {{form::text('title', null, array('class' => 'form-control'))}}

                        {{ form::label('slug','Slug:') }}
                        {{ form::text('slug', null, array('class'=> 'form-control')) }}

                        {{form::label('body','Post Body')}}
                        {{form::textarea('body',null,array('class' => 'form-control'))}}

                        {{form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}

                {!! Form::close() !!}

        </div>
</div>

@section('scripts')
        {!! Html::script('js/parsley.min.css') !!}
@endsection

@endsection
