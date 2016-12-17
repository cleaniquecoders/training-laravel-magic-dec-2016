@extends('layouts.app')

@section('content')
	<div class="container">
		{{ $users->links() }}
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-default"
									href="{{ route('users.show', ['id' => $user->id]) }}">
									Details
								</a>

								<a class="btn btn-primary"
									href="{{ route('users.edit', ['id' => $user->id]) }}">
									Edit
								</a>

								<a href="{{ route('users.destroy', ['id' => $user->id]) }}"
									class="btn btn-danger"
                                    onclick="event.preventDefault();
                                    		if(confirm('Are you sure want to delete the record?')) {
                                             document.getElementById('delete-user-{{ $user->id }}').submit();
                                    		}">
                                    Delete
                                </a>

                                <form id="delete-user-{{ $user->id }}"
                                	action="{{ route('users.destroy', ['id' => $user->id]) }}"
                                	method="POST"
                                	style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>

							</div>
						</td>
					</tr>
				@endforeach

			</tbody>
		</table>
		{{ $users->links() }}
	</div>
@endsection
