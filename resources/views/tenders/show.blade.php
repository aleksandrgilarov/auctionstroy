@extends('layouts.app')

@section('title', 'Информация о тендере')

@section('content')

<div class="row">
		<div class="col-md-8">
			<h1>{{ $tender->title }}</h1>

			<p class="lead">{{$tender->body}}</p>
		</div>

		<div class="col-md-4">
			<div class="card card-body bg-light">

				<dl class="dl-horizontal">
				  <dt>URL:</dt>
				  <dd><a href="{{ url('blog/'.$tender->slug) }}">{{ url('blog/'.$tender->slug)}}</a></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Время создания:</dt>
				  <dd>{{ date( 'M j, Y H:i' , strtotime($tender->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Изменен: </dt>
				  <dd>{{ date( 'M j, Y H:i' , strtotime($tender->updated_at))}}</dd>
				</dl>
				<hr>

				<div class="row">
				  <div class="col-sm-6">
				    <a href="{{ route('tenders.edit', $tender->id) }}" class="btn btn-primary btn-block">Редактировать</a>
				  </div>
				  <div class="col-sm-6">
				  	{!! Form::open(['route' => ['tenders.destroy', $tender->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Удалить', ['class' => 'btn btn-danger bth-block'])!!}

				   {!! Form::close() !!}
				  </div>
				</div>﻿

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('tenders.index', '<< Вернуться назад', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
@stop