@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="" style="width: 60%; margin: auto auto">
			<div class="card">
				<div class="card-header">
					Lista de mis Entradas
					<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
				</div>
			


				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th colspan="3">&nbsp</th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $category)
							<tr>
								<td>{{$category->id}}</td>
								<td>{{$category->name}}</td>
								<td width="10px">
									<a href="{{route('posts.show', $category->id)}}" 
									class="btn btn-outline-dark">Ver</a>
								</td>

								<td width="10px">
									<a href="{{route('posts.edit', $category->id)}}" 
									class="btn btn-outline-dark">Editar</a>
								</td>


								<td width="10px">
									{!!Form::open(['route'=>['posts.destroy', $category->id],
									'method'=>'DELETE'])!!}

									<button class="btn btn-outline-danger">
										Eliminar
									</button>

									{!!Form::close()!!}
								</td>


								
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$posts->render()}}

				</div>
			</div>
		</div>
	</div>
</div>


@endsection