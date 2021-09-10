@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ __('Admin!') }}
                </div>
            </div>
        </div>
    </div>
	
			<div class="container mt-5">
				<table class="table table-bordered mb-5">
					<thead>
						<tr class="table-success">
							<th scope="col">#</th>
							<th scope="col">Full name</th>
							<th scope="col">Email</th>
							<th scope="col">Role </th>
							<th scope="col">Account Activation Status </th>
							<th scope="col"> Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $data)
						<tr>
							<th scope="row">{{ $data->id }}</th>
							<td>{{ $data->name }}</td>
							<td>{{ $data->email }}</td>
							<td>{{ $data->user_type }}</td>
							@if($data->account_verified == 0)
							<td><span class="badge badge-danger">Not Activated</span></td>
							@else
								<td><span class="badge badge-success">Activated</span></td>
							@endif
							<td>  
							  <!-- <div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  Action
								</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								  <a class="dropdown-item activateUser" id="{{ $data->id }}" value="{{$data->id}}" href="#">Activate</a>
								  <a class="dropdown-item" id="deactivateUser" href="#">De-activate</a>
								  <a class="dropdown-item" id="delete" href="#">Delete User</a>
								</div>
							  </div>-->
                            <button class="btn btn-success activateUser" value="{{$data->id}}">Activate
                            </button>
                            <button class="btn btn-warning deactivateUser" value="{{$data->id}}">Deactivate
                            </button>
                            <button class="btn btn-danger deleteUser" value="{{$data->id}}">Delete
                            </button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				{{-- Pagination --}}
				<div class="d-flex justify-content-center">
					{!! $users->links() !!}
				</div>
			</div
			
</div>
@endsection
