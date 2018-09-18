@extends('layouts.index')

@section('professor-content')
	<div class="container-fluid">
		<div class="row">
			<div class="card-deck">
				@if (isset($projetos))
					@foreach ($projetos as $projeto)
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">
									{{$projeto->nome}}
								</h5>
								<p class="card-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<a href="" class="card-link">
									Detalhes
								</a>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
@endsection