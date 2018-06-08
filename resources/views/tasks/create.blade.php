@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status',['0%', '50%', '100%'], null, ['class' => 'form-control']) !!}
        
        {!! Form::submit('投稿',  ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection