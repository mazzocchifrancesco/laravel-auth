@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Index') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('You are logged in!') }}

					<div id="cardBox" class="container">
						<div class="row">
							<div class="col-2" id="card">
								<img class="cardImg" src={{$project->image}} alt="">
								<p class="text-uppercase fw-bold">{{ $project->name }}</p>
								<p class="fw-light">{{ $project->description }}</p>
								<p class="fw-bold">{{ $project->supervisor }}</p>
								<p class="">{{ $project->creation_date }}</p>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Elimina" class="btn btn-danger">
                                </form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection