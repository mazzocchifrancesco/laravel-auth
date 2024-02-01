@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Index') }}</div>

				<div class="card-body">
					<div id="cardBox" class="container">
						<div class="row">
						@foreach ($data as $progetto)
							<div class="col-4" id="card">
								<img class="cardImg" src={{$progetto->image}} alt="">
								<p class="text-uppercase fw-bold">{{ $progetto->name }}</p>
								<p class="fw-light">{{ $progetto->description }}</p>
								<p class="fw-bold">{{ $progetto->supervisor }}</p>
								<p class="">{{ $progetto->creation_date }}</p>
                                <a href="{{ route('admin.projects.show', $progetto->id) }}" class="btn btn-primary">Mostra dettagli</a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection