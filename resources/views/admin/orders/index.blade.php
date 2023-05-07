@extends('layouts.admin')
@section('title','My Order')
@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h3>Orders
                </h3>
            </div>
            <div class="card-body">

            <form action="" method="GET">

            <div class="row">
                <div class="col-md-3">
                    <label >Filter By Date</label>
                    <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}"  class="form-control">
                </div>
                <div class="col-md-3">
                <label >Filter By Status</label>
                    <select name="status" class="form-select">
                        <option value="">Select All Status</option>
                        <option value="in progress" {{ Request::get('status') == 'in progress' ? 'selected' : ''}}>In Progress</option>
                        <option value="completed" {{ Request::get('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="pending" {{ Request::get('status') == 'pending' ? 'selected' : ''}}>Pending</option>
                        <option value="cancelled" {{ Request::get('status') == 'cancelled' ? 'selected' : ''}}>Cancelled</option>
                        <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected' : ''}}> Out for delivery</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <br>
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </div>
            </form>


                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Id
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tracking No
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Mode
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ordered Date
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                                Message
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $item)


                        <tr>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->id }}</td>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->tracking_no}}</td>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->fullname}}</td>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->payment_mode}}</td>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->created_at -> format('d-m-Y') }}</td>
                            <td class="  text-xs font-weight-bold mb-0">{{ $item->status_message}}</td>

                            <td class="text-xs font-weight-bold mb-0">
                                <a href="{{ url('admin/orders/'.$item->id) }}" class="btn btn-link text-dark px-3 mb-0"
                                    href="javascript:;">View</a>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No orders available</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
                <div>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
