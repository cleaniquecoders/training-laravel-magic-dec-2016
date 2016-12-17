@extends('layouts.app')

@section('content')
	<div class="container">
		hi {{ $user->name }}!
		<a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
	</div>
@endsection
