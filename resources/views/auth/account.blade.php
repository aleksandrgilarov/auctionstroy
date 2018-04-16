@extends('layouts.app')

@section('title', 'Информация о профиле')

@section('content')

<div class="row">
		<div class="col-md-8">
			<label for="">Имя:</label>
			<h1>{{ $user->name }}</h1>
			<hr>
			<label for="">E-mail:</label>
			<p class="lead">{{$user->email}}</p>
			<hr>
			<label for="">Область:</label>
			<p>{{$user->area}}</p>
			<hr>
			<label for="">Телефон:</label>
			<p>{{$user->phone}}</p>
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
				  <div class="col-md-12">
				    <a href="{{ route('account.edit', $user->id) }}" class="btn btn-primary btn-block">Редактировать</a>
				  </div>
				
				</div>﻿

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('home', '<< Вернуться назад', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
					
				</div>
			</div>
			
		</div>
	</div>


@endsection