@extends('layouts.admin')

@section('title','Users List')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3>Users
                    <a href="{{ url('admin/users/create') }}" class="btn btn-primary float-end">Add User</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)

                        <tr>

                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->role_as == '0')
                            <label class="badge btn-primary">User</label>
                            @elseif ($user->role_as == '1')
                            <label class="badge btn-success">Admin</label>
                            @else
                            <label class="badge btn-danger">None</label>
                            @endif
                        </td>
                            <td class="text-xs font-weight-bold mb-0">
                                <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

                                <a href="{{ url('admin/users/'.$user->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete
                            </a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-xs font-weight-bold mb-0">No Users Available</td>
                        </tr>

                        @endforelse
                    </tbody>

                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
