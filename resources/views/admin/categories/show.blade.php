@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="" style="width: 60%; margin: auto auto">
			<div class="card">
				<div class="card-header">
					Ver Categoría
					
				</div>
			


				<div class="card-body">
					
					<p><strong>Nombre</strong> {{ $category->name }}</p>
					<p><strong>Slug</strong> {{ $category->slug }}</p>
					<p><strong>Contenido</strong> {{ $category->body }}</p>

				</div>
			</div>
		</div>
	</div>
</div>


@endsection