@extends('layouts.app')

@section('title', 'Редактировать тендер')

@section('content') 

{!! Form::model($user, ['route' => ['account.update', $user->id], 'method' => 'PUT']) !!}
	<div class="row">
		<div class="col-md-8">

			{{ Form::label('name', 'Имя: ')}}
			{{ Form::text('name', null, ['class' => 'form-control']) }}


			{{ Form::label('email', 'Email: ')}}
			{{ Form::text('email', null, ["class" => 'form-control']) }}

			{{ Form::label('phone', 'Телефон: ')}}
			{{ Form::text('phone', null, ["class" => 'form-control']) }}
		</div>

		

				
		
		

		<div class="col-md-4">
			<div class="card card-body bg-light">

				
				<dl class="dl-horizontal">
				  <dt>Cоздан:</dt>
				  <dd>{{ date( 'M j, Y H:i' , strtotime($user->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Изменен: </dt>
				  <dd>{{ date( 'M j, Y H:i' , strtotime($user->updated_at))}}</dd>
				</dl>
				<hr>

				<div class="row">
				  <div class="col-sm-6">
				  	{{ Form::submit('Сохранить', ['class'=>'btn btn-primary btn-block'])}}
				   
				  </div>
				  <div class="col-sm-6">
				    <a href="{{ route('account.index') }}" class="btn btn-danger btn-block">Отменить</a>
				  </div>
				</div>﻿
			</div>
			
		</div>
	</div>
	{!! Form::close() !!}

@stop