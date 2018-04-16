@extends('layouts.app')

@section('title', 'Редактировать тендер')

@section('content') 

{!! Form::model($tender, ['route' => ['tenders.update', $tender->id], 'method' => 'PUT']) !!}
	<div class="row">
		<div class="col-md-8">

			{{ Form::label('title', 'Название: ')}}
			{{ Form::text('title', null, ['class' => 'form-control']) }}

			{{ Form::label('slug', 'Slug: ')}}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}

			{{ Form::label('body', 'Описание: ')}}
			{{ Form::textarea('body', null, ["class" => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="card card-body bg-light">
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
				  	{{ Form::submit('Сохранить', ['class'=>'btn btn-primary btn-block'])}}
				   
				  </div>
				  <div class="col-sm-6">
				    <a href="{{ route('tenders.show', $tender->id) }}" class="btn btn-danger btn-block">Отменить</a>
				  </div>
				</div>﻿
			</div>
			
		</div>
	</div>
	{!! Form::close() !!}

@stop