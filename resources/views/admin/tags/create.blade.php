@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="" style="width: 60%; margin: auto auto">
			<div class="card">
				<div class="card-header">
					Crear etiqueta
					
				</div>
			


				<div class="card-body">
					
					{!! Form::open(['route'=>'tags.store']) !!}
						@include('admin.tags.partials.form')

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>


@endsection