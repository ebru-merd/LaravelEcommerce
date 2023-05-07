@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3>Colors List
                    <a href="{{ url('admin/colors/create') }}" class="btn btn-primary float-end">Add Color</a>
                </h3>
            </div>
            <div class="card-body">
            <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color Code
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($colors as $item)

                            <tr>
                                <td class="text-xs font-weight-bold mb-0">{{ $item->id }}</td>
                                <td class="text-xs font-weight-bold mb-0">{{ $item->name }}</td>
                                <td class="text-xs font-weight-bold mb-0">{{ $item->code }}</td>

                                <td class="text-xs font-weight-bold mb-0">
                                    {{ $item->status ? 'Hidden' : 'Visible' }}</td>
                                <td class="text-xs font-weight-bold mb-0">
                                    <a href="{{ url('admin/colors/'.$item->id.'/edit') }}"
                                    class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    <a href="{{ url('admin/colors/'.$item->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this data?')"
                                    class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
