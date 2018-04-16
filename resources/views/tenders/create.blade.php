@extends('layouts.app')

@section('title', 'Создать новый тендер')

@section('content')

	<div class="row">
		<div class="col-md-8 mx-auto">
			<h1>Создать новый тендер</h1>
			<hr>
			{!! Form::open(array('route' => 'tenders.store' )) !!}
				{{ Form::label('title', 'Заголовок') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}
				<br>
				{{ Form::label('slug', 'Ссылка') }}
				{{ Form::text('slug', null, ['class' => 'form-control']) }}
				<br>
				{{ Form::label('body', 'Описание тендера') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
				{{ Form::submit('Выставить', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'] ) }}

			{!! Form::close() !!}
		</div>
	</div>

@stop