@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">

        {!! Form::model($task, ['route' => 'tasks.store']) !!}

            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::select('status',['0%'=>'0%', '50%'=>'50%', '100%'=>'100%'], null, ['class' => 'form-control']) !!}
        
            {!! Form::submit('投稿',  ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
        
        </div>
    </div>        

@endsection