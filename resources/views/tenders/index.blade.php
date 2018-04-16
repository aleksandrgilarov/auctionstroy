@extends('layouts.app')

@section('title', 'Список тендеров')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Список тендеров</h1>
		</div>

		<div class="col-md-2 align-self-center">
			<a href="{{ route('tenders.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Создать новый</a>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Название</th>
			      <th scope="col">Описание</th>
			      <th scope="col">Создан</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>

			  	@foreach ($tenders as $tender)
			    <tr class='clickable-row' data-href='{{route('tenders.show', $tender->id)}} '>
			      <th scope="row">{{ $tender->id }}</th>
			      <td>{{ $tender->title}}</td>
			      <td>{{ substr($tender->body, 0, 50)}} {{ strlen($tender->body) > 50 ? "..." : "" }}</td>
			      <td>{{ date('M j, Y', strtotime($tender->created_at))}}</td>
			      <td><a href=" {{route('tenders.show', $tender->id)}} " class="btn btn-default btn-sm">Открыть</a></td>
			      <td><a href="{{route('tenders.edit', $tender->id)}}" class="btn btn-default">Редактировать</a></td>
			    </tr>

			    @endforeach
			  </tbody>
			</table>

			
			    
			  <div class="row">
				 <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
				  </div>

				<div class="row justify-content-center">
				    <div class="col-xs-1" align="center">
				     {!! $tenders->links( 'vendor.pagination.bootstrap-4' ) !!}
				    </div>
				</div>
			        
			   
			
			
		</div>
	</div>




@stop