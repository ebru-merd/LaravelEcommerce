@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3>Products
                    <a href="{{ url('admin/products/create') }}" class="btn btn-primary float-end">Add Products</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)

                        <tr>
                            <td class="text-xs font-weight-bold mb-0">{{ $product->id }}</td>
                            <td class="text-xs font-weight-bold mb-0">
                                @if($product->category)
                                   {{ $product->category->name }}
                                @else
                                    No Category
                                @endif
                            </td>
                            <td class="text-xs font-weight-bold mb-0">{{ $product->name }}</td>
                            <td class="text-xs font-weight-bold mb-0">{{ $product->selling_price }}</td>
                            <td class="text-xs font-weight-bold mb-0">{{ $product->quantity }}</td>
                            <td class="text-xs font-weight-bold mb-0">
                                {{ $product->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td class="text-xs font-weight-bold mb-0">
                                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                <a href="{{ url('admin/products/'.$product->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete
                            </a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-xs font-weight-bold mb-0">No Products Available</td>
                        </tr>

                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
