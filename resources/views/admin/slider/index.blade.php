@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3>Slider List
                    <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary float-end">Add Slider</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)

                        <tr>
                            <td class="text-xs font-weight-bold mb-0">{{ $slider->id }}</td>
                            <td class="text-xs font-weight-bold mb-0">{{ $slider->title }}</td>
                            <td class="text-xs font-weight-bold mb-0">{{ $slider->description }}</td>
                            <td class="text-xs font-weight-bold mb-0">
                                <img src="{{ asset($slider->image) }}" style="width:70 px; height:70px;" alt="Slider">
                            </td>
                            <td class="text-xs font-weight-bold mb-0">
                                {{ $slider->status ? 'Hidden' : 'Visible' }}</td>
                            <td class="text-xs font-weight-bold mb-0">
                                <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}"
                                class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}" onclick="return confirm('are you sure want to delete this slider?');"
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
